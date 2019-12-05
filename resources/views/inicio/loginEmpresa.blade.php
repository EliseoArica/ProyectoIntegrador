@extends('layouts.appf')

@section('title')
    Iniciar sesión
@endsection

@section('content')
<div class="limiter">
    <div class="container-fluid fondo container-login100">
        <div class="wrap-login100">
            <form class="login100-form validate-form p-l-55 p-r-55 p-t-178" action="{{route('postulantes')}}">
                <span class="login100-form-title">
                    Inicia Sesión
                </span>

                <div class="wrap-input100 mb-4">
                    <input class="input100" type="text" name="username" placeholder="Correo electrónico">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 ">
                    <input class="input100" type="password" name="pass" placeholder="Contraseña">
                    <span class="focus-input100"></span>
                </div>

                <div class="text-right p-t-13 p-b-23">
                    <span class="txt1">
                        Olvidaste tu contraseña?
                    </span>

                    <a href="#" class="txt2">
                        Click Aquí
                    </a>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn" href="postulantes.html">
                        Ingresar
                    </button>
                </div>


                <div class="container-login100-form-btn mt-4">
                    <a href="" class="botonTecsup"><i class="fab fa-google px-2"></i>   Ingresa con tu correo de Tecsup</a>
                </div>



                <div class="flex-col-c p-t-170 p-b-40">
                    <span class="txt1 p-b-9">
                        No tienes una cuenta?
                    </span>

                    <a href="#" class="txt3">
                        Registrarse ahora
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection