@extends('adminlte::page')

@section('title', 'SILAB')
@section('content_header')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@stop

@section('content')
    <table class="tablaAgregados table articulos-style">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Id</th>

                <th scope="col">Nombre</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Clave Prestamo</th>

            </tr>
        </thead>
        <tbody id="tbodys">
            @if (count($prestamo) >= 1)
                @foreach ($prestamo as $prestamos)
                    <tr>
                        <td>{{ $prestamos->id }}</td>
                        {{-- <td>{{$prestamos->id_articulo_mayor}}</td> --}}
                        <td>{{ $prestamos->nombre }}</td>
                        <td>{{ $prestamos->descripcion_articulo }}</td>

                        {{-- <td>{{$prestamos}</td> --}}

                        <td>{{ $prestamos->id_prestamo }}</td>
                    </tr>
                @endforeach
            @endif
            @if (count($prestamo2) >= 1)
            @foreach ($prestamo2 as $prestamos)
                <tr>
                    <td>{{ $prestamos->id }}</td>
                    {{-- <td>{{$prestamos->id_articulo_mayor}}</td> --}}
                    <td>{{ $prestamos->nombre }}</td>
                    <td>{{ $prestamos->descripcion_articulo }}</td>

                    {{-- <td>{{$prestamos}</td> --}}

                    <td>{{ $prestamos->id_prestamo }}</td>
                </tr>
            @endforeach
        @endif


        </tbody>
    </table>
@stop
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
@stop
