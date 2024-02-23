@extends('adminlte::page')

@section('title', 'SILAB')

@section('content_header')
@stop

@section('content')
  <img src="{{asset('img/Bienvenida-silab.jpg')}}" class="imagen-bienvenida-silab">
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <link href="toastr.css" rel="stylesheet"/>
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script src="{{asset('sweetalert2.all.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/app.js')}}"></script>

@stop