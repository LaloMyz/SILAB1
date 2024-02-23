@extends('adminlte::page')

@section('title', 'SILAB')

@section('content_header')
@stop

@section('content')
    
<div class="container container-scroll">
    <div class="card card-tramite">
        <div class="card-header">
            <h3 class="card-title" style="color: blue; font-weight: bold;">TRAMITES TERMINADOS</h3>
        </div>

        <div class="card-body p-0">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th style="width: 10px">Id</th>
                        <th>Tramite</th>
                        <th>Fecha</th>
                        <th>Folio</th>
    
    
                        <th>Progreso</th>
                        <th style="width: 20px">Porcentaje</th>
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
                        
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
   

    </div>
    
</div>
@stop
@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
<link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
@stop
