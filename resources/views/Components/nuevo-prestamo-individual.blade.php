@extends('adminlte::page')

@section('title', 'SILAB')
@section('content_header')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@stop

@section('content')
    <div class="container container-prestamo" id="contenido-pagina-prestamo">
        <div class="control-numero">


            <div class="input-control" id="control-numero">
                <div class="label-control">
                    <h4> <b>Numero Control</b> </h4>
                </div>
                <form class="form-inline form-buscar form-buscar-prestamo" action="numeroControlGet" method="POST"
                    id="numero_control_form" name="form_numero_control">
                    @csrf
                    <div class="btn-grouper">
                        {{-- Input para mandar token , no basta con csrf de arriba xd --}}
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input class="form-controlq mr-sm-2" type="number" pattern="[0-9]" name="search_control"
                            placeholder="" id="input-numero-control" value="{{ $numeroControl }}">



                        {{-- <button class="btn-buscarBarra" type="submit" onclick="enter()">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-search" viewBox="0 0 16 16">
                                <path
                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                            </svg>
                        </button> --}}
                    </div>


                </form>

            </div>
        </div>

        <div id="tabla-articulos" class="tabla-articulos">
            <div class="nombre_alumno">
                <table class="table table-bordered">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Numero Control</th>
                            <th scope="col">Carrera</th>
                            <th scope="col">Semestre</th>
                        </tr>
                    </thead>
                    <tbody id="body_numero_control">



                    </tbody>
                </table>
            </div>

            <div class="tabla-articulos-agregados tabla-articulos-style-2">
                <div class="container header-div">

                    <div class="form-articulos-prestamo" style="margin-bottom: 10px;">
                        <form class="form-inline form-buscar form-buscar-prestamo" id="buscar_articulos"
                            action="/articulosMAME" method="post">
                            @csrf
                            <div class="btn-grouper">
                                {{-- Input para mandar token , no basta con csrf de arriba xd --}}
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                <input type="text" class="form-controlq mr-sm-2" id="busqueda-articulos"
                                    placeholder="Buscar articulo" name="search_articles">
                                {{-- <button class="btn-buscarBarra" type="submit">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-search" viewBox="0 0 16 16">
                                        <path
                                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                    </svg>
                                </button> --}}
                            </div>
                        </form>

                    </div>

                </div>

                <table class="tablaAgregados table articulos-style">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Id</th>

                            <th scope="col">Nombre</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">Clave Producto</th>
                            <th scope="col">Tipo</th>
                           

                        </tr>
                    </thead>
                    <tbody id="tbodys">
                        

                    </tbody>
                </table>


            </div>
            <div class="input-agregar-cancelar">
                <form action="" method="POST" id="articulos-formulario">
                    @csrf
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <input type="hidden" name="datos_articulos" id="datos_articulos" value="">

                    <input type="button" class="btn btn-accion1" value="Agregar" onclick="mandarPhp();">
                </form>
                <input type="button" class="btn btn-accion2" value="Cancelar" onclick="recargarPagina();">


            </div>
        </div>
    </div>
@stop
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
@stop
@section('js')
    <script src="jquery-1.3.2.min.js" type="text/javascript"></script>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(function() {
            $('#input-numero-control').focus(); //Siempre que se recargue apuntar al input.

            $("#busqueda-articulos").keypress(function(e) {
                //no recuerdo la fuente pero lo recomiendan para
                //mayor compatibilidad entre navegadores.
                var code = (e.keyCode ? e.keyCode : e.which);
                if (code == 13) {
                    e.preventDefault();
                    //console.log('prevent default');
                    obtenerDatos();
                }
            });
            $("#input-numero-control").keypress(function(e) {
                //no recuerdo la fuente pero lo recomiendan para
                //mayor compatibilidad entre navegadores.
                var code = (e.keyCode ? e.keyCode : e.which);
                if (code == 13) {
                    e.preventDefault();
                    // console.log('prevent default numero control');
                    obtenerNumeroControl();
                }
            });


        });
        // var ac = "";
        // var ac = [];
        function recargarPagina(){
            location.reload();
        }
        function obtenerDatos() {
            // var valor = $("#dato").val();
            $.ajax({
                type: 'POST',
                url: '/articulosMAME',
                data: $('#buscar_articulos').serialize(),
                success: function(res) {
                    console.log(res);
                   
                    var arreglo = JSON.parse(res);
                    // ac += arreglo; 
                    // ac.push(arreglo);
                    
                    // console.log($('#datos_articulos').val(ac));
                    // console.log(ac);

                    for (let x = 0; x < arreglo.length; x++) {


                        let template = `<tr>
                            <td class="clave_producto_td">${arreglo[x].id}</td>
                            <td>${arreglo[x].nombre}</td>
                            <td>${arreglo[x].descripcion_articulo}</td>
                            
                            <td >${arreglo[x].clave_producto}</td>
                            <td class="tipo_articulo">${arreglo[x].tipo}</td>
                            
                            
                            </tr>`;

                        // //$('tbody').append(todo)
                        //console.log(template);
                        $('#tbodys').append(template)
                        //[{"nombre":"jeje","descripcion_articulo":"jeje","clave_producto":"22313123"}]
                    }
                }
            });
            $('#busqueda-articulos').val(
                ''); //Despues de llenar un dato, vaciamos el input para que el leector de barras leea uno nuevo.
        }
        function mandarArticulos(){
            $.ajax({
                type: 'POST',
                url: '/EnviadosPost',
                data: {
                    
                    "_token": $("meta[name='csrf-token']").attr("content"),
                    // "datos": $('#articulos-formulario').serialize(),
                    "datos": JSON.stringify(ac),

                },
                // data: $('#articulos-formulario').serialize(), //obtener formulario
                success: function(res) {
                    console.log(JSON.stringify(res));
                },
                error: function(res) {
                    console.log('error jajaja');
                }
            });

        }

        function obtenerNumeroControl() {
            $.ajax({
                type: 'POST',
                url: '/numeroControlGet',
                data: $('#numero_control_form').serialize(), //obtener formulario
                success: function(res) {
                    if(res==500){
                        Swal.fire({
                        position: "top",
                        icon: "error",
                        title: "¡Alumno con prestamo activo!",
                        text: "El alumno necesita liberar sus prestamos activos",
                        footer: '',
                        showConfirmButton: false,
                        timer: 2500,
                        showCloseButton: true,
                    });
                    location.reload(); //Recargamos pagina 
                    }
                    var arreglo = JSON.parse(res);
                    // console.log(res);
                    for (let x = 0; x < arreglo.length; x++) {


                        let template = `<tr>
                            <td>${arreglo[x].name}</td>
                            <td>${arreglo[x].numero_control}</td>
                            <td>${arreglo[x].carrera}</td>
                            <td class="">${arreglo[x].semestre}</td>
                            
                            
                            
                            </tr>`;

                        // //$('tbody').append(todo)

                        $('#body_numero_control').append(template)
                        //[{"nombre":"jeje","descripcion_articulo":"jeje","clave_producto":"22313123"}]
                        $('#control-numero').hide(
                            'fast'); // Ocultamos el div despues de mostrar los datos en la tabla

                        $('#busqueda-articulos')
                            .focus(); //Apuntamos el puntero hacia la barra de busqueda de articulos.
                    }
                    arreglo = 0;
                },
                error: function(jqXHR, textStatus, errorThrown){
                    Swal.fire({
                        position: "top",
                        icon: "error",
                        title: "¡No se encontraron registros!",
                        text: "Verifica que el numero de control este correcto.",
                        footer: '',
                        showConfirmButton: false,
                        timer: 2500,
                        showCloseButton: true,
                    });
                    location.reload(); //Recargamos pagina 
                }
            });
        }

        var numeros = [];

        function obtenerDatosTabla() {

            console.log('hola xddcd desde tablas');
            document.querySelectorAll('.tablaAgregados tbody tr').forEach(function(e) {
                let fila = {
                    clave_producto: e.querySelector('.clave_producto_td').innerText,
                    tipo: e.querySelector('.tipo_articulo').innerText
                };

                numeros.push(fila);
            });
            console.log(numeros)

        }

        function mandarPhp() {

            // $.post('/Prestamos/store',{alumno:datosTabla}, function(data){
            //     if (data!=null) {
            //         alert('Datos enviados correctamente.');
            //     }else{
            //         alert('No se enviaron datos.');
            //     }
            // })
            obtenerDatosTabla();
            $.ajax({
                type: 'POST',
                url: "/crearprestamo",
                data: {
                    'datos': JSON.stringify(numeros),
                    

                    "_token": $("meta[name='csrf-token']").attr("content"),
                    // "datos": ac,

                }
            }).done(
                function(data) {
                    console.log('mande los articulos desde mandarphp() ')
                    console.log(data)
                   
                    Swal.fire({
                        position: "top",
                        icon: "success",
                        title: "¡Prestamo creado con exito!",
                        text: "Haz click sobre el siguiente boton para visualizar el estado de tu tramite.",
                        footer: ' <a href="consultarAdeudo">Consulta(s).</a>',
                        showConfirmButton: false,
                        timer: 115000,
                        showCloseButton: true,
                    });
                   

                    location.reload(); //Recargamos pagina al realizar prestamo.
                }
                ).fail(function(){
                    Swal.fire({
                        position: "top",
                        icon: "error",
                        title: "¡Prestamo activo!",
                        text: "No se permite mas prestamos.",
                        footer: '',
                        showConfirmButton: false,
                        timer: 2500,
                        showCloseButton: true,
                    });
                });

                // fetch('Prestamos.store'),{
                //     method: 'POST',
                //     body: datosTabla
                // })
                //     .then(res=> res.json())
                //     .then(data=>{console.log('no se envio nada we')})
            }
    </script>

@stop
