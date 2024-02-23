@extends('adminlte::page')
@section('title', 'SILAB')

@section('content')
    <div class="container container-scroll">
        <div class="card card-tramite">
            <div class="card-header">
                <h3 class="card-title" style="color: blue; font-weight: bold;">TRAMITES</h3>
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
                                    <div class="progress-bar bg-danger" style="width: 50%"></div>
                                </div>
                            </td>
                            <td><span class="badge bg-danger">50%</span></td>
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
        <div class="card card-tramite">
            <div class="card-header">
                <h3 class="card-title" style="color: blue; font-weight: bold;">PRESTAMOS</h3>
            </div>

            <div class="card-body p-0">
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Semestre</th>
                        <th scope="col">Carrera</th>
                        <th scope="col">No. Control</th>
                        <th scope="col">Laboratorio</th>
                        <th scope="col">Status</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Articulos</th>

                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($prestamos as $prestamo )
                        <tr>
                            <th scope="row">#{{$prestamo->id}}</th>
                            <td>{{$prestamo->name}}</td>
                            <td>{{$prestamo->semestre}}</td>
                            <td>{{$prestamo->carrera}}</td>
                            <td>{{$prestamo->numero_control}}</td>
                            <td>{{$prestamo->nombre_laboratorio}}</td>
                            <td>{{$prestamo->status}}</td>
                            <td>{{$prestamo->fecha}}</td>
                            
                            <td>
                                <a href="{{ route('ArticulosEnviados.show', $prestamo->id) }}"
                                    class="btn btn-danger btn-accion1 " style="margin-bottom: 30px;">Mostrar</a>
                            </td>
                            
                        </tr>
                        @endforeach
                       
                        
                        
                    </tbody>
                </table>
            </div>

        </div>
        
    </div>
   
@stop
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
@stop
