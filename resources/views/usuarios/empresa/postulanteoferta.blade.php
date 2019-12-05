@extends('layouts.appc')

@section('title')
    Postulante segun oferta  
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-sm-4 text-center">
            <img src={{ asset('images/Captura2.PNG') }} class="img-fluid" width="350px">
        </div>
        <div class="col-sm-1">

        </div>
        <div class="col-sm-3 ho text-left">
            <h5 class="mt-2 mb-2">Front-end</h5>
            <p class="mt-2">Dirección</p>
            <p>Sueldo</p>
        </div>
    </div>
    <hr>
</div>




<section class="titulo">
    <div class="container">
        <div class="row mb-5 pb-5">
            <div class="col-sm-6 mt-5">
                <div class="card">
                    <div class="row no-gutters align-items-center">
                        <div class="col-lg-5 text-center avatar-mask">
                            <img src={{ asset('images/foto3.PNG') }} class="card-img-top rounded-circle imgresponsive" height="170px" width="180px">
                        </div>
                        <div class="col-lg-7 pl-0">
                            <div class="card-body botonInformacion">
                                <h5 class="card-title">Luis Nieves</h5>
                                <p class="card-text">Alice is a freelance web designer and developer based in London. She is specialized in HTML5, CSS3, JavaScript, Bootstrap, etc.</p>
                                <a href="{{route('detalle_postulante')}}" class="btn btn-primary stretched-link">Ver información</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 mt-5">
                <div class="card">
                    <div class="row no-gutters align-items-center">
                        <div class="col-lg-5 text-center">
                            <img src={{ asset('images/Foto.PNG') }} class="card-img-top rounded-circle imgresponsive" height="170px" width="100px">
                        </div>
                        <div class="col-lg-7">
                            <div class="card-body botonInformacion">
                                <h5 class="card-title">Claudia Ramos</h5>
                                <p class="card-text">Alice is a freelance web designer and developer based in London. She is specialized in HTML5, CSS3, JavaScript, Bootstrap, etc.</p>
                                <a href="{{route('detalle_postulante')}}" class="btn btn-primary stretched-link">Ver información</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 mt-5">
                <div class="card">
                    <div class="row no-gutters align-items-center">
                        <div class="col-lg-5 text-center">
                            <img src={{ asset('images/foto4.PNG') }} class="card-img-top rounded-circle imgresponsive" height="170px" width="100px">
                        </div>
                        <div class="col-lg-7">
                            <div class="card-body botonInformacion">
                                <h5 class="card-title">Eliseo Arica</h5>
                                <p class="card-text">Alice is a freelance web designer and developer based in London. She is specialized in HTML5, CSS3, JavaScript, Bootstrap, etc.</p>
                                <a href="{{route('detalle_postulante')}}" class="btn btn-primary stretched-link">Ver información</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 mt-5">
                <div class="card">
                    <div class="row no-gutters align-items-center">
                        <div class="col-lg-5 text-center">
                            <img src={{ asset('images/foto5.PNG') }} class="card-img-top rounded-circle imgresponsive" height="170px" width="100px">
                        </div>
                        <div class="col-lg-7">
                            <div class="card-body botonInformacion">
                                <h5 class="card-title">Khail Mogollon</h5>
                                <p class="card-text">Alice is a freelance web designer and developer based in London. She is specialized in HTML5, CSS3, JavaScript, Bootstrap, etc.</p>
                                <a href="{{route('detalle_postulante')}}" class="btn btn-primary ">Ver información</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection