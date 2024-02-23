<?php

namespace App\Http\Controllers;

use App\prestamo_articulo_mayor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticulosEnviadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // //
        // session_start();
        // $variable_1= json_encode($_SESSION['variableje']);   //"[{"clave_producto":"12345"},{"clave_producto":"54321"}]"

        // //Esta forma es la que nos permite acceder ala clave '12345'
       

            
        // // return  dd($variable_2[0]->clave_producto );


        // return  dd($variable_2 );

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        // $array_articulos = $request->input('datos_articulos');
        return 'Hola bebe' + $_POST['datos'];
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
        $prestamo= DB::table('prestamo_articulo_mayors')
        ->join('articulo_mayor_laboratorios','articulo_mayor_laboratorios.id','=','prestamo_articulo_mayors.id_articulo_mayor')
        ->join('articulo_mayors','articulo_mayors.id','=','articulo_mayor_laboratorios.id')
        ->select('prestamo_articulo_mayors.id_articulo_mayor','prestamo_articulo_mayors.id_prestamo','articulo_mayors.nombre','articulo_mayors.descripcion_articulo','articulo_mayors.id')
        ->where('prestamo_articulo_mayors.id_prestamo',$id)
        ->get();

        $prestamo2= DB::table('prestamo_articulo_menors')
        ->join('articulo_menor_laboratorios','articulo_menor_laboratorios.id','=','prestamo_articulo_menors.id_articulo_menor')
        ->join('articulo_menors','articulo_menors.id','=','articulo_menor_laboratorios.id')
        ->select('prestamo_articulo_menors.id_articulo_menor','prestamo_articulo_menors.id_prestamo','articulo_menors.nombre','articulo_menors.descripcion_articulo','articulo_menors.id')
        ->where('prestamo_articulo_menors.id_prestamo',$id)
        ->get();

        return view('Components.marticulos',compact('prestamo','prestamo2'));
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
