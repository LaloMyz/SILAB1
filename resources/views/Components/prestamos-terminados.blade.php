@extends('adminlte::page')

@section('title', 'SILAB')

@section('content_header')
@stop

@section('content')

    <div class="card card-tramite">
        <div class="card-header">
            <h3 class="card-title" style="color: blue; font-weight: bold;">PRESTAMOS TERMINADOS</h3>
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
                        <th scope="col">Fecha</th>
                        <th scope="col">Status</th>
                        <th scope="col">Laboratorio</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($prestamos as $prestamo)
                        <tr class="odd">
                            <td class="dtr-control sorting_1" tabindex="0">#{{ $prestamo->id }}</td>
                            <td style="">{{ $prestamo->name }}</td>
                            <td style="">{{ $prestamo->semestre }}</td>
                            <td style="">{{ $prestamo->carrera }}</td>
                            <td style="">{{ $prestamo->numero_control }}</td>
                            <td>{{ $prestamo->fecha }}</td>
                            <td>{{ $prestamo->status }}</td>
                            <td>{{ $prestamo->nombre_laboratorio }}</td>

                        </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-5">

            </div>
            <div class="col-sm-12 col-md-7">
                {{-- <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                    {!! $prestamos->links() !!}
                </div> --}}
                {!! $prestamos->links() !!}
            </div>
        </div>
    @stop
    @section('css')
        <link rel="stylesheet" href="/css/admin_custom.css">
        <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    @stop
