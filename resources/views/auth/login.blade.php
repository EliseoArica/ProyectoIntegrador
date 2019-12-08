@extends('layouts.appf')

@section('title')
    Iniciar sesión
@endsection

@section('content')
<div class="limiter animated fadeIn">
    <div class="container-fluid fondologin container-login100">
        <div class="wrap-login100">
            <form class="login100-form validate-form p-l-55 p-r-55 p-t-178" method="POST" action="{{ route('loginGeneral') }}">
                @csrf
                <span class="login100-form-title">
                    Inicia Sesión
                </span>

                <div class="wrap-input100 mb-4">
                    <input class="input100" type="text" name="email" placeholder="Correo electrónico">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 ">
                    <input class="input100" type="password" name="password" placeholder="Contraseña">
                    <span class="focus-input100"></span>
                </div>

                @error('password')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <div class="text-right p-t-13 p-b-23">
                    <span class="txt1">
                        <a href="#" class="txt2">
                            ¿Olvidaste tu contraseña?
                        </a>
                    </span>

                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn" type="submit">
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