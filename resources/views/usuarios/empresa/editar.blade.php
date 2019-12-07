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
        <form method="POST" action="{{route('actualizar_empresa')}}" enctype="multipart/form-data">
                @method('PUT')
                @csrf 

            <div class="form-group row color py-5 my-5 justify-content-center align-items-center">
                <label for="email" class="col-sm-5 col-form-label mb-2">Email corporativo</label>
                <div class="col-sm-6">
                        <input type="email" class="form-control" id="email" name="email" value="{{ $usuarios->email }}" disabled>
                </div>
            </div>

            <div class="form-group row color2 py-5 my-5 justify-content-center align-items-centers">
                <label for="name" class="col-sm-5 col-form-label mb-2">Nombre de la empresa</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="name" name="name" value="{{ $empresa->name }}" required>
                </div>
            </div>

            <div class="form-group row color py-5 my-5 justify-content-center align-items-centers">
                    <label for="business_name" class="col-sm-5 col-form-label mb-2">Razon Social</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="business_name" value="{{ $empresa->business_name }}" name="business_name" required>
                    </div>
                </div>
                

            <div class="form-group row color2 py-5 my-5 justify-content-center align-items-center">
                <label for="representative" class="col-sm-5 col-form-label mb-2">Nombre del representante</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="representative" name="representative" value="{{ $empresa->representative }}" required>
                </div>
            </div>

            


            <div class="form-group row color py-5 my-5 justify-content-center align-items-center">
                    <label for="ruc" class="col-sm-5 col-form-label mb-2">RUC</label>
                    <div class="col-sm-6">
                        <input type="number" class="form-control" id="ruc" name="ruc" value="{{ $empresa->ruc }}" required>
                    </div>
            </div>

            <div class="form-group row color2 py-5 my-5 justify-content-center align-items-center">
                    <label for="logo" class="col-sm-5 col-form-label mb-2">Logo de la empresa</label>
                    <div class="col-sm-6">
                        <input type="file" class="form-control" id="logo" name="logo" required>
                    </div>
            </div>

            <div class="form-group row color py-5 my-5 justify-content-center align-items-center">
                    <label for="description" class="col-sm-5 col-form-label mb-2">Descripcion de la empresa</label>
                    <div class="col-sm-6">
                        <textarea type="text" class="form-control ckeditor" id="description" name="description" value="{{ $empresa->description }}" required></textarea>
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
