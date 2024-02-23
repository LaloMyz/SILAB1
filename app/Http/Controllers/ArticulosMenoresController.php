<?php

namespace App\Http\Controllers;

use App\articulo_menor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticulosMenoresController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); //Se aplica restriccion para que a todas las rutaas solo se acceda autenticado.

        //$this->middleware('auth')->only('create','edit');   asi limitamos solo las rutas a unas en esepcifico.
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articulos_menores = DB::table('articulo_menor_laboratorios')
        ->join('laboratorios', 'laboratorios.id', '=', 'articulo_menor_laboratorios.id_laboratorio')
        ->join('articulo_menors', 'articulo_menor_laboratorios.id_articulo_menor', '=', 'articulo_menors.id')
        ->select("articulo_menor_laboratorios.id", 'articulo_menors.nombre', 'articulo_menors.descripcion_articulo', 'articulo_menors.stock', 'articulo_menors.status', 'articulo_menors.clave_producto', 'laboratorios.nombre_laboratorio')
        // ->where('laboratorios.id',$_SESSION["laboratorista"] )
        // ->get();
        ->paginate(5);
    return view('Laboratoristas.articulos_menores', compact('articulos_menores'));
        // //codigo funcional
        // $articulos_menores= articulo_menor::all();
        // return view('Laboratoristas.articulos_menores', array('articulos'=> $articulos_menores));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('articulos_menores.articulos-modal_menor');
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
        // print_r($_POST);
        //en la variable almacenamos los datos del modelo, QUE VAMOS A INSERTAR.
        $articuloMe = new articulo_menor;
        $articuloMe-> nombre= $request->input('nombre');
        $articuloMe-> descripcion_articulo= $request->input('descripcion');
        $articuloMe-> status='1';
        $articuloMe-> stock= $request->input('stock');
        $articuloMe-> clave_producto= $request->input('clave_producto');
        $articuloMe-> tipo='Articulo Menor';
        $articuloMe->save(); //Guardamos los datos
        

        return redirect()->route("Articulos_menores.index")->with('success','Agregado con exito'); //Redirigimos ala pagina index, Y catcheamos cualquier errot con with.

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
        $articulo = articulo_menor::find($id);
        return view('articulos_menores.art_menores_edit', compact('articulo')); //Regresamos la vista, y mandamos los datos para que la vista reciba los datos

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
        $articulo = articulo_menor::findOrFail($id);
        $articulo->nombre= $request->input('nombre');  //En el campo input , va literalmente lo que pusimos en el atributo name del input.
        $articulo->descripcion_articulo = $request->input('descripcion');
        $articulo->stock = $request->input('stock');
        $articulo->clave_producto = $request->input('clave_producto');
        $articulo->status = $request->input('status');
        

        $articulo->save();
        return redirect()->route("Articulos_menores.index")->with('success','Actualizado con exito'); //Redirigimos ala pagina index, Y catcheamos cualquier errot con with.
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
