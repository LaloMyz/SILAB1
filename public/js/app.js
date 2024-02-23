

function iniciarTramite() {
    //Documentacion https://sweetalert2.github.io/#usage
    Swal.fire({
        position: "top",
        icon: "success",
        title: "¡Tramite registrado con exito!",
        text: "Haz click sobre el siguiente boton para visualizar el estado de tu tramite.",
        footer: ' <a href="consultarAdeudo">Consulta(s).</a>',
        showConfirmButton: false,
        timer: 15000,
        showCloseButton: true,
    });
    //   Swal.fire({
    //     icon: 'error',
    //     title: 'Oops...',
    //     text: 'Something went wrong!',
    //     footer: '<a href="">Why do I have this issue?</a>'
    //   })
}

function pulsar(e) {
    if (e.keyCode === 13 && !e.shiftKey) {
        e.preventDefault();
        document.getElementById("busqueda-articulos").focus();
    }
}

function ocultarNumeroControl2() {
    document.getElementById("div_numeroControl").style.display = "none";
}

// Funciones ventana modal prestamos
function ventanaModal() {
    $("staticBackdrop").modal("show");
}
function ventanaModal2() {
    $(".bd-example-modal-xl").modal("show");
}

function ventanaModalArticulos() {
    $("modal-articulos").modal("show");
}

// FUNCIONES APARTADO PRESTAMOS

// FNCIONES SUB-APARTADO AGREGAR PRESTAMO
function mostrarTablas() {
    //Este eventlistener evita que se recargue la pagina
    document
        .getElementById("contenido-pagina-prestamo")
        .addEventListener("submit", (event) => {
            event.preventDefault(); //Eliminar los eventos por defecto.
        });
    var x = document.getElementById("tabla-articulos");
    if (x) {
        console.log("hola bebebebebe");
        x.style.display = "block";
    }
}

function cerrarTablas(boton) {
    //Este eventlistener evita que se recargue la pagina
    document
        .getElementById("contenido-pagina-prestamo")
        .addEventListener("submit", (event) => {
            event.preventDefault();
        });
    var x = document.getElementById("tabla-articulos");
    var y = boton;
    if (x) {
        if (y == "agregar") {
            Swal.fire({
                position: "top",
                icon: "success",
                title: "¡Listo!",
                text: "Prestamo agregado correctamente.",
                footer: ' <a href="consultarAdeudo">Consulta(s).</a>',
                showConfirmButton: false,
                timer: 2000,
                showCloseButton: true,
            });
            x.style.display = "none";
            setInterval("location.reload(true)", "2000");
            //location.reload(true);
        } else {
            x.style.display = "none";
        }

        //console.log('hola bebebebebe');
        //x.style.display='none';
    }
}

var articulos_agregados = document.querySelector("#articulos-agregados");
//  var _nom = 'Hola';
//  var _cat = "hola2";
//  var _precio = 'aasdasdads';
//  var _stock = 'serios oks';
function agregarArticulo() {
    var value = document.getElementById("busqueda-articulos").value;
    console.log("hola desde value");
    console.log(value);
    // switch (value){
    //    case '1003':
    //         var articulo = 'Cautin';
    //         var marca = 'Truper';
    //         var descripcion = 'Cautin punta cuadrada';
    //         var clave = '1003';
    //         var fila='<tr><td> ' +articulo+'</td><td>'+marca+'</td><td>'+descripcion+
    //         '</td><td>'+clave + '</td></tr>';
    //        var fila2 =document.getElementById('body-agregados');
    //        var btn = document.createElement("TR");
    //        btn.innerHTML=fila;
    //         document.getElementById("body-agregados").appendChild(btn);
    //        break;
    //     case '1004':
    //         var articulo = 'Arduino Uno R3';
    //         var marca = 'Arduino';
    //         var descripcion = 'Arduino color azul';
    //         var clave = '1004';
    //         var fila='<tr><td> ' +articulo+'</td><td>'+marca+'</td><td>'+descripcion+
    //         '</td><td>'+clave + '</td></tr>';
    //        var fila2 =document.getElementById('body-agregados');
    //        var btn = document.createElement("TR");
    //        btn.innerHTML=fila;
    //         document.getElementById("body-agregados").appendChild(btn);
    //        break;
    //     case '1001':
    //         var articulo = 'Resistencia';
    //         var marca = 'Global';
    //         var descripcion = 'Resistencia 20K';
    //         var clave = '1001';
    //         var fila='<tr><td> ' +articulo+'</td><td>'+marca+'</td><td>'+descripcion+
    //         '</td><td>'+clave + '</td></tr>';
    //          var fila2 =document.getElementById('body-agregados');
    //         var btn = document.createElement("TR");
    //         btn.innerHTML=fila;
    //         document.getElementById("body-agregados").appendChild(btn);
    //        break;
    //     case '1002':
    //         var articulo = 'Cables';
    //         var marca = 'Generico';
    //         var descripcion = 'Cables pinza caiman';
    //         var clave = '1002';
    //         var fila='<tr><td> ' +articulo+'</td><td>'+marca+'</td><td>'+descripcion+
    //         '</td><td>'+clave + '</td></tr>';
    //        var fila2 =document.getElementById('body-agregados');
    //        var btn = document.createElement("TR");
    //        btn.innerHTML=fila;
    //         document.getElementById("body-agregados").appendChild(btn);
    //        break;
    //     case '1005':
    //         var articulo = 'Lentes';
    //         var marca = 'Truper';
    //         var descripcion = 'Lentes proteccion transparentes';
    //         var clave = '1005';
    //         var fila='<tr><td> ' +articulo+'</td><td>'+marca+'</td><td>'+descripcion+
    //         '</td><td>'+clave + '</td></tr>';
    //        var fila2 =document.getElementById('body-agregados');
    //        var btn = document.createElement("TR");
    //        btn.innerHTML=fila;
    //         document.getElementById("body-agregados").appendChild(btn);
    //        break;
    //     default:
    //         //alert('adios');
    // }
}
