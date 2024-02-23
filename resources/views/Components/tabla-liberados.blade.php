<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <table class="table table-striped">
        <thead>
            <tr>
                <th style="width: 10px">Id</th>
                <th>Nombre(s)</th>
                <th>Apellido(s)</th>
                <th>No. Control</th>
                <th>Semestre</th>
                <th>Carrera</th>
                <th>Fecha</th>
                <th>Progress</th>
                <th style="width: 40px">%</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1.</td>
                <td>Alan</td>
                <td>Cuevas Melendez</td>
                <td>192310781</td>
                <td>6</td>
                <td>Ing. Informatica</td>
                <td>22/04/2022</td>
                <td>
                    <div class="progress progress-xs">
                        <div class="progress-bar bg-success" style="width: 100%"></div>
                    </div>
                </td>
                <td><span class="badge bg-success">100%</span></td>
            </tr>
            <tr>
                <td>2.</td>
                <td>Sebastian</td>
                <td> Alcantar Rangel</td>
                <td>192310781</td>
                <td>6</td>
                <td>Ing. Informatica</td>
                <td>22/04/2022</td>
                <td>
                    <div class="progress progress-xs progress-striped active">
                        <div class="progress-bar bg-success" style="width: 100%"></div>
                    </div>
                </td>
                <td><span class="badge bg-success">100%</span></td>
            </tr>
        </tbody>
    </table>
</body>

</html>
