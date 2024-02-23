@extends('adminlte::page')

@section('title', 'SILAB')

@section('content_header')
    {{-- <h1>REGISTRO PRESTAMOS SECCION PARA MAESTROS</h1> --}}
@stop

@section('content')
    <div class="container-nav">
        <div class="">
            <form class="form-inline form-buscar" id="fomrulario_numero_control" method="POST"
                action="{{ route('Prestamos.index') }}">
                @csrf
                <div class="btn-grouper" style="display: none;">

                    <input class="form-controlq mr-sm-2" type="text" placeholder="Buscar registro" name="search_control2"
                        value="{{ $numeroControljeje }}" >

                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search"
                        viewBox="0 0 16 16">
                        <path
                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                    </svg>

                </div>
            </form>
        </div>
        <div class="btn-grouper1">
            <div class="dt-buttons btn-group   col-sm-6">

                {{-- <div class="btn-group">
                    <button type="button" class="btn btn-agregar" data-toggle="modal" data-target="#modal-filtro">
                        Filtros
                    </button>

                </div> --}}
                <div class="btn-group">
                    {{-- <button class="btn btn-agregar dropdown-toggle" type="button" id="dropdownMenuButton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Descargar
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" type="button" onclick="" data-toggle="" data-target="">Excel</a>
                        <a class="dropdown-item" type="button" href="{{ route('PDFdescargar') }}" data-toggle="" data-target="">PDF</a>
                        
                    </div> --}}
                    <a class="btn btn-agregar" type="button" href="{{ route('PDFdescargar') }}" data-toggle=""
                        data-target="">Descargar</a>
                </div>
                <div class="btn-group">
                    {{-- <button type="button" class="btn btn-recargar">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="25" height="25">
                            <path fill-rule="evenodd"
                                d="M8 2.5a5.487 5.487 0 00-4.131 1.869l1.204 1.204A.25.25 0 014.896 6H1.25A.25.25 0 011 5.75V2.104a.25.25 0 01.427-.177l1.38 1.38A7.001 7.001 0 0114.95 7.16a.75.75 0 11-1.49.178A5.501 5.501 0 008 2.5zM1.705 8.005a.75.75 0 01.834.656 5.501 5.501 0 009.592 2.97l-1.204-1.204a.25.25 0 01.177-.427h3.646a.25.25 0 01.25.25v3.646a.25.25 0 01-.427.177l-1.38-1.38A7.001 7.001 0 011.05 8.84a.75.75 0 01.656-.834z">
                            </path>
                        </svg>
                    </button> --}}
                    <a class="btn btn-recargar" type="button" onclick="recargarPagina();" data-toggle="" data-target=""><svg
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="25" height="25">
                            <path fill-rule="evenodd"
                                d="M8 2.5a5.487 5.487 0 00-4.131 1.869l1.204 1.204A.25.25 0 014.896 6H1.25A.25.25 0 011 5.75V2.104a.25.25 0 01.427-.177l1.38 1.38A7.001 7.001 0 0114.95 7.16a.75.75 0 11-1.49.178A5.501 5.501 0 008 2.5zM1.705 8.005a.75.75 0 01.834.656 5.501 5.501 0 009.592 2.97l-1.204-1.204a.25.25 0 01.177-.427h3.646a.25.25 0 01.25.25v3.646a.25.25 0 01-.427.177l-1.38-1.38A7.001 7.001 0 011.05 8.84a.75.75 0 01.656-.834z">
                            </path>
                        </svg></a>

                </div>

            </div>

        </div>



    </div>

    <div class="card">

        <div class="card-body">
            <div id="example1_wrapper" class="tabla-datos dataTables_wrapper dt-bootstrap4">
                <div class="row">
                    <div class="tabla-component col-lg-12">
                        <table id="example1" class="table table-hover table-striped dataTable dtr-inline"
                            aria-describedby="example1_info">
                            <thead>
                                <tr>
                                    <th class="" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                        aria-sort="ascending"
                                        aria-label="Rendering engine: activate to sort column descending">ID
                                    </th>
                                    <th class="" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                        aria-label="Browser: activate to sort column ascending" style="">Nombre</th>
                                    <th class="" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                        aria-label="Platform(s): activate to sort column ascending" style="">Semestre
                                    </th>
                                    <th class="" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                        aria-label="CSS grade: activate to sort column ascending" style="">Carrera</th>
                                    <th class="" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                        aria-label="Engine version: activate to sort column ascending" style="">No. Control
                                    </th>
                                    <th class="" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                        aria-label="CSS grade: activate to sort column ascending" style="">Fecha</th>
                                    <th class="" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                        aria-label="CSS grade: activate to sort column ascending" style="">Status</th>
                                    {{-- <th class="" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                        aria-label="CSS grade: activate to sort column ascending" style="">Accion</th> --}}

                                </tr>
                            </thead>
                            <tbody>
                                    {{-- @foreach ($prestamos_numeroControl as $prestamo)
                                            <tr class="odd">
                                                <td class="dtr-control sorting_1" tabindex="0">#{{ $prestamo->id }}</td>
                                                <td style="">{{ $prestamo->name }}</td>
                                                <td style="">{{ $prestamo->semestre }}</td>
                                                <td style="">{{ $prestamo->carrera }}</td>
                                                <td style="">{{ $prestamo->numero_control }}</td>
                                                <td>{{ $prestamo->fecha }}</td>
                                                <td>segundo if</td>
                                            </tr>
                                        @endforeach --}}
                               
                                    @foreach ($prestamos as $prestamo)
                                        <tr class="odd">
                                            <td class="dtr-control sorting_1" tabindex="0">#{{ $prestamo->id }}
                                            </td>
                                            <td style="">{{ $prestamo->name }}</td>
                                            <td style="">{{ $prestamo->semestre }}</td>
                                            <td style="">{{ $prestamo->carrera }}</td>
                                            <td style="">{{ $prestamo->numero_control }}</td>
                                            <td>{{ $prestamo->fecha }}</td>
                                            <td>{{ $prestamo->status }}</td>

                                        </tr>
                                    @endforeach
                                




                            </tbody>

                        </table>

                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-5">

                    </div>
                    <div class="col-sm-12 col-md-7">
                        <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                            {!! $prestamos->links() !!}
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
@stop
@section('js')
    <script>
        // function obtenerNumeroControl() {
        //     $.ajax({
        //         type: 'POST',
        //         url: '/numeroControlGet',
        //         data: $('#fomrulario_numero_control').serialize(), //obtener formulario
        //         success: function(res) {
        //             var arreglo = JSON.parse(res);
        //             // console.log(res);
        //             for (let x = 0; x < arreglo.length; x++) {


        //                 let template = `<tr>
    //                     <td>${arreglo[x].name}</td>
    //                     <td>${arreglo[x].numero_control}</td>
    //                     <td>${arreglo[x].carrera}</td>
    //                     <td class="">${arreglo[x].semestre}</td>



    //                     </tr>`;

        //                 // //$('tbody').append(todo)

        //                 $('#body_numero_control').append(template)
        //                 //[{"nombre":"jeje","descripcion_articulo":"jeje","clave_producto":"22313123"}]
        //                 $('#control-numero').hide(
        //                     'fast'); // Ocultamos el div despues de mostrar los datos en la tabla

        //                 $('#busqueda-articulos')
        //                     .focus(); //Apuntamos el puntero hacia la barra de busqueda de articulos.
        //             }
        //             arreglo = 0;
        //         },
        //         error: function(jqXHR, textStatus, errorThrown) {
        //             Swal.fire({
        //                 position: "top",
        //                 icon: "error",
        //                 title: "¡Prestamo activo!",
        //                 text: "No se permite mas prestamos.",
        //                 footer: '',
        //                 showConfirmButton: false,
        //                 timer: 2500,
        //                 showCloseButton: true,
        //             });
        //             location.reload(); //Recargamos pagina 
        //         }
        //     });
        // }

        function recargarPagina() {
            //location.reload()
            window.location.href = window.location.href;
        }
    </script>
@stop
