<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class alumnosController extends Controller
{
    public function show(){
        return view('Alumnos/tramite');
    }
    
    public function consultaAdeudo(){
        return view('Alumnos/adeudos-vista-alumnos');
    }
}
