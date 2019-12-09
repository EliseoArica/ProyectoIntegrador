@extends('layouts.appc')

@section('title')
    Crear oferta laboral
@endsection

@section('content')


<section class="titulo">
    <div class="container">
        <h1 class="text-uppercase pt-5 mt-3  encabezado-postulaciones">
            Crea tu oferta laboral
        </h1>
    </div>
</section>
<div class="editar">
    <div class="container">
        <hr>
        <form method="POST" action="{{route('registrar_oferta')}}"  >
            @method('POST')
            @csrf 
            <div class="form-group row color py-5 my-5 justify-content-center align-items-centers">
                <label for="title" class="col-sm-5 col-form-label mb-2">Titulo del empleo</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="title" id="title" placeholder="¿Qué puesto esta solicitando?" required>
                </div>
            </div>

            <div class="form-group row color2 py-5 my-5 justify-content-center align-items-center">
                <label for="category_id" class="col-sm-5 col-form-label mb-2">Categoría</label>
                <div class="col-sm-6">
                    <select class="custom-select" name="category_id" id="category_id">
                        
                        <option selected>Selecciona una categoría</option>
                        @foreach ($categorias as $categoria)
                        <option value="{{$categoria->id}}">{{$categoria->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group row color py-4 my-5 justify-content-center align-items-center">
                <label for="description" class="col-sm-5 col-form-label mb-2">Descripción de la oferta</label>
                <div class="col-sm-6">
                    <textarea type="text" name="description" class="form-control  ckeditor" id="description" required></textarea>
                </div>
            </div>

            <div class="form-group row color2 py-4 my-5 justify-content-center align-items-center">
                <label for="functions" class="col-sm-5 col-form-label mb-2">Funciones del Cargo</label>
                <div class="col-sm-6">
                    <textarea type="text" name="functions" class="form-control  ckeditor" id="functions" required></textarea>
                </div>
            </div>

            <div class="form-group row color py-4 my-5 justify-content-center align-items-center">
                <label for="requirements" class="col-sm-5 col-form-label mb-2">Requerimientos del Cargo</label>
                <div class="col-sm-6">
                    <textarea type="text" name="requirements" class="form-control  ckeditor" id="requirements" required></textarea>
                </div>
            </div>

            <div class="form-group row color2 py-5 my-5 justify-content-center align-items-center">
                <label for="salary" class="col-sm-5 col-form-label mb-2">Sueldo Mensual</label>
                <div class="col-sm-6">
                    <input type="number" class="form-control" id="salary" name="salary" placeholder="S/. " required>
                </div>
            </div>

            <div class="form-group row color py-5 my-5 justify-content-center align-items-centers">
                <label for="address" class="col-sm-5 col-form-label mb-2">Dirección</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="address" id="address" required>
                </div>
            </div>

            <div class="text-center completar my-5">
                <button class="btn btn-primary" type="submit">
                    Publicar oferta
                </button>
                <!---<a href="#" class="btn btn-primary">Crear publicación</a>--->
            </div>

        </form>
    </div>

</div>

@endsection