<?php

namespace App\Http\Controllers;

use App\alumno;
use App\oficio;
use App\tramite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Return_;

class TramiteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        session_start();

        // ---------------------------- Saber que usuario/alumno esta logeado ----------------------------------------------
        //Obtenemos las credenciales del ususario loggeado, De esta manera mostramos los articulos dependiendo del laboratorio que tenga asignado.
        $user_loged = auth()->user(); //{"id":1,"name":"Alan","email":"test@test.com","email_verified_at":null,"created_at":null,"updated_at":null}
        $id_user_loged = $user_loged->id; //Obtenemos el id.
        // print_r($user_loged);
        $prestamos = DB::table('prestamos')
            ->join('alumnos', 'alumnos.id', '=', 'prestamos.id_alumno')
            ->join('users', 'users.id', '=', 'alumnos.id_usuario')
            ->join('laboratorios', 'laboratorios.id', '=', 'prestamos.id_laboratorio')
            ->select('prestamos.id', 'prestamos.fecha', 'prestamos.status', 'laboratorios.nombre_laboratorio', 'users.name', 'alumnos.semestre', 'alumnos.carrera', 'alumnos.numero_control','id_usuario')
            ->where([['users.id', '=', $id_user_loged], ['prestamos.status', '=', 1]]) //Array con varias clausulas where
            ->get();

        $alumno= DB::table('alumnos')
            ->join('users', 'users.id','=', 'alumnos.id_usuario')
            ->select('alumnos.id')
            ->where('users.id',$id_user_loged)
            ->get();

        $tramites = DB::table('tramites')
        ->join('oficios','oficios.id', '=', 'tramites.id_oficio')
        ->join('alumnos','alumnos.id', '=', 'tramites.id_alumno')
        ->select('tramites.fecha','tramites.status','tramites.id_alumno','tramites.id_oficio','oficios.nombre','oficios.folio_oficio')
        ->where([['alumnos.id',$alumno[0]->id],['tramites.status',1] ])
        ->get();



        return view('Alumnos/adeudos-vista-alumnos', compact('prestamos','tramites')); //[{"id":1,"fecha":"2022-06-08","status":1,"name":"Alan","semestre":6,"carrera":"Informatica","numero_control":192310781}]

        //return $tramites;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        session_start();

        //Para crear los tramites del alumno.
        //Obtenemos las credenciales del ususario loggeado, De esta manera mostramos los articulos dependiendo del laboratorio que tenga asignado.
        $user_loged = auth()->user(); //{"id":1,"name":"Alan","email":"test@test.com","email_verified_at":null,"created_at":null,"updated_at":null}
        $id_user_loged = $user_loged->id; //Obtenemos el id.
        $usuarios = DB::table('alumnos')
            ->join('users', 'users.id', '=', 'alumnos.id_usuario') //users es la tabla, no el modelo
            ->select('alumnos.semestre', 'alumnos.carrera', 'alumnos.numero_control', 'users.name', 'alumnos.id')
            ->where('users.id', $id_user_loged)
            ->get();
        $prestamos = DB::table('prestamos')
            ->join('alumnos', 'alumnos.id', '=', 'prestamos.id_alumno')
            ->join('users', 'users.id', '=', 'alumnos.id_usuario')
            ->join('laboratorios', 'laboratorios.id', '=', 'prestamos.id_laboratorio')
            ->select('prestamos.id', 'prestamos.fecha', 'prestamos.status', 'laboratorios.nombre_laboratorio', 'users.name', 'alumnos.semestre', 'alumnos.carrera', 'alumnos.numero_control')
            ->where([['users.id', '=', $id_user_loged], ['prestamos.status', '=', 0]]) //Array con varias clausulas where
            ->get();

        //  print_r($user_loged);
        // print_r($usuarios);
        //   print_r($prestamos);
        $bandera = 0;
        $_SESSION['numero_control_alumno']= $usuarios[0]->numero_control;
        $_SESSION['articulo']= $request->get('seleccion_cartas');
        if (DB::table('prestamos')->where([
            ['prestamos.id_alumno', '=', $usuarios[0]->id],
            ['prestamos.status', '=', '1'],
        ])->exists()) {

            return view('Alumnos/tramite',compact('prestamos','bandera'));
        } else {

            $bandera=1;
            return view('Alumnos/tramite', compact('prestamos','bandera')); //[{"id":1,"fecha":"2022-06-08","status":1,"name":"Alan","semestre":6,"carrera":"Informatica","numero_control":192310781}]

        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        session_start();

        $user_loged = auth()->user(); //{"id":1,"name":"Alan","email":"test@test.com","email_verified_at":null,"created_at":null,"updated_at":null}
        $id_user_loged = $user_loged->id; //Obtenemos el id.

        // $seleccionadoc = $_POST['select']; //Carta seleccionada
        $seleccionadoc =str_replace('"', '',$_POST['select'] );
         //Obtener numero de control
        $usuarios = DB::table('alumnos')
        ->join('users', 'users.id', '=', 'alumnos.id') //users es la tabla, no el modelo
        ->select( 'alumnos.numero_control','alumnos.id')
        ->where('alumnos.numero_control',$_SESSION['numero_control_alumno'])
        ->get();
        //Primero necesitamos crear una carta con un folio unico.

        //Algoritmo del folio:
        // $folio_unico=( $usuarios[0]->numero_control + date('Y-m-d') + rand(1000,100000) );
        // $folio_unico=(  date('Y-m-d') + rand(1000,100000) );
        $carta = new oficio();
        $carta ->nombre =$seleccionadoc;
        $carta ->folio_oficio =rand(1000,100000);
        $carta->save();

        //Nos traemos el ultimo oficio creado
        $id_oficio_ = oficio::select('id')->orderBy('id','DESC')->first();

        //Creamos el tramite
        $tramite = new tramite();
        $tramite-> fecha= date('Y-m-d');
        $tramite->status =1;
        $tramite->id_oficio= $id_oficio_->id;
        $tramite->id_alumno= $usuarios[0]->id;
        $tramite->save();
        // return$_SESSION['articulo'];
        return (response(json_encode($seleccionadoc), 200)->header('Content-type', 'text/plain'));

    }
    public function crearTramites(Request $request){
        $_SESSION['articulo']= $request->get('seleccion_cartas');
        return redirect()->route('/storeprueba2');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
