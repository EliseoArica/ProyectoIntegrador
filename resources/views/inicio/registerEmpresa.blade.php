@extends('layouts.appf')

@section('title')
    Registrarse
@endsection

@section('content')
<div class="limiter animated fadeIn">
    <div class="container-fluid fondorporsia container-login100">
        <div class="wrap-login100">
            <form class="login100-form validate-form p-l-55 p-r-55 p-t-178" method="POST" action="{{route('registro_empresa')}}">
                @csrf 
                @method('POST')
                <span class="login100-form-title">
                    Registrate
                </span>

                <div class="wrap-input100 mb-4">
                    <input class="input100" type="email" name="email" placeholder="Correo electronico corporativo" required>
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 mb-4">
                    <input class="input100" type="password" name="password" placeholder="Contraseña" required>
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 mb-4">
                    <input class="input100" type="hidden" name="role" value="C">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 mb-4">
                    <input class="input100" type="text" name="name" placeholder="Nombre de la empresa" required>
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 mb-4">
                    <input class="input100" type="text" name="business_name" placeholder="Razon social" required>
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 mb-4">
                    <input class="input100" type="text" name="representative" placeholder="Nombre del representante" required>
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 mb-4">
                    <input class="input100" type="number" name="ruc" placeholder="RUC" required>
                    <span class="focus-input100"></span>
                </div>



                <div class="text-right p-t-13 p-b-23">
                    <span class="txt1">
                        Ya tienes una cuenta?
                    </span>

                    <a href={{route('login_final')}} class="txt2">
                        Ingresa Aquí
                    </a>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Registrarse
                    </button>
                </div>

                <div class="flex-col-c p-t-80 p-b-40">
                </div>
            </form>
        </div>
    </div>
</div>

@endsection