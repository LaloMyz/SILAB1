@extends('adminlte::page')


@section('title', 'SILAB')

@section('content_header')
    <meta name="csrf-token" content="{{ csrf_token() }}">

@stop

@section('content')

    {{-- @extends('adminlte::page')
@section('title', 'SILAB')

@section('content') --}}

    <body>
        @if ($bandera >= 1)
            <div class="titulo-container container-tramite">
                <h2 class="titulo-head">INICIAR TRAMITE</h2>
            </div>
            <div class="container ">
                <form class="form-tramite">
                    {{-- Si existe registro que muestre los datos del alumno --}}

                    <form action="{{ route('Tramite.store') }}" method="POST" id="formulario_inciar_tramite">


                        @csrf


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
                            <input type="text" class="form-control" id="semestre" name="ejemplolol"
                                value="{{ $prestamos[0]->semestre }}" readonly>
                        </div>


                        <div class="flex-item" role="group">
                            <div class="container-select">
                                <label for="seleccion_cartas" class="form-label">Tipo de tramite</label>
                                <select id="seleccion_cartas" name="seleccion_cartass"
                                    class="form-select form-select-sm select-cartas">
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
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input class="btn btn-primary btn-tramite toastrDefaultSuccess" type="submit"
                                value="Iniciar tramite" id="iniciar_tramite2" name="iniciar_tramite2">
                            {{-- <a class="btn btn-primary btn-tramite toastrDefaultSuccess" href="{{url('crearTramite')}}">Iniciar tramite</a> --}}
                        </div>
                    </form>
                @else
                <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
@stop

@section('js')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
    <script>
        $(document).ready(function() {

            // $("#iniciar_tramite").click(function(e) {
            //     //no recuerdo la fuente pero lo recomiendan para
            //     //mayor compatibilidad entre navegadores.
            //     var code = (e.keyCode ? e.keyCode : e.which);
            //     if (code == 13) {
            //         e.preventDefault();
            //         console.log('prevent default');
            //     }
            // });
            $("#iniciar_tramite2").on("click", function(event) {
                event.preventDefault();
                console.log('hola desde event')
                iniciarTramite();
                // resto de tu codigo
            });

            console.log('hola desde javascript');

        });
        // $("select[name='d']").on("change", () => {
        //     iniciarTramite();
        // });

        function iniciarTramite() {

            $.ajax({
                type: 'POST',
                url: '/storeprueba2',
                data: {
                    "_token": $("meta[name='csrf-token']").attr("content"),
                    'data': $('#formulario_inciar_tramite').serialize(),
                    select: $('#seleccion_cartas').val(),

                },
                success: function(res) {
                    // console.log(res)
                    //   alert('enviado bro');
                    Swal.fire({
                        position: "top",
                        icon: "success",
                        title: "¡Tramite creado con exito!",
                        text: "Verifica la consulta de tu tramite en el siguiente boton.",
                        footer: '<a href="{{ url('Tramite') }}">Consulta(s)</a>',
                        showConfirmButton: false,
                        timer: 100000,
                        showCloseButton: true,
                    });
                },
                error: function(jqXHR, textStatus, errorThrown) {

                    alert('No se envio bro');
                }

            });
        }
    </script>
@stop


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <link href="{{ asset('css/tramite-layout.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500&family=Roboto:ital,wght@1,500&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   
@stop
