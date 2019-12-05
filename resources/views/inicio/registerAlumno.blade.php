@extends('layouts.appf')

@section('title')
    Refistrarse
@endsection

@section('content')
<div class="limiter animated fadeIn">
    <div class="container-fluid fondo container-login100">
        <div class="wrap-login100">
            <form class="login100-form validate-form p-l-55 p-r-55 p-t-178" method="POST" action="{{route('register')}}">
                @csrf 
                @method('POST')
                 
                <span class="login100-form-title">
                    Inicia Sesión
                </span>

                <div class="wrap-input100 mb-4">
                    <input class="input100" type="email" name="email" placeholder="Correo electrónico">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 mb-4">
                    <input class="input100" type="password" name="password" placeholder="Contraseña">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 mb-4">
                    <input class="input100" type="hidden" name="role" value="S">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 mb-4">
                    <input class="input100" type="text" name="name" placeholder="Nombre del alumno">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 mb-4">
                    <input class="input100" type="text" name="surname" placeholder="Apellido del alumno">
                    <span class="focus-input100"></span>
                </div>

                <div class="text-right p-t-13 p-b-23">
                    <span class="txt1">
                        Ya tienes una  
                    </span>

                    <a href="#" class="txt2">
                        cuenta?
                    </a>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn" href="ofertas.html">
                        Ingresar
                    </button>
                </div>


                <div class="container-login100-form-btn mt-4">
                    <a href="#" class="botonTecsup"><i class="fab fa-google fa-lg pr-2"></i>Ingresar con correo de Tecsup</a>
                </div>



                <div class="flex-col-c p-t-110 p-b-40">
                </div>
            </form>
        </div>
    </div>
</div>

@endsection