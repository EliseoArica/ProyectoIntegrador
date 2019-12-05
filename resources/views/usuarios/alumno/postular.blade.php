@extends('layouts.apps')

@section('title')
    Postular a oferta
@endsection

@section('content')


<section class="titulo animated fadeIn">
    <div class="container">
        <h1 class="text-uppercase pt-5 mt-3  encabezado-postulaciones">
            Postular a Front-end
        </h1>
    </div>
</section>
<div class="editar animated fadeIn">
    <div class="container">
        <hr>
        <form>
            <div class="form-group color py-3 my-5  justify-content-center align-items-centers">
                <label for="formacion" class="col-sm-12 col-form-label mb-2">Cuéntanos sobre tu formación académica o alguna experiencia laboral</label>
                <div class="col-sm-12 pb-3">
                    <textarea [froalaEditor]="froala_options" type="email" class="form-control expandir" id="formacion"></textarea>
                </div>
            </div>

            <div class="form-group color2 py-3 my-5  justify-content-center align-items-center">
                <label for="interesa" class="col-sm-12 col-form-label mb-2">¿Por qué te interesa este empleo en particular?</label>
                <div class="col-sm-12 pb-3">
                    <textarea [froalaEditor]="froala_options" type="text" class="form-control " id="interesa"></textarea>
                </div>
            </div>

            <div class="form-group color py-3 my-5 justify-content-center align-items-center">
                <label for="mejor" class="col-sm-12 col-form-label mb-2">¿Por qué crees que deberíamos elegirte para este empleo?</label>
                <div class="col-sm-12 pb-3">
                    <textarea [froalaEditor]="froala_options" type="text" class="form-control expandir" id="mejor"></textarea>
                </div>
            </div>

            <div class="form-group row color2 py-5 my-5 justify-content-center align-items-center">
                <label for="exampleFormControlFile1" class="col-sm-6 col-form-label mb-2">Sube tu CV <p class="text-muted">Subir curriculum vitae en formato PDF</p></label>
                <div class="col-sm-5 pl-5">
                    <angular-file-uploader [config]="afuConfig"></angular-file-uploader>
                </div>
            </div>
            <div class="text-center completar">
                <a href="#" class="btn btn-primary mb-5">Completar solicitud</a>
            </div>
        </form>
    </div>


</div>


@endsection