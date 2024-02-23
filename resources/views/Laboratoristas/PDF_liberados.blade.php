<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/estilos.css') }}"> --}}
    <style type="text/css">
        .contendedor1 {
            width: 100%;
            display: :flex;
            text
            justify-content: center;
            align-items: center;
        }
        h2{
            text-align: center;

        }

        .container2 {
            width: 100%;
            justify-content: center;
            align-items: center;
            border: 1px solid black;
            border-radius: 30%;
        }

        .containerh2 {
            justify-content: center;
            align-items: center;
            align-content: center;
        }
        .logo-tec-pdf{
            width: 400px;
            height: 400px;
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>

<body>
    <div class="contendedor1">
        <div class="container container2">

            <div class="container containerh2" style=" display:flex; justify-content:center; aling-items:center;">
                <h1>Carta Liberacion</h2>
            </div>
            <div class="container">
                {{-- <img class="logo-tec-pdf" src="{{asset('img/logo-tec-hd.png')}}" alt=""> --}}
            </div>
        </div>
        <br>
        <div class="tabla-component col-lg-12">
            
             
                   <h5>Alumno: <b>{{$alumno[0]->name}}</b>  </h5>
                   <h5>Numero de control: <b>{{$tramites[0]->numero_control}}</b></h5> 
                   <h5>Tipo de carta: <b>{{$tramites[0]->nombre}}</b></h5> 
                   <h5>Folio de carta: <b>{{$tramites[0]->folio_oficio}}</b></h5> 
                   <br>
                   <br>
                   <br>
                   
                   <h5>Se hace constar que la presente carta fue entregada por el departamento de financieros unica y exclusivamente para uso dentro de los diferentes tramites dentro del Tecnologico</h5>
                   <br>
                   <br>

                   <h5>Atentamente Dpto. Financieros</h5>


        
                   



               


        </div>
    </div>

</body>

</html>
