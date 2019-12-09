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
        @foreach ($offers as $offer) 
            <div class="col-md-4 mb-4">
                <div class="card card2 text-center">
                    
                    <img src="logo/{{auth()->user()->company->logo}}" class="postulaciones" alt="Logo">
                    <div class="card-body">
                        <h5 class="card-title text-uppercase text-left">{{$offer->title}}</h5>
                        <h6 class="card-subtitle mb-4 text-muted text-left">{{auth()->user()->company->name}}</h6>
                        <hr>
                        <p class="card-text text-left"><strong>Dirección: </strong>{{$offer->address}}</p>
                        <p class="card-text mb-4 text-left"><strong>Salario: </strong> {{$offer->salary}}</p>
                        <a href="{{ route('general_postulantes', $offer->id) }}"  class="btn btn-primary px-4 ">Ver Postulantes</a>
                    </div>
                    
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection