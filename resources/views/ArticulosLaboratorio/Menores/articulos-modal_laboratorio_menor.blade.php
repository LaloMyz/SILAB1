@extends('adminlte::page')

@section('title', 'SILAB')

@section('content_header')

@stop

@section('content')
    <body>
        
            <div class="modal-dialog modal-center" role="document">
              <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal-articulos">Agregar Articulo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form  method="POST" action="{{ route('ArticulosMenoresLab.store') }}">
                        @csrf
                        
                        <div class="form-row">

                            <div class="col">
                                <label for="inputAddress">Nombre</label>
                                <input type="text" class="form-control" placeholder="" name="nombre">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Descripción</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="" name="descripcion">
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Stock</label>
                            <input type="number" min="0" max="10000" class="form-control" id="inputAddress" placeholder="" name="stock">
                        </div>
                        <div class="col">
                            <label for="inputAddress">Código articulo</label>
                            <input type="text" class="form-control" placeholder="Codigo " name="codigo_articulo">
                        </div>
                        {{-- <div class="col">
                            <label for="select-laboratorio">Laboratorio</label>
                            <select id="select-laboratorio" name="select-laboratorio" class="form-control" aria-label="Default select example">
                                <option selected>Elige una opcion</option>
                                <option value="Computo">Computo</option>
                                <option value="Industrial">Industrial</option>
                                <option value="Quimica">Quimica</option>
                                <option value="Electro Mecanica">Electro Mecanica</option>
                              </select>
                        </div> --}}


                        {{-- <form class="form-inline">
                      <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Laboratorio</label>
                      <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                          <option selected>Laboratorio </option>
                          <option value="1">Industrial</option>
                          <option value="2">Química</option>
                          <option value="3">Electromecánica</option>
                          <option value="3">Física</option>
                      </select>
                  </form> --}}
                        <div class="modal-footer">
                            {{-- <button type="button"  class="btn btn-accion2" data-dismiss="modal">Cancelar</button> --}}
                            <button type="submit" role="submit" class="btn btn-accion1">Agregar</button>
                        </div>
                    </form>
                </div>

            </div>
            </div>
        
    </body>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <link href="toastr.css" rel="stylesheet" />
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
    <script src="{{ asset('sweetalert2.all.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>

@stop


{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <title>Document</title>
</head>



</html> --}}
