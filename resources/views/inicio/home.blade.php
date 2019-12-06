@extends('layouts.app')

@section('title')
    Inicio
@endsection

@section('content')
    

<div class="fondo container-fluid pt-5 animated fadeIn">
    <div class="row justify-content-center mt-4 pb-0 ">
        <div class="col-md-12 text-center ">
            <h4>Encuentra la empresa ideal para empezar tus practicas</h4>
            <div class="container">
                <div class="row mt-5 pt-5 no-gutters">
                    <div class="cuadrouno col-md-4 text-center pt-5  no-gutters">
                        <div class="container border border-primary px-0 py-4">
                            <h3>120</h3>
                            <h5>Alumnos</h5>
                        </div>
                    </div>
                    <div class="cuadrodos col-md-4 text-center pt-5 no-gutters">
                        <div class="container border border-primary px-0 py-4">
                            <h3>60</h3>
                            <h5>Empresas</h5>
                        </div>
                    </div>
                    <div class="cuadrotres col-md-4 text-center pt-5 no-gutters">
                        <div class="container border border-primary px-0 py-4">
                            <h3>150</h3>
                            <h5>Ofertas laborales</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="titulo fast fadeIn">
    <h1 class="text-center text-uppercase pt-5 mt-3 encabezado">
        trabajos en los que podrías estar interesado
    </h1>
    <div class="container padre">
        <div class="row align-items-center pt-5">
            <div class="col-md-7 text-center mx-auto">
                <a href="#" class="btn uppercase btn-outline-primary mr-md-2 mr-0 mb-3 d-lg-inline d-block">Empleos populares</a> <a href="#" class="btn uppercase btn-outline-primary d-lg-inline d-block">Empleos recientes</a>
            </div>
        </div>
    </div>
</section>

<div class="container cartas py-5 animated fadeIn">
    <div class="row py-3">
        <div class="col-md-4 mb-4">
            <div class="card card2 text-center">
                <img src={{ asset('images/Captura3.png') }} class="card-img-top imagelogo" alt="Logo">
                <div class="card-body">
                    <h5 class="card-title text-uppercase text-left">Front-End</h5>
                    <h6 class="card-subtitle mb-3 text-muted text-left">Apm Terminal</h6>
                    <p class="card-text text-left">Dirección</p>
                    <p class="card-text text-left">Sueldo</p>
                    <a href="#" class="btn btn-primary px-4 ">Postular</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4 ">
            <div class="card card2 text-center">
                <img src={{ asset('images/Captura5.PNG') }} class="card-img-top imagelogo" alt="Logo">
                <div class="card-body">
                    <h5 class="card-title text-uppercase text-left">Back-end</h5>
                    <h6 class="card-subtitle mb-3 text-muted text-left">Apm Terminal</h6>
                    <p class="card-text text-left">Dirección</p>
                    <p class="card-text text-left">Sueldo</p>
                    <a href="#" class="btn btn-primary px-4">Postular</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card card2 text-center">
                <img src={{ asset('images/Captura6.PNG') }} class="card-img-top imagelogo" alt="Logo">
                <div class="card-body">
                    <h5 class="card-title text-uppercase text-left">UX-design</h5>
                    <h6 class="card-subtitle mb-3 text-muted text-left">Apm Terminal</h6>
                    <p class="card-text text-left">Dirección</p>
                    <p class="card-text text-left">Sueldo</p>
                    <a href="#" class="btn btn-primary px-4">Postular</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card card2 text-center">
                <img src={{ asset('images/Captura.PNG') }} class="card-img-top imagelogo" alt="Logo">
                <div class="card-body">
                    <h5 class="card-title text-uppercase text-left">back-end</h5>
                    <h6 class="card-subtitle mb-3 text-muted text-left">Apm Terminal</h6>
                    <p class="card-text text-left">Dirección</p>
                    <p class="card-text text-left">Sueldo</p>
                    <a href="#" class="btn btn-primary px-4">Postular</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4 ">
            <div class="card card2 text-center">
                <img src={{ asset('images/Captura2.PNG') }} class="card-img-top imagelogo" alt="Logo">
                <div class="card-body">
                    <h5 class="card-title text-uppercase text-left">Ux-design</h5>
                    <h6 class="card-subtitle mb-3 text-muted text-left">Apm Terminal</h6>
                    <p class="card-text text-left">Dirección</p>
                    <p class="card-text text-left">Sueldo</p>
                    <a href="#" class="btn btn-primary px-4">Postular</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card card2 text-center">
                <img src={{ asset('images/Captura4.PNG') }} class="card-img-top imagelogo" alt="Logo">
                <div class="card-body">
                    <h5 class="card-title text-uppercase text-left">Front-End</h5>
                    <h6 class="card-subtitle mb-3 text-muted text-left">Apm Terminal</h6>
                    <p class="card-text text-left">Dirección</p>
                    <p class="card-text text-left">Sueldo</p>
                    <a href="#" class="btn btn-primary px-4">Postular</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection