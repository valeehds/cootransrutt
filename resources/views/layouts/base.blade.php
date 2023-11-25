<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/vehiculos.css') }}">
    <link href="http://localhost/cootransrut/public/img/brand/logocootranascol.jpeg" rel="icon" type="image/png">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="{{ route('home')}}">
    <img src="{{ asset('img/brand/Logo Fútbol Deporte Deportivo Joven Rojo Blanco.jpg')}}" style="border-radius:20px" width="30" height="30" class="d-inline-block align-top" alt="Logo">
    <div class="d-inline-block ml-2" style="font-size: 11px; font-weight: bold; vertical-align: top;">
        Navegando con Eficiencia <br>
        Calculando con Exactitud
    </div>
    </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Vehículos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Usuarios</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{ auth()->user()->rol }}
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">{{ auth()->user()->name }} <br> {{ auth()->user()->apellido }}</a>
                    <a class="dropdown-item" href="#">Ajustes</a>
                    <a class="dropdown-item" href="#">Peticiones</a>
                    <a class="dropdown-item" href="#">Ayuda</a>
                    <div class="dropdown-divider"></div>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item"href="{{route('login')}}" 
                        onclick="event.preventDefault(); document.getElementById('formLogout').submit();">
                    <i class="ni ni-user-run"></i>
                    <span>Cerrar sesión</span>
                    <form action="{{route('logout')}}" method="POST" style="display: none;" id="formLogout">
                        @csrf
                    </form>
                    </a>
                </div>
            </li>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>


