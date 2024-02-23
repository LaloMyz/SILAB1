<?php

namespace App\Http\Controllers;

use App\tramite;
use App\usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class LiberacionController extends Controller
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
        $tramites = DB::table('tramites')
        ->join('oficios','oficios.id', '=', 'tramites.id_oficio')
        ->join('alumnos','alumnos.id', '=', 'tramites.id_alumno')
        ->select('tramites.fecha','tramites.status','tramites.id_alumno','tramites.id_oficio','oficios.nombre','oficios.folio_oficio')
        // ->where([['tramites.status',1] ])
        ->orderBy('tramites.id_oficio','DESC')
        ->paginate(5);

       
        
        return view ('Liberacion/liberados',compact('tramites'));
       
    }
    public function imprimirLiberacion(){

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
       
         
         $tramite = DB::table('tramites')
         ->join('alumnos','alumnos.id', '=' , 'tramites.id_alumno')
         ->join('oficios','oficios.id', '=' , 'tramites.id_oficio')
         ->select('tramites.id','tramites.fecha','tramites.status','tramites.id_oficio','tramites.id_alumno','alumnos.numero_control','oficios.folio_oficio')
         ->where('tramites.status',1)
         ->orderBy('tramites.id','DESC')
         ->get();
         return view('liberacion.Comprobante', compact('tramite')); //Mandamos un array ala vista para capturar los datos y mostrarlos.
        

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
        $tramite = tramite::findOrFail($id); //Buscamos el id del prestamo que recibimos.
        $tramite->status = 3; //Cambiamos el status del prestamo (recordar que cambiando a status 0 es igual a eliminar. 3= anular)
        $tramite->save(); //Guardamos los cambios
        return  redirect('Liberacion/create'); //redirigimos ala pagina.
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $prestamo = tramite::findOrFail($id); //Buscamos el id del prestamo que recibimos.
        $prestamo->status = 0; //Cambiamos el status del prestamo (recordar que cambiando a status 0 es igual a eliminar.)
        $prestamo->save(); //Guardamos los cambios
        
        return  redirect('Liberacion/create'); //redirigimos ala pagina.
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id2
     * @return \Illuminate\Http\Response
     */
    public function anularTramite($id2){
        
        
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
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
    }
}
