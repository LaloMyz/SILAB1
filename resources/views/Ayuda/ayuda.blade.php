@extends('adminlte::page')
@section('title', 'SILAB')


@section('content_header')
   
@stop
@section('content')
    <div class="container header-ayuda">
        <div class="logo-header">
            <img class="logo-ayuda" src="/img/logo-ayuda.png" alt="logo-ayuda">
        </div>
        <div class="container-titulo-header">
            <h2 class="titulo-header">¿Como podemos ayudarte?</h2>
        </div>
        <div class="barra-ayuda">
            <form action="" class="barra-ayuda-header">
                <button class="btn-buscarBarra">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                      </svg>
                </button>
                <input class="input-barrabuscar" type="search" placeholder="Busca aqui mas soluciones de ayuda" aria-label="Search">
            </form>
        </div>
       
    </div>
    <div class="container">
        <div class="row">
            <div class="preguntasfrecuentes col-12">
                <div class="parrafoColapso col-12">
                    <p>
                    
                        <button class="btn btn-primary col-12" type="button" data-toggle="collapse" data-target="#collapsePreguntas0" aria-expanded="false" aria-controls="collapsePreguntas">
                            Preguntas frecuentes
                        </button>
                    </p>
                    <div class="collapse" id="collapsePreguntas0">
                        <div class="card card-body">
                            <div class="container-faq col-12 ">
                                <div class="title-faq col-12">
                                    
                                    <div class="parrafoColapso col-12">
                                        <p>
                                        
                                            <button class="btn btn-info  col-12" type="button" data-toggle="collapse" data-target="#collapsePreguntas1" aria-expanded="false" aria-controls="collapsePreguntas">
                                                ¿Como funciona la pagina?
                                            </button>
                                        </p>
                                        <div class="collapse" id="collapsePreguntas1">
                                            <div class="card card-body">
                                                <p>Esta pagina fue creada principalmente para ahorrar tiempos ala hora solicitar tu carta de no adeudo.</p>
                                                <p>Dentro de la pagina podras:</p>
                                                <ul>
                                                        <li class="lista-adeudos">Iniciar un tramite de carta de no adeudo</li>
                                                        <li class="lista-adeudos">Verificar el estatus de tu tramite</li>
                                                        <li class="lista-adeudos">Visualizar adeudos activos.</li>
                                                        <li class="lista-adeudos">Visualizar registros de todos tus adeudos.</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="parrafoColapso col-12">
                                        <p>
                                        
                                            <button class="btn btn-info col-12" type="button" data-toggle="collapse" data-target="#collapsePreguntas2" aria-expanded="false" aria-controls="collapsePreguntas">
                                                ¿Que hacer en caso de tener algun adeudo?
                                            </button>
                                        </p>
                                        <div class="collapse" id="collapsePreguntas2">
                                            <div class="card card-body">
                                                <p>Si se cuenta con algún adeudo deberas seguir cada uno de los pasos mostrados a continuacion: </p>
                                                <ul>
                                                    <li>El primer paso es dirigirte al apartado <a href="" style="color: blue;">Tramite > Consultar Adeudo</a> y verificar que no cuentes con ningun adeudo. </li>
                                                    <li>Si se cuenta con algun adeudo, Tendras que hacer entrega del material adeudado en el laboratorio correspondiente.</li>
                                                    <li>Deberas solicitar al laboratorio que se elimine tu adeudo al entregar el material.</li>
                                                    <li><b style="color: red;">RECUERDA</b> que si cuentas adeudo en algun laboratorio, no podras solicitar mas material y de la misma forma no podras iniciar tramite de no adeudo.</li>
                                                    
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="parrafoColapso col-12">
                                        <p>
                                        
                                            <button class="btn btn-info col-12" type="button" data-toggle="collapse" data-target="#collapsePreguntas3" aria-expanded="false" aria-controls="collapsePreguntas">
                                                ¿Es necesario no tener adeudos para poderme inscribir al siguente
                                            semestre?
                                            </button>
                                        </p>
                                        <div class="collapse" id="collapsePreguntas3">
                                            <div class="card card-body">
                                                <p>Es OBLIGATORIO no tener algún adeudo  ya que al tenerlo no podrás continuar con tu inscripción semestral el sistema los bloqueará  automáticamente por adeudo</p>
                                                <ul>
                                                    <li>Es importante a hacer entrega del material prestado para no tener dificultades al querer realizar tu inscripción </li>
                                                    <li>Verificar tu status antes de realizar tu inscripción</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="parrafoColapso col-12">
                                        <p>
                                        
                                            <button class="btn btn-info col-12" type="button" data-toggle="collapse" data-target="#collapsePreguntas4" aria-expanded="false" aria-controls="collapsePreguntas">
                                                ¿Qué debo hacer si deseo iniciar un tramite?
                                            </button>
                                        </p>
                                        <div class="collapse" id="collapsePreguntas4">
                                            <div class="card card-body">
                                                <p>Si se desea iniciar un  trámite es obligatorio no tener ningún tipo de adeudo en dado caso  si tienes algún  adeudo  no podrás realizar el trámite </p>
                                                <ul>
                                                    <li>Podrás visitar el apartado PRESTAMOS en la vista Adeudos para verificar en que laboratorio tienes tu adeudo </li>
                                                    <li>Es necesario liquidar tu adeudo.</li>
                                                    <li>Luego de verificar que no tienes adeudo, Podras dirigirte al apartado <a href="" style="color: blue;">Tramite > Iniciar Tramite</a> donde verificaras tus datos personales/escolares y asi iniciar el tramite correspondiente.</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="parrafoColapso col-12">
                                        <p>
                                        
                                            <button class="btn btn-info col-12" type="button" data-toggle="collapse" data-target="#collapsePreguntas5" aria-expanded="false" aria-controls="collapsePreguntas">
                                                Si necesito mi carte de liberacion, ¿Cuales son los pasos?
                                            </button>
                                        </p>
                                        <div class="collapse" id="collapsePreguntas5">
                                            <div class="card card-body">
                                                <p>Para obtener tu carta de liberacion es necesario que ya hayas iniciado tu tramite.</p>
                                                <ul>
                                                    <li>Una ves iniciado tu tramite , tendras que dirigirte a servicios financieros.</li>
                                                    <li>En servicios financieros , pediras se busque tu solicitud de tramite.</li>
                                                    <li>Una ves encontrado, Se te entregara tu hoja de liberacion.</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="preguntasfrecuentes col-12">
                <div class="parrafoColapso col-12">
                    <p>
                    
                        <button class="btn btn-primary col-12" type="button" data-toggle="collapse" data-target="#collapseTerminos0" aria-expanded="false" aria-controls="collapsePoliticas">
                            Terminos y condiciones
                        </button>
                    </p>
                    <div class="collapse" id="collapseTerminos0">
                        <div class="card card-body">
                            <div class="container-faq col-12 ">
                                <div class="title-faq col-12">
                                    
                                    <div class="parrafoColapso col-12">
                                        <div class="card card-body">
                                            <p> 
                                                 La utilización de este sitio y de cualquiera de las vista  del mismo constituye el pleno y expreso consentimiento por parte del usuario para observar y sujetarse respecto de cada uno de los términos y condiciones que aquí se contienen, así como respecto de las políticas de privacidad, políticas de seguridad y, en su caso, cualesquiera otros documentos que conformen parte o regulen la participación del usuario en este sitio. En el supuesto que cualquiera de los términos a los que habrá de sujetarse el usuario cuando acceda a este sitio sean contrarios a sus intereses, deberá abstenerse de hacer uso de este.
                                            </p>
                                            <p>
                                                Obligaciones del usuario:
                                                Al utilizar este sitio me obligo a cumplir con los términos y condiciones de su uso, establecidos en el presente documento (en adelante, los “términos y condiciones"), por lo que reconozco haber leído, entendido y estar de acuerdo en sujetarme a sus términos y condiciones. De manera que, al acceder al sitio, estoy de acuerdo en acatar lo anterior.
                                            </p>

                                            <p>
                                                La información y los servicios que ofrece SILAB, (en adelante el Sitio) hacen referencia exclusivamente.

                                            Por el hecho de hacer uso de la información y hacer uso de los Servicios, el usuario expresa su aceptación y está de acuerdo con los términos y condiciones del uso del sitio, así como con las modificaciones que, en su caso, se realicen.
                                            </p>

                                            
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        
        </div>
    </div>

@stop
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
@stop
