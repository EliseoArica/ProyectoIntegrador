@extends('layouts.appc')

@section('title')
    Postulantes 
@endsection

@section('content')
<section>
    <div class="container-fluid">
      <!-- Page Header-->
      <header> 
        <h1 class="h3 display mt-5">Postulantes</h1>
      </header>
      <div class="row mt-5 mb-5 pb-5">
        <div class="col-lg">
          <div class="card">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>Nombre</th>
                      <th>Apellidos</th>
                      <th>Descripción</th>
                      <th>¿Por qúe está interesado?</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($postulantes as $postulante)
                      <tr>
                        <td>{{$postulante->name}}</td>
                        <td>{{$postulante->surname}}</td>
                        <td>{!!$postulante->your_experience!!}</td>
                        <td>{!!$postulante->why_interested!!}</td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <br>
  <br>
<div class="mb-5 pb-5"></div>
<div class="mb-5 pb-5"></div>
  @endsection
    