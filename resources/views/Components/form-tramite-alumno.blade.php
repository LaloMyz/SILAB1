<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <title>Document</title>
</head>

<body>
    <div class="titulo-container container-tramite">
        <h2 class="titulo-head">INICIAR TRAMITE</h2>
    </div>
    <div class="container ">
        <form class="form-tramite">
            {{-- Si existe registro que muestre los datos del alumno --}}
            @if ($bandera >= 1)
                <form action="{{route('Tramite.create')}}" method="POST">
                    @csrf
                    @method('POST')
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="flex-item">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" value="{{ $prestamos[0]->name }}"
                            readonly>
                    </div>
                    <div class="flex-item">
                        <label for="ncontrol" class="form-label">No. Control</label>
                        <input type="number" class="form-control" id="ncontrol"
                            value="{{ $prestamos[0]->numero_control }}" readonly>
                    </div>
                    <div class="flex-item">
                        <label for="carrera" class="form-label">Carrera</label>
                        <input type="text" class="form-control" id="carrera" value="{{ $prestamos[0]->carrera }}"
                            readonly>
                    </div>
                    <div class="flex-item">
                        <label for="semestre" class="form-label">Semestre</label>
                        <input type="text" class="form-control" id="semestre" value="{{ $prestamos[0]->semestre }}"
                            readonly>
                    </div>


                    <div class="flex-item" role="group">
                        <div class="container-select">
                            <label for="tramite" class="form-label">Tipo de tramite</label>
                            <select id="seleccion_cartas" name="seleccion_cartas" class="form-select form-select-sm select-cartas">
                                <option size="5px" value="Regular" class="form-select" selected>Carta no adeudo
                                    (Regular)</option>
                                <option size="5px" value="Egresados" class="form-select">Carta no adeudo (Egresados)
                                </option>
                                <option size="5px" value="Temporal" class="form-select">Carta no adeudo (Baja
                                    temporal)</option>
                                <option size="5px" value="Definitiva" class="form-select">Carta no adeudo (Baja
                                    definitiva)</option>
                            </select>
                            
                        </div>
                    </div>
                    <div class="flex-item">
                        {{-- <button type="submit" class="btn btn-primary btn-tramite toastrDefaultSuccess">Iniciar</button> --}}
                        {{-- <input type="submit" value="Iniciar tramite"> --}}
                       

                    </div>
                </form>
            @else
                <script>
                    Swal.fire({
                        position: "top",
                        icon: "error",
                        title: "¡No es posible iniciar un tramite!",
                        text: "Resuelve tus prestamos pendientes, Haz click en el siguiente boton.",
                        footer: '<a href="{{ url('Tramite') }}">Consulta(s)</a>',
                        showConfirmButton: false,
                        timer: 100000,
                        showCloseButton: true,
                    });
                </script>
            @endif

        </form>
    </div>
</body>

</html>
