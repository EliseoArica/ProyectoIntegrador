@extends('layouts.apps')

@section('title', $ofertas->title)

@section('content')

<div class="fondoporsia container-fluid pt-5 pb-3   ">
    <div class="row justify-content-center mt-4 pb-0">
        <div class="col-6 text-center mb-5">
            <h1 class="display-3">{{$ofertas->title}}</h1>
            <img src="logo/{{$ofertas->company->logo}}" alt="" class="mt-3">
            <h3 class="my-1">{{$ofertas->company->name}}</h3>
            <a href="{{ route('postular_oferta', $ofertas) }}" class="btn btn-primary botonPostular mt-5 px-3"> Postular al empleo</a>
        </div>
    </div>
</div>

<main>
    <div class="container">
        <div class="row mt-5">
            <div class="col-12">
                <p class="lead text-justify mb-2">
                    {{$ofertas->description}}
                </p>

                <h4 class="mt-5 mb-4">
                    Funciones del cargo
                </h4>

                <ul>
                    <li class="lead text-justify">{{$ofertas->functions}}</li>
                    <li class="lead text-justify">{{$ofertas->functions}}.</li>
                    <li class="lead text-justify">{{$ofertas->functions}}</li>
                    <li class="lead text-justify">{{$ofertas->functions}}</li>
                    <li class="lead text-justify">{{$ofertas->functions}}</li>
                    <li class="lead text-justify">{{$ofertas->functions}}</li>
                </ul>

                <h4 class="mt-5 mb-4">
                    Requerimientos del cargo
                </h4>

                <ul>
                    <li class="lead text-justify">{{$ofertas->requirements}}</li>
                    <li class="lead text-justify">{{$ofertas->requirements}}</li>
                    <li class="lead text-justify">{{$ofertas->requirements}}</li>
                    <li class="lead text-justify">{{$ofertas->requirements}}</li>
                    <li class="lead text-justify">{{$ofertas->requirements}}</li>
                    <li class="lead text-justify">{{$ofertas->requirements}}</li>
                    <li class="lead text-justify">{{$ofertas->requirements}}</li>

                </ul>
                <div class="text-center">
                    <a href="{{ route('postular_oferta', $ofertas) }}" class="btn btn-primary botonPostular my-5 px-3"> Postular al empleo</a>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection