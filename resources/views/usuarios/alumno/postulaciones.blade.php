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
                @foreach($postulaciones as $post)
                    <div class="col-md-4 mb-4">
                        <div class="card card2 text-center">
                            <img src="logo/{{$post->offer->company->logo}}" class="card-img-top imagelogo" alt="Logo">
                            <div class="card-body">
                                <h5 class="card-title text-uppercase text-left">{{$post->offer->title}}</h5>
                                <h6 class="card-subtitle mb-3 text-muted text-left">{{$post->offer->company->name}}</h6>
                                <p class="card-text text-left">Dirección: {{$post->offer->address}}</p>
                                <p class="card-text text-left">Salario: S/ {{$post->offer->salary}}</p>
                                <a href="#" class="btn btn-primary px-4 ">Ver detalles</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

@endsection