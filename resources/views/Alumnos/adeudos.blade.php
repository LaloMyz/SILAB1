@extends('adminlte::page')
@section('title', 'SILAB')

@section('content')

@include('Components.barraBusqueda')
  <div class="table">
      <table class="table table-striped table-bordered">
          <thead>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Nombre</th>
              <th scope="col">Apellido</th>
              <th scope="col">No. Control</th>
              <th scope="col">Laboratorio</th>
              <th scope="col">Articulos</th>
              <th scope="col">Descripcion</th>
              <th scope="col">Fecha</th>
              <th scope="col">Accion</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Alan</td>
              <td>Cuevas</td>
              <td>192xxxx</td>
              <td>Computo</td>
              <td>5</td>
              <td>
                <select class="form-control">
                  <option>Cautin</option>
                  <option>Multimetro</option>
                  <option>Pinzas</option>
                  <option>Cables caiman</option>
                  <option>Resistencias</option>
                </select>
              </td>
              <td>25/04/2022</td>
              <td><a class="fa fa-trash" aria-hidden="true" style="color: red; margin-right:25px;" ></a><a class="fa fa-cog" aria-hidden="true"></a></td>          </tr>
            
          </tbody>
        </table>
    </div>
@stop
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
@stop

