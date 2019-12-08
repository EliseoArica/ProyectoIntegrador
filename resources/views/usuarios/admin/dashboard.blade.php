  @extends('layouts.appa')

  @section('title')
      Dashboard
  @endsection
  
  @section('content')
  <!-- Counts Section -->
  <section class="dashboard-counts section-padding">
    <div class="container-fluid">
      <div class="row justify-content-around">
        <!-- Count item widget-->
        <div class="col-xl-2 col-md-4 col-6">
          <div class="wrapper count-title d-flex">
            <div class="icon"><i class="icon-user"></i></div>
            <div class="name"><strong class="text-uppercase">Nuevos alumnos</strong><span>Ultimos 7 días</span>
              <div class="count-number">10</div>
            </div>
          </div>
        </div>
        <!-- Count item widget-->
        <div class="col-xl-2 col-md-4 col-6">
          <div class="wrapper count-title d-flex">
            <div class="icon"><i class="icon-padnote"></i></div>
            <div class="name"><strong class="text-uppercase">Ofertas laborales</strong><span>Ultimos 5 días</span>
              <div class="count-number">12</div>
            </div>
          </div>
        </div>
        <!-- Count item widget-->
        <div class="col-xl-2 col-md-4 col-6">
          <div class="wrapper count-title d-flex">
            <div class="icon"><i class="icon-check"></i></div>
            <div class="name"><strong class="text-uppercase">Nuevas empresa</strong><span>Ultimas 4 semanas</span>
              <div class="count-number">16</div>
            </div>
          </div>
        </div>
    </div>
  </section>
  <!-- Header Section-->
  <section class="dashboard-header section-padding">
    <div class="container-fluid ">
      <div class="row d-flex align-items-md-stretch justify-content-around">           
        <!-- Pie Chart-->
        <div class="col-lg-3 col-md-6">
          <div class="card project-progress">
            <h2 class="display h4">Cantidad de usuarios</h2>
            <p> Muestra la cantidad de usuarios dividido entre  alumnos y empresas </p>
            <div class="pie-chart">
              <canvas id="pieChart" width="300" height="300"> </canvas>
            </div>
          </div>
        </div>
        <!-- Line Chart -->
        <div class="col-lg-6 col-md-12 flex-lg-last flex-md-first align-self-baseline">
          <div class="card sales-report">
            <h2 class="display h4">Postulaciones por mes</h2>
            <p> Este grafico muestra cuantos alumnos han postulado a las ofertas segun el mes</p>
            <div class="line-chart">
              <canvas id="lineCahrt"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Statistics Section-->
  <section class="statistics">
    <div class="container-fluid">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-4">
          <!-- User Actibity-->
          <div class="card user-activity">
            <h2 class="display h4">Actividad del usuario</h2>
            <div class="progress">
              <div role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar bg-primary"></div>
            </div>
            <div class="page-statistics d-flex justify-content-between">
              <div class="page-statistics-left"><span>Visitas a la pagina</span><strong>230</strong></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  @endsection
