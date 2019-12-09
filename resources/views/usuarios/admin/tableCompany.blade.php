@extends('layouts.appa')

@section('title')
    Tabla de empresas
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
              <h4>Tabla de empresas</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Nombre</th>
                      <th>Email</th>
                      <th>Representante</th>
                      <th>RUC</th>
                      <th>ID Usuario</th>
                      <th>Eliminar</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($empresas as $empresa)
                      <tr>
                        <th scope="row">{{$empresa->id}}</th>
                        <td>{{$empresa->name}}</td>
                        <td>{{$empresa->user->email}}</td>
                        <td>{{$empresa->representative}}</td>
                        <td>{{$empresa->ruc}}</td>
                        <td>{{$empresa->user_id}}</td>
                        <td>
                          <form action="{{route('eliminar_empresa', $empresa->id)}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" onclick="return confirm('¿Desea eliminar esta empresa?')" class="btn btn-primary fas fa-trash-alt"></button>
                          </form>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
                {{$empresas->links()}}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  
  @endsection