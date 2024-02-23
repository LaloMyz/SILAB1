@extends('adminlte::page')

@section('title', 'SILAB')

@section('content_header')
    {{-- <h1>ALUMNOS LIBERADOS SECCION PARA MAESTROS</h1> --}}
@stop

@section('content')
    
<table class="table table-striped">
  <thead>
      <tr>
          <th style="width: 10px">Id</th>
          <th>Tramite</th>
          <th>Fecha</th>
          <th>Folio</th>


          <th>Progreso</th>
          <th style="width: 20px">Porcentaje</th>
          <th>Documento</th>
      </tr>
  </thead>
  <tbody>
      @foreach ($tramites as $tramite )
      <tr>
          <th scope="row">#{{$tramite->id_oficio}}</th>
          <td>{{$tramite->nombre}}</td>
          <td>{{$tramite->fecha}}</td>
          <td>{{$tramite->folio_oficio}}</td>
          <td>
              <div class="progress progress-xs">
                  <div class="progress-bar bg-success" style="width: 100%"></div>
              </div>
          </td>
          <td><span class="badge bg-success">100%</span></td>
          {{-- <td>{{$tramite->numero_control}}</td>
          <td>{{$tramite->nombre_laboratorio}}</td>
          <td>{{$tramite->status}}</td>
          <td>{{$tramite->fecha}}</td> --}}
          <td><a class="btn btn-danger btn-accion1 " style="margin-bottom: 30px;" href="{{ route('GenerarLiberacion.show', $tramite->id_oficio) }}">Descargar</a></td>
          
      </tr>
      @endforeach
  </tbody>
</table>
<div class="row">
  <div class="col-sm-12 col-md-5">

  </div>
  <div class="col-sm-12 col-md-7">
      <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
          {!! $tramites->links() !!}
      </div>
  </div>
</div>
@stop
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
@stop
