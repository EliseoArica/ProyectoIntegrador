@extends('layouts.appc')

@section('title')
    Postulantes 
@endsection

@section('content')
<section class="titulo">
    <h1 class="text-uppercase pt-5 mt-3 mb-3 encabezado-postulaciones container">
        Postulantes
    </h1>

    <h5 class="container">
        Seleccione una oferta laboral ...
        <hr>
    </h5>

</section>

<div class="container cartas py-5">
    <div class="row py-3">
        <div class="col-md-4 mb-4">
            <div class="card text-center">
                <img src={{ asset('images/Logo3.PNG') }} class="postulaciones" alt="Logo">
                <div class="card-body">
                    <h5 class="card-title text-uppercase text-left">Front-End</h5>
                    <h6 class="card-subtitle mb-3 text-muted text-left">Apm Terminal</h6>
                    <p class="card-text text-left">Dirección</p>
                    <p class="card-text text-left">Sueldo</p>
                    <a href="{{route('postulante_oferta')}}"  class="btn btn-primary px-4 ">Ver Postulantes</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4 ">
            <div class="card text-center">
                <img src={{ asset('images/Captura3.PNG') }} class="card-img-top imagelogo" alt="Logo">
                <div class="card-body">
                    <h5 class="card-title text-uppercase text-left">Back-end</h5>
                    <h6 class="card-subtitle mb-3 text-muted text-left">Apm Terminal</h6>
                    <p class="card-text text-left">Dirección</p>
                    <p class="card-text text-left">Sueldo</p>
                    <a href="{{route('postulante_oferta')}}"  class="btn btn-primary px-4">Ver Postulantes</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card text-center">
                <img src={{ asset('images/Captura6.PNG') }} class="card-img-top imagelogo" alt="Logo">
                <div class="card-body">
                    <h5 class="card-title text-uppercase text-left">UX-design</h5>
                    <h6 class="card-subtitle mb-3 text-muted text-left">Apm Terminal</h6>
                    <p class="card-text text-left">Dirección</p>
                    <p class="card-text text-left">Sueldo</p>
                    <a href="{{route('postulante_oferta')}}"  class="btn btn-primary px-4">Ver Postulantes</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card text-center">
                <img src={{ asset('images/Captura.PNG') }} class="card-img-top imagelogo" alt="Logo">
                <div class="card-body">
                    <h5 class="card-title text-uppercase text-left">back-end</h5>
                    <h6 class="card-subtitle mb-3 text-muted text-left">Apm Terminal</h6>
                    <p class="card-text text-left">Dirección</p>
                    <p class="card-text text-left">Sueldo</p>
                    <a href="{{route('postulante_oferta')}}"  class="btn btn-primary px-4">Ver Postulantes</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4 ">
            <div class="card text-center">
                <img src={{ asset('images/Captura2.PNG') }} class="card-img-top imagelogo" alt="Logo">
                <div class="card-body">
                    <h5 class="card-title text-uppercase text-left">Ux-design</h5>
                    <h6 class="card-subtitle mb-3 text-muted text-left">Apm Terminal</h6>
                    <p class="card-text text-left">Dirección</p>
                    <p class="card-text text-left">Sueldo</p>
                    <a href="{{route('postulante_oferta')}}" class="btn btn-primary px-4">Ver Postulantes</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card text-center">
                <img src={{ asset('images/Captura4.PNG') }} class="card-img-top imagelogo" alt="Logo">
                <div class="card-body">
                    <h5 class="card-title text-uppercase text-left">Front-End</h5>
                    <h6 class="card-subtitle mb-3 text-muted text-left">Apm Terminal</h6>
                    <p class="card-text text-left">Dirección</p>
                    <p class="card-text text-left">Sueldo</p>
                    <a href="{{route('postulante_oferta')}}"  class="btn btn-primary px-4">Ver Postulantes</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection