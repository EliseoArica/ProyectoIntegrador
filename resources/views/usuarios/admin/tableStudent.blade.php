@extends('layouts.appa')

@section('title')
    Tabla de estudiante
@endsection

@section('content')

<div class="breadcrumb-holder">
    <div class="container-fluid">
      <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Tablas</li>
      </ul>
    </div>
  </div>
  <section>
    <div class="container-fluid">
      <!-- Page Header-->
      <header> 
        <h1 class="h3 display">Tablas</h1>
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
                      <th>Apellidos</th>
                      <th>Email</th>
                      <th>ID Usuario</th>
                      <th>Eliminar</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($alumnos as $alumno)
                      <tr>
                        <th scope="row">{{$alumno->id}}</th>
                        <td>{{$alumno->name}}</td>
                        <td>{{$alumno->surname}}</td>
                        <td>{{$alumno->user->email}}</td>
                        <td>{{$alumno->user_id}}</td>
                        <td>
                          <form action="{{route('eliminar_alumno', $alumno->id)}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" onclick="return confirm('¿Desea eliminar este alumno?')" class="btn btn-primary fas fa-trash-alt"></button>
                          </form>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
                {{$alumnos->links()}}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  @endsection