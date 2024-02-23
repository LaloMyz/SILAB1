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
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>

<body>
    <div class="contendedor1">
        <div class="container container2">

            <div class="containerh2" style=" justify-content:center; aling-items:center;">
                <h2>Tabla Prestamos</h2>
            </div>
        </div>
        <div class="tabla-component col-lg-12">
            <table id="example1" class="table table-hover table-striped dataTable dtr-inline"
                aria-describedby="example1_info">
                <thead>
                    <tr>
                        <th class="" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                            aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">ID
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

                        </tr>
                    @endforeach



                </tbody>

            </table>

        </div>
    </div>

</body>

</html>
