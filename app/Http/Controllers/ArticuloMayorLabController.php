<?php

namespace App\Http\Controllers;

use App\articulo_mayor_laboratorio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\articulo_mayor;
use App\laboratorio;
use Illuminate\Support\Arr;

class ArticuloMayorLabController extends Controller
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

        // $articulos_menores= articulo_mayor_laboratorio::all();
        $articulos_mayores= DB::table('articulo_mayor_laboratorios')
            -> join ('laboratorios', 'laboratorios.id', '=' , 'articulo_mayor_laboratorios.id_laboratorio')
            -> join ('articulo_mayors', 'articulo_mayor_laboratorios.id_articulo_mayor', '=' , 'articulo_mayors.id')
            ->select("articulo_mayor_laboratorios.id", 'articulo_mayors.nombre','articulo_mayors.descripcion_articulo', 'articulo_mayors.numero_serie', 'articulo_mayors.status', 'laboratorios.nombre_laboratorio' )
            ->where('laboratorios.id', $_SESSION["laboratorista"] )
            ->get();
        return view('ArticulosLaboratorio.Mayores.articulos_mayores_laboratorio',compact('articulos_mayores'));
        //return($articulos_mayores);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('ArticulosLaboratorio.Mayores.articulos-modal_laboratorio_mayor'); //vista modal de agregar articulos mayores

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

        // ---------------------------- Saber que usuario/personal esta logeado ----------------------------------------------
        //Obtenemos las credenciales del ususario loggeado, De esta manera mostramos los articulos dependiendo del laboratorio que tenga asignado.
        $user_loged = auth()->user(); //{"id":1,"name":"Alan","email":"test@test.com","email_verified_at":null,"created_at":null,"updated_at":null}
        $id_user_loged = $user_loged->id; //Obtenemos el id.

        $laboratorista = DB::table('laboratorios')
            ->join('personals', 'personals.id', '=', 'laboratorios.id_personal') //Buscamos personal encargado de laboratorio
            ->join('users', 'users.id', '=', 'personals.id_usuario') //Obteniendo el personal , buscamos el id de usuario que tiene.
            ->select('users.name', 'personals.descripcion_puesto', 'personals.numero_checador', 'laboratorios.nombre_laboratorio', 'laboratorios.id')
            ->where('users.id', $id_user_loged) //Si el id del usuario loggedado, Y existe registro en la BD de ese id, Que me muestre todo lo del select.
            ->get();

        // print_r($_POST);
        //en la variable almacenamos los datos del modelo, QUE VAMOS A INSERTAR.
        $articuloMa = new articulo_mayor;
        $articuloMa-> nombre= $request->input('nombre');
        $articuloMa-> descripcion_articulo= $request->input('descripcion');
        $articuloMa-> status='1';
        $articuloMa-> numero_serie= $request->input('numero_serie');
        $articuloMa-> clave_producto= $request->input('codigo_articulo');
        $articuloMa->tipo='Articulo Mayor';

        $articuloMa->save(); //Guardamos los datos del articulo mayor primero
        
        //Guardamos el laboratorio traido desde el select
        $labselect= $request->get('select-laboratorio');

        //Creamos un objeto de laboratorio, para buscar el laboratorio que viene desde el select
        $laboratorio= DB::table('laboratorios')
            ->select('laboratorios.id')
            ->where('laboratorios.nombre_laboratorio',$labselect)  //Si existe un laboratorio en la base de datos , =, ala del select
            ->get();    //Guardala en la variable laboratorio


        //El siguiente codigo viene desde articulos-modal_laboratorio_mayor.   
        // Este agrega un nuevo articulo ala tabla articulos mayores pero con la sig opciones
        //Se agregara a ArticulosMayoresLab
        $articulolaboratorio= new articulo_mayor_laboratorio;
        
       
        //Para guardar el id del articulo necesitamos traerlo una ves creado

        //Traemos el numero de serie, este debe ser unico para cada articulo, es por eso que con esto lo validamos.
        $numserie= $request->input('numero_serie');

        $idArticulo=DB::table('articulo_mayors')
            ->select('articulo_mayors.id') //Seleccionamos el id 
            ->where('articulo_mayors.numero_serie',$numserie) //Verificamos que exista un numero de serie, con el del input
            ->get(); //Nos guardara lo seleccionado (id) en la variable.
        
        $articulolaboratorio-> id_laboratorio=$laboratorista[0]->id; //$laboratorio es un conjunto de laboratorios. Entonces, si solo desea el campo "id" del PRIMER resultado, puede hacer $laboratorio[0]->id
        $articulolaboratorio-> id_articulo_mayor=$idArticulo[0]->id; //Tomamos el id y lo guardamos
        
       
        
        
        
        $articulolaboratorio->save(); //Guardamos despues el articulo de laboratorio.

       return redirect()->route("ArticulosMayoresLab.index")->with('success','Agregado con exito'); //Redirigimos ala pagina index, Y catcheamos cualquier errot con with.
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\articulo_mayor_laboratorio  $articulo_mayor_laboratorio
     * @return \Illuminate\Http\Response
     */
    public function show(articulo_mayor_laboratorio $articulo_mayor_laboratorio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\articulo_mayor_laboratorio  $articulo_mayor_laboratorio
     * @return \Illuminate\Http\Response
     */
    public function edit(articulo_mayor_laboratorio $articulo_mayor_laboratorio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\articulo_mayor_laboratorio  $articulo_mayor_laboratorio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, articulo_mayor_laboratorio $articulo_mayor_laboratorio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\articulo_mayor_laboratorio  $articulo_mayor_laboratorio
     * @return \Illuminate\Http\Response
     */
    public function destroy(articulo_mayor_laboratorio $articulo_mayor_laboratorio)
    {
        //
    }
}
