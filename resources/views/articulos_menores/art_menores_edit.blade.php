@extends('adminlte::page')

@section('title', 'SILAB')

@section('content_header')

@stop

@section('content')
    <body>
        
            <div class="modal-dialog modal-center" role="document">
              <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal-articulos">Editar Articulo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form   action="{{ route('Articulos_menores.update',$articulo->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-row">

                            <div class="col">
                                <label for="inputAddress">Nombre</label>
                                <input type="text" class="form-control" name="nombre" value="{{$articulo->nombre}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Descripción</label>
                            <input type="text" class="form-control"  name="descripcion" value="{{$articulo->descripcion_articulo}}">
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Stock</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="" name="stock" value="{{$articulo->stock}}">
                        </div>
                        <div class="col">
                            <label for="inputAddress">Código articulo</label>
                            <input type="text" class="form-control" placeholder="Codigo " name="clave_producto" value="{{$articulo->clave_producto}}">
                        </div>
                        <div class="col">
                            <label for="inputAddress">Status</label>
                            <input type="number" class="form-control" placeholder="Codigo " name="status" min="0" max="1" value="{{$articulo->status}}">
                        </div>
                        <div class="modal-footer">
                            {{-- <button type="button"  class="btn btn-accion2" data-dismiss="modal">Cancelar</button> --}}
                            <button type="submit" role="submit" class="btn btn-accion1">Listo</button>
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