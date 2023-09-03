@extends('layouts.panel')
@section('content')
    <style>
        .carousel-inner img {
            max-width: 70%;
            height: 100px;
        }
    </style>
    <div class="card shadow">
        <div class="card-header border-0">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="mb-0">Mantenimientos</h3>
                </div>
            </div>
        </div>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100"
                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS4a7K4O2L2-MY_0hAuEpSmldO8bUZ56aGeVA&usqp=CAU"
                        alt="Primera imagen">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100"
                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT6Pund_pwkkdN6qIUnr7BYV52M7_s-Hn1Ghw&usqp=CAU"
                        alt="Segunda imagen">
                </div>
                <!-- Agrega más elementos de carrusel según tus necesidades -->
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Siguiente</span>
            </a>
        </div>
        <div class="table-responsive">
            <tbody>
                <!-- Contenido de la tabla u otros elementos -->
            </tbody>
        </div>
        <footer class="footer mt-4">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-6">
                    <p class="text-muted mb-0">&copy; 2023 <a href="#"
                            class="font-weight-bold">{{ config('app.name') }}</a></p>
                </div>
                <div class="col-md-6 text-md-right">
                    <!-- Contenido adicional del footer -->
                </div>
            </div>
        </footer>
    </div>
@endsection
