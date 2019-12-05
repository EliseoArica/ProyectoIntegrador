@extends('layouts.apps')

@section('title')
    Editar perfil
@endsection

@section('content')

<section class="titulo">
    <div class="container">
        <h1 class="text-uppercase pt-5 mt-3  encabezado-postulaciones">
            Completa tu perfil profesional
        </h1>
    </div>
</section>

<div class="editar">
    <div class="container">
        <hr>
        <form>

            <div class="form-group row color py-5 my-5 justify-content-center align-items-centers">
                <label for="email" class="col-sm-5 col-form-label mb-2">Email</label>
                <div class="col-sm-6">
                    <input type="email" class="form-control" id="email" placeholder="khail.mogollon@tecsup.edu.pe">
                </div>
            </div>

            <div class="form-group row color2 py-5 my-5 justify-content-center align-items-center">
                <label for="pais" class="col-sm-5 col-form-label mb-2">País</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="pais" placeholder="Perú">
                </div>
            </div>

            <div class="form-group row color py-5 my-5 justify-content-center align-items-center">
                <label for="nombres" class="col-sm-5 col-form-label mb-2">Nombres</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="nombres" placeholder="Khail Andres Mogollon Buitron">
                </div>
            </div>

            <div class="form-group row color2 py-5 my-5 justify-content-center align-items-center">
                <label for="descripcion" class="col-sm-5 col-form-label mb-2">Formación Academia y estudios</label>
                <div class="col-sm-6">
                    <textarea [froalaEditor]="froala_options" type="text" class="form-control expandir" id="descripcion"></textarea>
                </div>
            </div>

            <div class="text-center completar mb-5">
                <a href="#" class="btn btn-primary">Guardar Cambios</a>
            </div>

        </form>
    </div>
</div>

@endsection