@extends('adminlte::page')

@section('title', 'SILAB')

@section('content')
<div class="container titulo">
      <h5 class="titulo-head">Agregar laboratorio</h5>

<form>
  <div class="form-group">
    <label for="inputAddress">Nombre</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Nombre del laboratorio">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Encargado</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Ing. xxx">
  </div>
  <button type="submit" class="btn btn-primary">Añadir</button>
</form>

<div class="table">
<div class="navbar">
  <nav class="navbar navbar-light bg-light justify-content-between">
    <a class="navbar-brand" style="margin-right: 525px;">Lista de laboratorios</a>
    <form class="form-inline">
      <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
      <button class="btn btn-outline-primary  my-2 my-sm-0" type="submit">Buscar</button>
    </form>
  </nav>
</div>
    <table class="table table-striped table-bordered">
        <thead>
          <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Encargado</th>
            <th scope="col">    </th>

          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Laboratorio industrial</td>
            <td>Ing. xxx</td>
            <td><a class="fa fa-trash" aria-hidden="true" style="color: red; margin-right:25px;" ></a><a class="fa fa-cog" aria-hidden="true"></a></td>          </tr>
          <tr>

          <tr>
          <td>Laboratorio fisica</td>
            <td>Ing. xxx</td>
            <td><a class="fa fa-trash" aria-hidden="true" style="color: red; margin-right:25px;" ></a><a class="fa fa-cog" aria-hidden="true"></a></td>          </tr>
          <tr>
        </tbody>
      </table>
  </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
@stop

