@extends('layouts.appc')

@section('title')
    Detalle de postulantes
@endsection

@section('content')

<div class="fondo container-fluid pt-5">
    <div class="row justify-content-center mt-4 pb-0">
        <div class="container">
            <div class="row justify-content-center align-items-center mb-5 py-5 centrarResponsive">
                <div class="col-lg-2 mx-4">
                    <img src={{ asset('images/foto4.PNG') }} class="rounded-circle imgresponsive" height="170px" width="170px">
                </div>
                <div class="col-lg-5 mt-5 mb-5">
                    <h3>Khail Mogollon</h3>
                    <h5 class="my-3">khail.mogollon@tecsup.edu.pe</h5>
                </div>
                <div class="col-lg-4">
                    <a href="#" class="btn btn-success px-3 mx-2 "> Aceptar</a>
                    <a href="#" class="btn btn-danger  px-3 mx-2 "> Rechazar</a>
                </div>
            </div>
        </div>
    </div>
</div>

<main>
    <div class="container">
        <div class="row mt-5">
            <div class="col-12">
                <p class="lead text-justify mb-2">
                    Somos la empresa líder del mercado asegurador peruano, formamos parte del Grupo Breca y contamos con más de 120 años de experiencia. Somos más de 3,500 colaboradores y nuestra solidez y respaldo financiero es reconocido por las principales clasificadores
                    de riesgo a nivel nacional e internacional.<br> Estamos transformándonos para ser una organización más ágil y centrada en el cliente, por ello nos encontramos en búsqueda de profesionales que quieran sumarse
                    a este cambio.
                </p>

                <h4 class="mt-5 mb-4">
                    Funciones del cargo
                </h4>

                <ul>
                    <li class="lead text-justify">Habilidad para definir estructuras y asociaciones complejas de información: Arquitectura de Información.</li>
                    <li class="lead text-justify">Contar con habilidades de redacción y edición para escribir texto de UI que facilite la navegación del usuario, onboarding, promociones, mensajes de error, materiales de instrucción y otros componentes de la experiencia del usuario
                        de extremo a extremo.</li>
                    <li class="lead text-justify">Capacidad para generar flujos conversacionales con enfoque en la experiencia de usuario.</li>
                    <li class="lead text-justify">Capacidad para el storytelling.</li>
                    <li class="lead text-justify">Capacidad para hilvanar ideas clave en una narrativa convincente.</li>
                    <li class="lead text-justify">Capacidad para crear copys y microcopys acorde al público al que está dirigido el producto/servicio digital.</li>
                </ul>

                <h4 class="mt-5 mb-4">
                    Requerimientos del cargo
                </h4>

                <ul>
                    <li class="lead text-justify">Experiencia en posiciones similares de 1 año.</li>
                    <li class="lead text-justify">Comunicaciones, Periodismo, Marketing, Publicidad, Psicología, etc.</li>
                    <li class="lead text-justify">Buena Redacción.</li>
                    <li class="lead text-justify">Excel intermedio.</li>
                    <li class="lead text-justify">Word intermedio.</li>
                    <li class="lead text-justify">Power Point avanzado.</li>
                    <li class="lead text-justify">Conocimiento en comportamiento del cliente y diseño de experiencias.</li>

                </ul>
                <div class="text-center">
                    <a href="#" class="btn btn-primary botonPostular my-5 px-3">Descargar curriculum vitae</a>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection