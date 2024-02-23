@extends('adminlte::page')

@section('title', 'SILAB')

<head>
    <link rel="stylesheet" href="css/tramites.css">
</head>
@section('content')
    <div class="container-nav">
        <div class="">
            {{-- <form class="form-inline form-buscar">
                <div class="btn-grouper">

                    <input class="form-controlq mr-sm-2" type="search" placeholder="Buscar registro" aria-label="Search">
                    <button class="btn-buscarBarra">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-search" viewBox="0 0 16 16">
                            <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                        </svg>
                    </button>
                </div>
            </form> --}}
        </div>
        <div class="btn-grouper1">
           
                <div class="btn-group ">
                    {{-- <button class="btn dropdown-toggle btn-agregar"  type="button" id="modal-articulo" class="dropdown-item" onclick="ventanaModalArticulos();" tabindex="0" aria-controls="example1"
                  data-toggle="modal" data-target="#modal-articulos"
                  type="button">
                    Agregar
                  </button> --}}
                    {{-- <a href="{{ route('Articulos_mayores.create') }}" class="btn btn-agregar">Agregar articulo</a> --}}
                </div>
                <div class="btn-group">
                    <button type="button" class="btn btn-recargar" onclick="recargar();">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="25" height="25">
                            <path fill-rule="evenodd"
                                d="M8 2.5a5.487 5.487 0 00-4.131 1.869l1.204 1.204A.25.25 0 014.896 6H1.25A.25.25 0 011 5.75V2.104a.25.25 0 01.427-.177l1.38 1.38A7.001 7.001 0 0114.95 7.16a.75.75 0 11-1.49.178A5.501 5.501 0 008 2.5zM1.705 8.005a.75.75 0 01.834.656 5.501 5.501 0 009.592 2.97l-1.204-1.204a.25.25 0 01.177-.427h3.646a.25.25 0 01.25.25v3.646a.25.25 0 01-.427.177l-1.38-1.38A7.001 7.001 0 011.05 8.84a.75.75 0 01.656-.834z">
                            </path>
                        </svg>
                    </button>

                </div>
                {{-- <div class="btn-group">
                    <button class="btn btn-eliminar" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <svg color="#ffffff" ; xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="25"
                            height="25">
                            <path fill-rule="evenodd"
                                d="M3.404 12.596a6.5 6.5 0 119.192-9.192 6.5 6.5 0 01-9.192 9.192zM2.344 2.343a8 8 0 1011.313 11.314A8 8 0 002.343 2.343zM6.03 4.97a.75.75 0 00-1.06 1.06L6.94 8 4.97 9.97a.75.75 0 101.06 1.06L8 9.06l1.97 1.97a.75.75 0 101.06-1.06L9.06 8l1.97-1.97a.75.75 0 10-1.06-1.06L8 6.94 6.03 4.97z">
                            </path>
                        </svg>
                    </button>
                </div> --}}


        </div>

    </div>
    <div class="col-sm-12">
        <table id="example1" class="table table-bordered table-striped dataTable dtr-inline"
            aria-describedby="example1_info">
            <thead>


                <tr>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                        aria-label="CSS grade: activate to sort column ascending" style="">Id</th>

                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                        aria-label="Browser: activate to sort column ascending" style="">Nombre</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                        aria-label="CSS grade: activate to sort column ascending" style="">Descripcion</th>

                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                        aria-label="Platform(s): activate to sort column ascending" style="">Status
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                        aria-label="Engine version: activate to sort column ascending" style="">No. Serie</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                        aria-label="Engine version: activate to sort column ascending" style="">Clave Articulo</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                        aria-label="Engine version: activate to sort column ascending" style="">Laboratorio</th>


                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                        aria-label="CSS grade: activate to sort column ascending" style="">Accion</th>
                </tr>

            </thead>
            <tbody>
                @foreach ($articulos_mayores as $articulo)
                    <tr class="odd">
                        <td class="dtr-control sorting_1" tabindex="0">{{ $articulo->id }}</td>
                        <td style="">{{ $articulo->nombre }}</td>
                        <td style="">{{ $articulo->descripcion_articulo }}</td>
                        <td style="">{{ $articulo->status }}</td>
                        <td style="">{{ $articulo->numero_serie }}</td>
                        <td>{{ $articulo->clave_producto }}</td>
                        <td>{{ $articulo->nombre_laboratorio }}</td>
                        
                        <td class="btn-acciones">
                            {{-- leemos el dato, si es diferente a uno que cambie el boton y cambie los datos ala BD --}}
{{--                            
                                <a href="{{route('Articulos_mayores.update',$articulo->id)}}" class="btn btn-succes btn-accion1">Habilitar</a>
                            
                           
                                <a href="{{route('Articulos_mayores.update',$articulo->id)}}"class="btn btn-succes btn-accion2">Deshabilitar</a> --}}

                         
                            <a href="{{ route('Articulos_mayores.edit', $articulo->id) }}"
                                class="btn btn-succes btn-accion1 ">Editar</a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
    <div>
        {{ $articulos_mayores->links() }}
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
@stop
@section('js')

    <script>
        function recargar(){
            location.reload()
        }
    </script>

@stop
