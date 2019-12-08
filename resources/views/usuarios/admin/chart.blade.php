@extends('layouts.appa')

@section('title')
    Estadísticas
@endsection

@section('content')

<div class="breadcrumb-holder">
    <div class="container-fluid">
      <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
        <li class="breadcrumb-item active">Gráficos       </li>
      </ul>
    </div>
  </div>
  <section class="charts">
    <div class="container-fluid">
      <!-- Page Header-->
      <header> 
        <h1 class="h3 display">Gráficas            </h1>
      </header>
      <div class="row">
        <div class="col-lg-6">
          <div class="card line-chart-example">
            <div class="card-header d-flex align-items-center">
              <h4>Actividad del alumno y la empresa</h4>
            </div>
            <div class="card-body">
              <canvas id="lineChartExample"></canvas>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card bar-chart-example">
            <div class="card-header d-flex align-items-center">
              <h4>Actividad de alumnos </h4>
            </div>
            <div class="card-body">
              <canvas id="barChartExample"></canvas>
            </div>
          </div>
        </div>
        <div class="col-lg-6 align-items-center">
          <div class="card pie-chart-example">
            <div class="card-header d-flex align-items-center">
              <h4>Publicaciones por Categoría</h4>
            </div>
            <div class="card-body">
              <div class="chart-container">
                <canvas id="pieChartExample"></canvas>
              </div>
            </div>
          </div>
        </div> 
      </div>
    </div>
  </section>

  @endsection