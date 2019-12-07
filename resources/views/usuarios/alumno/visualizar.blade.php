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
            <aside class="col-sm-4">
                <div class="card mb-3">
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

            <main class="col-sm-8 contenido-principal">
                <div class="list-group">
                    <a href="{{route('detalle_oferta')}}" class="list-group-item list-group-item-action flex-column align-items-start mb-4">
                        <div class="d-flex">
                            <div class="imagen">
                                <img src={{ asset('images/Logo2.PNG') }} class="img-fluid img" alt="">
                            </div>
                            <div>
                                <div class="d-flex w-100">
                                    <h5 class="mb-1 text">UX-Designer</h5>
                                </div>
                                <div>
                                    <p class="mb-1 text">Dirección</p>
                                    <small class="text">Sueldo</small>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="detalleOferta.html" class="list-group-item list-group-item-action flex-column align-items-start mb-4">
                        <div class="d-flex">
                            <div class="imagen">
                                <img src={{ asset('images/Logo4.PNG') }} class="img-fluid img" alt="">
                            </div>
                            <div>
                                <div class="d-flex w-100">
                                    <h5 class="mb-1">Front-end</h5>


                                </div>
                                <div>
                                    <p class="mb-1">Dirección</p>
                                    <small>Sueldo</small>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="detalleOferta.html" class="list-group-item list-group-item-action flex-column align-items-start mb-4">
                        <div class="d-flex">
                            <div class="imagen">
                                <img src={{ asset('images/Logo3.PNG') }} class="img-fluid img" alt="">
                            </div>
                            <div>
                                <div class="d-flex w-100">
                                    <h5 class="mb-1">Back-end</h5>


                                </div>
                                <div>
                                    <p class="mb-1">Dirección</p>
                                    <small>Sueldo</small>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="detalleOferta.html" class="list-group-item list-group-item-action flex-column align-items-start mb-4">
                        <div class="d-flex">
                            <div class="imagen">
                                <img src={{ asset('images/Logo4.PNG') }} class="img-fluid img" alt="">
                            </div>
                            <div>
                                <div class="d-flex w-100">
                                    <h5 class="mb-1">Front-end</h5>


                                </div>
                                <div>
                                    <p class="mb-1">Dirección</p>
                                    <small>Sueldo</small>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="detalleOferta.html" class="list-group-item list-group-item-action flex-column align-items-start mb-4">
                        <div class="d-flex">
                            <div class="imagen">
                                <img src={{ asset('images/Logo2.PNG') }} class="img-fluid img" alt="">
                            </div>
                            <div>
                                <div class="d-flex w-100">
                                    <h5 class="mb-1">UX-Designer</h5>


                                </div>
                                <div>
                                    <p class="mb-1">Dirección</p>
                                    <small>Sueldo</small>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="detalleOferta.html" class="list-group-item list-group-item-action flex-column align-items-start mb-4">
                        <div class="d-flex">
                            <div class="imagen">
                                <img src={{ asset('images/Logo4.PNG') }} class="img-fluid img" alt="">
                            </div>
                            <div>
                                <div class="d-flex w-100">
                                    <h5 class="mb-1">Front-end</h5>


                                </div>
                                <div>
                                    <p class="mb-1">Dirección</p>
                                    <small>Sueldo</small>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="detalleOferta.html" class="list-group-item list-group-item-action flex-column align-items-start mb-4">
                        <div class="d-flex">
                            <div class="imagen">
                                <img src={{ asset('images/Logo3.PNG') }} class="img-fluid img" alt="">
                            </div>
                            <div>
                                <div class="d-flex w-100">
                                    <h5 class="mb-1">Back-end</h5>


                                </div>
                                <div>
                                    <p class="mb-1">Dirección</p>
                                    <small>Sueldo</small>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="detalleOferta.html" class="list-group-item list-group-item-action flex-column align-items-start mb-4">
                        <div class="d-flex">
                            <div class="imagen">
                                <img src={{ asset('images/Logo2.PNG') }} class="img-fluid img" alt="">
                            </div>
                            <div>
                                <div class="d-flex w-100">
                                    <h5 class="mb-1">UX-Designer</h5>


                                </div>
                                <div>
                                    <p class="mb-1">Dirección</p>
                                    <small>Sueldo</small>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center mb-5">
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






