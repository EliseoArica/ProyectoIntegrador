@extends('layouts.appa')

@section('title')
    Tabla de estudiante
@endsection

@section('content')

<div class="breadcrumb-holder">
    <div class="container-fluid">
      <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Tables       </li>
      </ul>
    </div>
  </div>
  <section>
    <div class="container-fluid">
      <!-- Page Header-->
      <header> 
        <h1 class="h3 display">Tables            </h1>
      </header>
      <div class="row">
        <div class="col-lg">
          <div class="card">
            <div class="card-header">
              <h4>Tabla de alumnos</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Nombre</th>
                      <th>Apellido</th>
                      <th>Email</th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Khail</td>
                      <td>Mogollon</td>
                      <td>kmogollon1507@tecsup.edu.pe</td>
                      <td>@</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Khail</td>
                      <td>Mogollon</td>
                      <td>kmogollon1507@tecsup.edu.pe</td>
                      <td>@</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Khail</td>
                      <td>Mogollon</td>
                      <td>kmogollon1507@tecsup.edu.pe</td>
                      <td>@</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  @endsection