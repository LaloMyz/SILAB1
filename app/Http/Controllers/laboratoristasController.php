<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class laboratoristasController extends Controller
{
    public function show(){
        return view('Laboratoristas/inventario');
    }

    public function mostrarArticulos(){
       
    }
    public function mostrarArticulosMenores(){
        return view('Laboratoristas/articulos-menores');
    }
}