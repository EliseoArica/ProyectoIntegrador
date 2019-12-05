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
        <form>

            <div class="form-group row color py-5 my-5 justify-content-center align-items-centers">
                <label for="titulo" class="col-sm-5 col-form-label mb-2">Titulo del empleo</label>
                <div class="col-sm-6">
                    <input type="email" class="form-control" id="titulo" placeholder="¿Qué puesto esta solicitando?">
                </div>
            </div>

            <div class="form-group row color2 py-5 my-5 justify-content-center align-items-center">
                <label for="categoria" class="col-sm-5 col-form-label mb-2">Categoría</label>
                <div class="col-sm-6">
                    <select class="custom-select" id="inputGroupSelect02">
                        <option selected>Selecciona una categoría</option>
                        <option value="1">Front-end</option>
                        <option value="2">Back-end</option>
                        <option value="3">UX-designer</option>
                    </select>
                </div>
            </div>

            <div class="form-group row color py-4 my-5 justify-content-center align-items-center">
                <label for="descripcion" class="col-sm-5 col-form-label mb-2">Descripción de la empresa</label>
                <div class="col-sm-6">
                    <textarea [froalaEditor]="froala_options" type="text" class="form-control expandir" id="descripcion"></textarea>
                </div>
            </div>

            <div class="form-group row color2 py-4 my-5 justify-content-center align-items-center">
                <label for="funciones" class="col-sm-5 col-form-label mb-2">Funciones del Cargo</label>
                <div class="col-sm-6">
                    <textarea [froalaEditor]="froala_options" type="text" class="form-control expandir" id="funciones"></textarea>
                </div>
            </div>

            <div class="form-group row color py-4 my-5 justify-content-center align-items-center">
                <label for="requerimientos" class="col-sm-5 col-form-label mb-2">Requerimientos del Cargo</label>
                <div class="col-sm-6">
                    <textarea [froalaEditor]="froala_options" type="text" class="form-control expandir" id="requerimientos"></textarea>
                </div>
            </div>

            <div class="form-group row color2 py-5 my-5 justify-content-center align-items-center">
                <label for="sueldo" class="col-sm-5 col-form-label mb-2">Sueldo Mensual</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="sueldo" placeholder="Perú">
                </div>
            </div>

            <div class="text-center completar my-5">
                <a href="#" class="btn btn-primary">Crear publicación</a>
            </div>

        </form>
    </div>

</div>

@endsection