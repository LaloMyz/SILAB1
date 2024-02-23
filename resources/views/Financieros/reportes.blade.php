@extends('adminlte::page')

@section('title', 'SILAB')

@section('content_header')

@section('content')
    <div class="container">
        <div class="filtros-estadistica">
            <div class="elementos-estadistica">
                <label class="form-label" for="fecha">Fecha Inicio</label>
                <input class="form-control" id="fecha" type="date">
            </div>
            <div class="elementos-estadistica">
                <label class="form-label" for="fecha">Fecha Final</label>
                <input class="form-control" id="fecha" type="date">
            </div>
            <div class="elementos-estadistica">
                <label class="form-label" for="carta">Carta</label>
                <select id="carta" class="form-control">
                    <option value="Todas" selected>Todas</option>
                    <option size="5px" class="form-select">Carta no adeudo (Regular)</option>
                    <option size="5px" class="form-select">Carta no adeudo (Egresados)</option>
                    <option size="5px" class="form-select">Carta no adeudo (Baja temporal)</option>
                    <option size="5px" class="form-select">Carta no adeudo (Baja definitiva)</option>
                </select>
            </div>
            <div class="elementos-estadistica">
                <label class="form-label" for="carrera">Carrera</label>
                <select id="carrera" class="form-control">
                    <option value="" selected>Todos</option>
                    <option>Ing. Informatica</option>
                    <option>Ing. Sistemas Automotrices</option>
                    <option>Ing. Gestion Empresarial</option>
                    <option>Ing. Sistemas Computacionales</option>
                    <option>Ing. Industrial</option>
                    <option>Ing. Electromecanica</option>
                    <option>Ing. Electronica</option>
                </select>
            </div>
            <div class="elementos-estadistica">
                <label class="form-label" for="semestre">Semestre</label>
                <select id="semestre" class="form-control">
                    <option value="" selected>Todos</option>
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
            <div class="elementos-estadistica">
                <label class="form-label" for="generar"></label>
                <button id="generar" class="form-control btn btn-accion1 btn-generar-stat">Generar</button>
            </div>
        </div>
        <div class="tabla-estadistica">

            <div class="container-tabla">
                <canvas id="estadisticasChart" width="600" height="250"></canvas>
            </div>
        </div>
            
    </div>

@stop
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">

@stop

@section('js')
    <script src="{{asset('js/app.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
    <script>
                //Funciones para graficas estadisticas
        var popCanvas = $("#estadisticasChart");
        var popCanvas = document.getElementById("estadisticasChart");
        var popCanvas = document.getElementById("estadisticasChart").getContext("2d");

        var barChart = new Chart(popCanvas, {
            type: 'bar',
            data: {
            labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',
       'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
            datasets: [{
                label: 'Population',
                data: [77,10,20,30,40,50,70,55,10,99,90,40], //La grafica se adapta ala data que entra
                backgroundColor: [
                'rgba(255, 99, 132, 0.6)',
                'rgba(54, 162, 235, 0.6)',
                'rgba(255, 206, 86, 0.6)',
                'rgba(75, 192, 192, 0.6)',
                'rgba(153, 102, 255, 0.6)',
                'rgba(255, 159, 64, 0.6)',
                'rgba(255, 99, 132, 0.6)',
                'rgba(54, 162, 235, 0.6)',
                'rgba(255, 206, 86, 0.6)',
                'rgba(75, 192, 192, 0.6)',
                'rgba(153, 102, 255, 0.6)'
                ]
            }]
            }
        });
    </script>

@stop
