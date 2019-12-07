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
        <form method="POST" action="{{route('actualizar_alumno')}}" enctype="multipart/form-data">
            @method('PUT')
            @csrf 

            <div class="form-group row color py-5 my-5 justify-content-center align-items-centers">
                <label for="email" class="col-sm-5 col-form-label mb-2">Email</label>
                <div class="col-sm-6">
                <input type="email" class="form-control" id="email" name="email" value="{{ $usuarios->email }}" required >
                </div>
            </div>

            <div class="form-group row color2 py-5 my-5 justify-content-center align-items-center">
                <label for="name" class="col-sm-5 col-form-label mb-2">Nombre</label>
                <div class="col-sm-6">
                <input type="text" class="form-control" id="name" name="name" value="{{ $alumnos->name }}" required>
                </div>
            </div>

            <div class="form-group row color py-5 my-5 justify-content-center align-items-center">
                <label for="description" class="col-sm-5 col-form-label mb-2">Formación academica y estudios</label>
                <div class="col-sm-6">
                <textarea class="form-control ckeditor" name="description" id="description" value="{{ $alumnos->description }}" required></textarea>
                </div>
            </div>

            <div class="form-group row color2 py-5 my-5 justify-content-center align-items-center">
                <label for="image" class="col-sm-5 col-form-label mb-2">Foto del alumno</label>
                <div class="col-sm-6">
                    <input type="file" class="form-control" id="image" name="image" required>
                </div>
            </div>

            <div class="text-center completar mb-5">
                <button class="btn btn-primary" type="submit">
                        Guardar Cambios
                </button>
                <!--<a href="#" class="btn btn-primary">Guardar Cambios</a>-->
            </div>

        </form>
    </div>
</div>

@endsection