@extends('layouts.appc')

@section('title')
    Editar perfil 
@endsection


@section('content')

<section class="titulo">
    <div class="container">
        <h1 class="text-uppercase pt-5 mt-3  encabezado-postulaciones">
            Completa tu perfil como empresa
        </h1>
    </div>
</section>
<div class="editar">
    <div class="container">
        <hr>
        <form>

            <div class="form-group row color2 py-5 my-5 justify-content-center align-items-centers">
                <label for="titulo" class="col-sm-5 col-form-label mb-2">Nombre de la empresa</label>
                <div class="col-sm-6">
                    <input type="email" class="form-control" id="titulo">
                </div>
            </div>

            <div class="form-group row color py-4 my-5 justify-content-center align-items-center">
                <label for="descripcion" class="col-sm-5 col-form-label mb-2">Descripción de la empresa</label>
                <div class="col-sm-6">
                    <textarea [froalaEditor]="froala_options" type="text" class="form-control expandir" id="descripcion"></textarea>
                </div>
            </div>

            <div class="form-group row color2 py-5 my-5 justify-content-center align-items-center">
                <label for="exampleFormControlFile1" class="col-sm-6 col-form-label mb-2">Logo de la empresa</label>
                <div class="col-sm-5">
                    <angular-file-uploader [config]="afuConfig"></angular-file-uploader>
                </div>
            </div>

            <div class="text-center completar my-5">
                <a href="#" class="btn btn-primary">Guardar cambios</a>
            </div>

        </form>
    </div>


</div>

@endsection
