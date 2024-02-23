<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class GenerarLiberacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
          //
         //
         $tramites = DB::table('tramites')
         ->join('oficios','oficios.id', '=', 'tramites.id_oficio')
         ->join('alumnos','alumnos.id', '=', 'tramites.id_alumno')
         ->select('tramites.fecha','tramites.status','tramites.id_alumno','tramites.id_oficio','alumnos.numero_control','oficios.folio_oficio','alumnos.id_usuario','oficios.nombre')
         ->where([['tramites.id_oficio',$id] ])
         //->orderBy('tramites.id_oficio','DESC')
         //->paginate(7);
         ->get();
 
         $alumno= DB::table('users')
         ->select('users.name')
         ->where('users.id',$tramites[0]->id_usuario)
         ->get();
 
         $view = view('Laboratoristas.PDF_liberados', compact('tramites','alumno'));
         $pdf = App::make('dompdf.wrapper');
         $pdf->loadHTML($view);
         return $pdf->stream();
        //return $alumno;
         //return view('Laboratoristas.PDF_liberados', compact('tramites','alumno'));
 
         
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
