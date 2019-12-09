@extends('layouts.appc')

@section('title')
    Postulante segun oferta  
@endsection

@section('content')

<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <div class="list-group">    
                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start mb-4">
                    <div class="d-flex">
                        <div class="imagen">
                            <img src="logo/{{$ofertas->company->logo}}" class="img-fluid img" alt="">
                        </div>
                        <div>
                            <div class="d-flex w-100">
                                <h5 class="mb-1">{{$ofertas->title}}</h5>
                            </div>
                            <div>
                                <p class="mb-1">Dirección: {{$ofertas->address}} </p>
                                <small>Salario: {{$ofertas->salary}} </small>
                            </div>
                        </div>
                    </div>
                </a>  
            </div>
        </div>
    </div>
</div>

<section class="titulo">
    <div class="container">
        <div class="row mb-5 pb-5">
            @foreach ($postulaciones as $postulacion)
            <div class="col-sm-6 mt-5">
                <div class="card">
                    <div class="row no-gutters align-items-center">
                        <div class="col-lg-5 text-center avatar-mask">
                            <img src={{ asset('images/foto3.PNG') }} class="card-img-top rounded-circle imgresponsive" height="170px" width="180px">
                        </div>
                        <div class="col-lg-7 pl-0">
                            <div class="card-body botonInformacion">
                                <h5 class="card-title">{{$postulacion->name}}</h5>
                                <p class="card-text">{{$postulacion->description}}</p>
                                <a href="{{route('detalle_postulante')}}" class="btn btn-primary stretched-link">Ver información</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

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