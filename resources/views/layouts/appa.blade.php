<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bootstrap Dashboard by Bootstrapious.com</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.min.css')}}">
    <!-- Font Awesome CSS-->
    <script src="https://kit.fontawesome.com/814070d98f.js" crossorigin="anonymous"></script>
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/fontastic.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/style.blue.css')}}">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- jQuery Circle-->
    
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <!-- Side Navbar -->
    <nav class="side-navbar">
      <div class="side-navbar-wrapper">
        <!-- Sidebar Header    -->
        <div class="sidenav-header d-flex align-items-center justify-content-center">
          <!-- User Info-->
          <div class="sidenav-header-inner text-center">
            <span>Bienvenido</span><h2 class="h5">Administrador</h2>
          </div>
          <!-- Small Brand information, appears on minimized sidebar-->
          <div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center"> <strong>B</strong><strong class="text-primary">D</strong></a></div>
        </div>
        <!-- Sidebar Navigation Menus-->
        <div class="main-menu">
          <h5 class="sidenav-heading">Menu</h5>
          <ul id="side-main-menu" class="side-menu list-unstyled">                  
            <li><a href="{{route('admin_dashboard')}}"> <i class="icon-home"></i>Dashboard                             </a></li>
            <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-grid"></i>Tablas </a>
              <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                <li><a href="{{route('admin_tablas_alumno')}}">Alumnos</a></li>
                <li><a href="{{route('admin_tablas_empresa')}}">Empresas</a></li>
              </ul>
            </li>
            <li><a href="{{route('admin_estadistica')}}"> <i class="fa fa-bar-chart"></i>Estadisticas                             </a></li>
            <li><a href="{{route('postulantes')}}"> <i class="fa fa-sign-out"></i>Salir                             </a></li>
          </ul>
        </div>

      </div>
    </nav>
    <div class="page">
      <!-- navbar-->
      <header class="header">
        <nav class="navbar">
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="icon-bars"> </i></a><a href="index.html" class="navbar-brand">
                  <div class="brand-text d-none d-md-inline-block"><strong class="text-primary">Dashboard</strong></div></a></div>
            </div>
          </div>
        </nav>
      </header>


      @yield('content')

    
      <footer class="main-footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <p>Khail Mogollon &copy; 2019</p>
            </div>
            <div class="col-sm-6 text-right">
              <p>  <a href="https://bootstrapious.com/p/bootstrap-4-dashboard" class="external"></a></p>
              <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions and it helps me to run Bootstrapious. Thank you for understanding :)-->
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- JavaScript files-->
    <script src="{{ URL::asset('assets/js/jquery.slim.min.js')}}"></script>
    <script src="{{ URL::asset('assets/js/popper.min.js')}} "></script>
    <script src="{{ URL::asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{ URL::asset('assets/js/grasp_mobile_progress_circle-1.0.0.min.js')}}"></script>
    <script src="{{ URL::asset('assets/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{ URL::asset('assets/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{ URL::asset('assets/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{ URL::asset('assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{ URL::asset('assets/js/charts-home.js')}}"></script>
    <!-- Main File-->
    <script src="{{ URL::asset('assets/js/front.js')}}"></script>
    <script src="{{ URL::asset('assets/js/charts-custom.js')}}"></script>
  </body>
</html>
 