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
                @foreach ($postulaciones as $postulacion)    
                <div class="col-md-4 mb-4">
                    <div class="card card2 text-center">
                        <img src="logo/{{$postulacion->company->logo}}" class="card-img-top imagelogo tamaño" alt="Logo">
                        <div class="card-body">
                            <h5 class="card-title text-uppercase text-left">{{$postulacion->title}}</h5>
                            <h6 class="card-subtitle mb-3 text-muted text-left">{{$postulacion->company->name}}</h6>
                            <p class="card-text text-left"><strong>Dirección: </strong>{{$postulacion->address}}</p>
                            <p class="card-text text-left"><strong>Salario: </strong> {{$postulacion->salary}}</p>
                            <a href="{{ route('detalle_oferta', $postulacion) }}" class="btn btn-primary px-4 ">Ver detalles</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
    </div>

@endsection