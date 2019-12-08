<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/814070d98f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/style.css') }}">
    
    <link href="https://fonts.googleapis.com/css?family=Italianno|Lato:400,700,900|Raleway:400,700,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i&display=swap" rel="stylesheet">
    <title> Pasantias | @yield('title') </title>
</head>

<body class="todo">
    <!-- Add Your HTML here -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary stroke">
            <!--BARRA DE NAVEGACIÓN-->
            <a class="navbar-brand ml-4" href="#">
              Pasantias
          </a>
            <button class="navbar-toggler hamburguesa" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                </ul>

                <ul class="navbar-nav mr-right mr-4" id="ejm2">
                    <li class="nav-item active mx-4">
                        <a class="nav-link" href="{{route('inicio')}}">Inicio<span class=" sr-only ">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown mx-4">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="">
                        Registrarse
                      </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{route('register_alumno')}}">Alumno</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{route('register_empresa')}}">Empresa</a>
                        </div>
                    </li>
                    <li class="nav-item active mx-4">
                        <a class="nav-link" href="{{route('login_final')}}">Iniciar sesión<span class=" sr-only ">(current)</span></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    @yield('content')

    <footer class="footer-sitio  pie">
        <div class="container">
            <div class="row pt-4 justify-content-around align-content-center">
                <div class="col-md-6">
                    <h3 class="text-uppercase text-center pt-5 pb-3">Acerca de nosotros</h3>
                    <p class="text-justify text-center ">
                        Somos el Grupo 2 y este es nuestro proyecto integrador.
                    </p>
                </div>

                <div class="col-md-6 text-center py-4">
                    <img src={{ asset('images/Tecsup1.PNG') }} class="img-fluid">
                </div>

                <hr class="w-100 mt-4">
                <p class="text-center copyright w-100 no-gutters">Khail Mogollon 2019 &copy;. Todos los derechos reservados</p>
            </div>
        </div>
    </footer>




    <script src="{{ URL::asset('assets/js/jquery.slim.min.js')}}"></script>
    <script src="{{ URL::asset('assets/js/popper.min.js')}} "></script>
    <script src="{{ URL::asset('assets/js/bootstrap.min.js')}}"></script>
</body>

</html>