<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ayudaController extends Controller
{
    public function mostrarAyuda(){
        return view('Ayuda.ayuda');
    }
}
