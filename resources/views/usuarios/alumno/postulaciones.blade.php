@extends('layouts.apps')

@section('title')
    Mis postulaciones
@endsection

@section('content')
    

<section class="titulo">
    <div class="container">
        <h1 class="text-uppercase pt-5 mt-3  encabezado-postulaciones">
            Mis postulaciones
        </h1>
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
                    <a href="#" class="btn btn-primary px-4 ">Ver detalles</a>
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
                    <a href="#" class="btn btn-primary px-4">Ver detalles</a>
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
                    <a href="#" class="btn btn-primary px-4">Ver detalles</a>
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
                    <a href="#" class="btn btn-primary px-4">Ver detalles</a>
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
                    <a href="#" class="btn btn-primary px-4">Ver detalles</a>
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
                    <a href="#" class="btn btn-primary px-4">Ver detalles</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection