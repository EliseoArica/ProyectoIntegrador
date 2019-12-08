@extends('layouts.apps')

@section('title')
    Postular a oferta
@endsection

@section('content')


<section class="titulo animated fadeIn">
    <div class="container">
        <h1 class="text-uppercase pt-5 mt-3  encabezado-postulaciones">
            Postular a {{$ofertas->title}}
        </h1>
    </div>
</section>
<div class="editar animated fadeIn">
    <div class="container">
        <hr>
        <form action="{{route('postular', $ofertas)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="form-group color py-3 my-5  justify-content-center align-items-centers">
                <label for="your_experience" class="col-sm-12 col-form-label mb-2">Cuéntanos sobre tu formación académica o alguna experiencia laboral</label>
                <div class="col-sm-12 pb-3">
                    <textarea class="form-control ckeditor" name="your_experience" id="your_experience" required ></textarea>
                </div>
            </div>

            <div class="form-group color2 py-3 my-5  justify-content-center align-items-center">
                <label for="why_interested" class="col-sm-12 col-form-label mb-2">¿Por qué te interesa este empleo en particular?</label>
                <div class="col-sm-12 pb-3">
                    <textarea class="form-control ckeditor" name="why_interested" id="why_interested" required ></textarea>
                </div>
            </div>

            <div class="form-group color py-3 my-5 justify-content-center align-items-center">
                <label for="why_you" class="col-sm-12 col-form-label mb-2">¿Por qué crees que deberíamos elegirte para este empleo?</label>
                <div class="col-sm-12 pb-3">
                    <textarea class="form-control ckeditor" name="why_you" id="why_you" required></textarea>
                </div>
            </div>

            <div class="form-group row color2 py-5 my-5 justify-content-center align-items-center">
                <label for="curriculum" class="col-sm-6 col-form-label mb-2">Sube tu CV <p class="text-muted">Subir curriculum vitae en formato PDF</p></label>
                <div class="col-sm-5 pl-5">
                        <input type="file" class="form-control-file" id="curriculum" name="curriculum">
                </div>
            </div>
            <div class="text-center completar mb-5">
                    <button class="btn btn-primary" type="submit">
                            Completar solicitud
                    </button>
            </div>
        </form>
    </div>


</div>


@endsection