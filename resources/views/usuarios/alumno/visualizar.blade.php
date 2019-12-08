@extends('layouts.apps')

@section('title')
    Visualizar ofertas
@endsection

@section('content')


    <section class="titulo">
        <div class="container">
            <h1 class="text-uppercase pt-5 mt-3  encabezado-postulaciones">
                Empleos para tí
            </h1>
            <hr>
        </div>
    </section>

    <div class="container pt-4 animated fadeIn">
        <div class="row justify-content-around">
            <aside class="col-md-4">
                <div class="card mb-5">
                    <article class="card-group-item">

                        <header class="card-header filtro-header">

                            <h6 class="title">Categorías</h6>

                        </header>

                        <div class="filter-content">

                            <div class="card-body">

                                <div class="custom-control custom-checkbox my-3 categoria">
                                    <span class="float-right badge badge-info round">5</span>
                                    <input type="checkbox" class="custom-control-input" id="Check1">
                                    <label class="custom-control-label" for="Check1">Front-End</label>
                                </div>

                                <div class="custom-control custom-checkbox my-3 categoria">
                                    <span class="float-right badge badge-info round">10</span>
                                    <input type="checkbox" class="custom-control-input float-right" id="Check2">
                                    <label class="custom-control-label" for="Check2">Back-End</label>
                                </div>

                                <div class="custom-control custom-checkbox my-3 categoria">
                                    <span class="float-right badge badge-info round">21</span>
                                    <input type="checkbox" class="custom-control-input" id="Check3">
                                    <label class="custom-control-label" for="Check3">UX-design</label>
                                </div>

                            </div>

                        </div>

                    </article>

                </div>

            </aside>

            <main class="col-md-8 contenido-principal">
                <div class="list-group">
                    @foreach($ofertas as $oferta)
                        <a href="{{ route('detalle_oferta', $oferta) }}" class="list-group-item list-group-item-action flex-column align-items-start mb-4">
                            <div class="d-flex">
                                <div class="imagen">
                                    <img src="logo/{{$oferta->company->logo}}" class="img-fluid img" alt="">
                                </div>
                                <div>
                                    <div class="d-flex w-100">
                                        <h5 class="mb-1">{{$oferta->title}}</h5>


                                    </div>
                                    <div>
                                        <p class="mb-1">Dirección: {{$oferta->address}}</p>
                                        <small>Salario: {{$oferta->salary}}</small>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach
                    
                </div>
                
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center mt-5 pt-5 mb-5 pb-5">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </main>


        </div>
    </div>
@endsection






