<?php

namespace App\Http\Controllers;

use App\articulo_menor;
use App\articulo_menor_laboratorio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticuloMenorLabController extends Controller
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
        session_start();
        // $articulos_menores= articulo_mayor_laboratorio::all();
        $articulos_menores = DB::table('articulo_menor_laboratorios')
            ->join('laboratorios', 'laboratorios.id', '=', 'articulo_menor_laboratorios.id_laboratorio')
            ->join('articulo_menors', 'articulo_menor_laboratorios.id_articulo_menor', '=', 'articulo_menors.id')
            ->select("articulo_menor_laboratorios.id", 'articulo_menors.nombre', 'articulo_menors.descripcion_articulo', 'articulo_menors.stock', 'articulo_menors.status', 'articulo_menors.clave_producto', 'laboratorios.nombre_laboratorio')
            ->where('laboratorios.id',$_SESSION["laboratorista"] )
            ->get();
        return view('ArticulosLaboratorio.Menores.articulos_menores_laboratorio', compact('articulos_menores'));
        //return($articulos_menores);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('ArticulosLaboratorio.Menores.articulos-modal_laboratorio_menor'); //vista modal de agregar articulos mayores

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
        // print_r($_POST);
        //en la variable almacenamos los datos del modelo, QUE VAMOS A INSERTAR.
        $articuloMa = new articulo_menor;
        $articuloMa->nombre = $request->input('nombre');
        $articuloMa->descripcion_articulo = $request->input('descripcion');
        $articuloMa->stock = $request->input('stock');
        $articuloMa->status = '1';
        $articuloMa->clave_producto = $request->input('codigo_articulo');
        $articuloMa->tipo='Articulo Menor';

        $articuloMa->save(); //Guardamos los datos del articulo mayor primero

        //Guardamos el laboratorio traido desde el select
        $labselect = $request->get('select-laboratorio');

        //Creamos un objeto de laboratorio, para buscar el laboratorio que viene desde el select
        $laboratorio = DB::table('laboratorios')
            ->select('laboratorios.id')
            ->where('laboratorios.nombre_laboratorio', $labselect)  //Si existe un laboratorio en la base de datos , =, ala del select
            ->get();    //Guardala en la variable laboratorio


        //El siguiente codigo viene desde articulos-modal_laboratorio_mayor.   
        // Este agrega un nuevo articulo ala tabla articulos mayores pero con la sig opciones
        //Se agregara a ArticulosMayoresLab
        $articulolaboratorio = new articulo_menor_laboratorio;


        //Para guardar el id del articulo necesitamos traerlo una ves creado

        //Traemos el numero de serie, este debe ser unico para cada articulo, es por eso que con esto lo validamos.
        $numserie = $request->input('codigo_articulo');

        $idArticulo = DB::table('articulo_menors')
            ->select('articulo_menors.id') //Seleccionamos el id 
            ->where('articulo_menors.clave_producto', $numserie) //Verificamos que exista un numero de serie, con el del input
            ->get(); //Nos guardara lo seleccionado (id) en la variable.

        $articulolaboratorio->id_laboratorio = $laboratorista[0]->id; //$laboratorio es un conjunto de laboratorios. Entonces, si solo desea el campo "id" del PRIMER resultado, puede hacer $laboratorio[0]->id
        $articulolaboratorio->id_articulo_menor = $idArticulo[0]->id; //Tomamos el id y lo guardamos





        $articulolaboratorio->save(); //Guardamos despues el articulo de laboratorio.

        return redirect()->route("ArticulosMenoresLab.index")->with('success', 'Agregado con exito'); //Redirigimos ala pagina index, Y catcheamos cualquier errot con with.

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\articulo_menor_laboratorio  $articulo_menor_laboratorio
     * @return \Illuminate\Http\Response
     */
    public function show(articulo_menor_laboratorio $articulo_menor_laboratorio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\articulo_menor_laboratorio  $articulo_menor_laboratorio
     * @return \Illuminate\Http\Response
     */
    public function edit(articulo_menor_laboratorio $articulo_menor_laboratorio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\articulo_menor_laboratorio  $articulo_menor_laboratorio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, articulo_menor_laboratorio $articulo_menor_laboratorio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\articulo_menor_laboratorio  $articulo_menor_laboratorio
     * @return \Illuminate\Http\Response
     */
    public function destroy(articulo_menor_laboratorio $articulo_menor_laboratorio)
    {
        //
    }
}
