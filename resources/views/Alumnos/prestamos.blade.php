@extends('adminlte::page')

@section('title', 'SILAB')

@section('content_header')
@stop

@section('content')

    {{-- @component('Components.barra-navegacion')    
    @endcomponent --}}

    {{-- MODALES PARA ACTIVAR SEGUN EL BOTON --}}

    {{-- @component('Components.nuevo-prestamo-individual')
    @endcomponent --}}
    {{-- @component('Components.nuevo-prestamo-grupal')
    @endcomponent --}}

    {{-- @component('Components.tabla-contenido')
   @endcomponent --}}
    <div class="modal fade" id="modal-filtro" data-backdrop="static" tabindex="-1" role="dialog"
        aria-labelledby="modal-filtro" aria-hidden="true">
        <div class="modal-dialog modal-center" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal-filtro">FILTRADO</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-filtro">
                        <div class="container-filtrado-1">
                            <div class="elemento-filtro">
                                <label class="form-label" for="fechaInicio">Fecha Inicio</label>
                                <input type="date" name="fechaInicio" id="fechaInicio">
                            </div>
                            <div class="elemento-filtro">
                                <label class="form-label" for="fechaFin">Fecha Fin</label>
                                <input type="date" name="fechaFin" id="fechaFin">
                            </div>
                        </div>
                    </div>
                    <div class="container-filtro">
                        <div class="container-filtrado-1">
                            <div class="elemento-filtro">
                                <label class="form-label" for="semestre">Semestre</label>
                                <select id="semestre" class="form-control">
                                    <option>No</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                    <option>13</option>
                                </select>
                            </div>
                            <div class="elemento-filtro">
                                <label class="form-label" for="carrera">Carrera</label>
                                <select id="carrera" class="form-control">
                                    <option>No</option>
                                    <option>Ing. Informatica</option>
                                    <option>Ing. Sistemas Automotrices</option>
                                    <option>Ing. Gestion Empresarial</option>
                                    <option>Ing. Sistemas Computacionales</option>
                                    <option>Ing. Industrial</option>
                                    <option>Ing. Electromecanica</option>
                                    <option>Ing. Electronica</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-accion2" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-accion1">Filtrar</button>
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
                                    <th class="" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                        aria-label="CSS grade: activate to sort column ascending" style="">Accion</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($prestamos as $prestamo)
                                    <tr class="odd" >
                                    <td class="dtr-control sorting_1" tabindex="0">#{{$prestamo->id}}</td>
                                        <td style="">{{$prestamo->name}}</td>
                                        <td style="">{{$prestamo->semestre}}</td>
                                        <td style="">{{$prestamo->carrera}}</td>
                                        <td style="">{{$prestamo->numero_control}}</td>
                                        <td>{{$prestamo->fecha}}</td>
                                        <td>{{$prestamo->status}}</td>
                                        <td class="btn-acciones">
                                            {{-- leemos el dato, si es diferente a uno que cambie el boton y cambie los datos ala BD --}}
                {{--                            
                                                <a href="{{route('Articulos_mayores.update',$articulo->id)}}" class="btn btn-succes btn-accion1">Habilitar</a>
                                            
                                           
                                                <a href="{{route('Articulos_mayores.update',$articulo->id)}}"class="btn btn-succes btn-accion2">Deshabilitar</a> --}}
                
                                                <a href="{{ route('ArticulosEnviados.show', $prestamo->id) }}"
                                                    class="btn btn-danger btn-accion1 " style="margin-bottom: 30px;">Articulos</a>
                                            <a href="{{ route('Prestamos.edit', $prestamo->id) }}"
                                                class="btn btn-danger btn-accion2 " style="margin-bottom: 30px;">Eliminar</a>
                                               
                                        </td>
                                    </tr>
                                @endforeach



                            </tbody>

                        </table>

                    </div>
                </div>
                {{-- <div class="row">
                    <div class="col-sm-12 col-md-5">
                        <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 10 of
                            57 entries</div>
                    </div>
                    <div class="col-sm-12 col-md-7">
                        <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                            <ul class="pagination">
                                <li class="paginate_button page-item previous disabled" id="example1_previous"><a href="#"
                                        aria-controls="example1" data-dt-idx="0" tabindex="0"
                                        class="page-link">Previous</a></li>
                                <li class="paginate_button page-item active"><a href="#" aria-controls="example1"
                                        data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="2"
                                        tabindex="0" class="page-link">2</a></li>
                                <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="3"
                                        tabindex="0" class="page-link">3</a></li>
                                <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="4"
                                        tabindex="0" class="page-link">4</a></li>
                                <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="5"
                                        tabindex="0" class="page-link">5</a></li>
                                <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="6"
                                        tabindex="0" class="page-link">6</a></li>
                                <li class="paginate_button page-item next" id="example1_next"><a href="#"
                                        aria-controls="example1" data-dt-idx="7" tabindex="0"
                                        class="page-link">Next</a></li>
                            </ul>
                        </div>
                    </div>
                </div> --}}
            </div>

        </div>

    </div>
@stop
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
@stop
