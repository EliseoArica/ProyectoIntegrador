@extends('layouts.appf')

@section('title')
    Registrarse
@endsection

@section('content')
<div class="limiter animated fadeIn">
    <div class="container-fluid fondo container-login100">
        <div class="wrap-login100">
            <form class="login100-form validate-form p-l-55 p-r-55 p-t-178">
                <span class="login100-form-title">
                    Registrate
                </span>

                <div class="wrap-input100 mb-4">
                    <input class="input100" type="text" name="username" placeholder="Nombre de la empresa:" required>
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 mb-4">
                    <input class="input100" type="password" name="pass" placeholder="Razón social:" required>
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 mb-4">
                    <input class="input100" type="password" name="pass" placeholder="RUC" required>
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 mb-4">
                    <input class="input100" type="password" name="pass" placeholder="Email de administrador" required>
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 mb-4">
                    <input class="input100" type="password" name="pass" placeholder="Contraseña" required>
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 mb-4">
                    <input class="input100" type="password" name="pass" placeholder="Confirmar Contraseña" required>
                    <span class="focus-input100"></span>
                </div>



                <div class="text-right p-t-13 p-b-23">
                    <span class="txt1">
                        Ya tienes una cuenta?
                    </span>

                    <a href="#" class="txt2">
                        Ingresa Aquí
                    </a>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Resgistrarse
                    </button>
                </div>

                <div class="flex-col-c p-t-80 p-b-40">
                </div>
            </form>
        </div>
    </div>
</div>

@endsection