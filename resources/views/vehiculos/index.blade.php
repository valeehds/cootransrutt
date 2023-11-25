<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Listado de Vehículos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
        @if(session('success'))
        <div class="alert alert-success" style="font-size:13px;">
            {{ session('success') }}
        </div>
        @endif
        @if(session('error'))
            <div class="alert alert-danger" style="font-size:13px;">
                {{ session('error') }}
            </div>
        @endif
        <div class="title-section">
            <h2>Listado de vehículos</h2>
            <a href="{{ route('vehiculo.create') }}" class="btn btn-primary btn-create">Crear nuevo vehículo</a>
        </div>
        <div class="search-bar">
            <input type="text" placeholder="Buscar vehículo..." class="search-input">
        </div>
        <table class="vehicle-list table-responsive">
            <thead>
                <tr>
                    <th>Persona</th>
                    <th>Marca</th>
                    <th>Placa</th>
                    <th>Modelo</th>
                    <th>Pasajeros</th>
                    <th>Código UT</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            @forelse($vehiculos as $fila)
                <tr>
                    <td>@php
                    $personas = App\Models\user::find($fila->idUsuario); 
                    if ($personas) {
                        echo $personas->name . ' '. $personas->apellido;
                    }
                    @endphp</td>
                    <td>{{$fila->marca}}</td>
                    <td>{{$fila->numPlaca}}</td>
                    <td>{{$fila->modeloVehiculo}}</td>
                    <td>{{$fila->capacidadPasajeros}}</td>
                    <td>{{$fila->codigoUt}}</td>
                    <td>{{$fila->estado}}</td>
                    <td class="text-center">
                        <div class="d-flex justify-content-center">
                            <a href="{{ route('vehiculo.edit', $fila->idVehiculo) }}" class="editar mr-2" style="padding: 6px 12px; border-radius: 12px; color: #8d8d8d; text-decoration: none; border: #bababa 1px solid;">Editar</a>
                            <a href="{{ route('vehiculo.destroy', $fila->idVehiculo) }}" class="eliminar" onclick="return confirm('¿Estás seguro de eliminar el registro?')" style="padding: 6px 12px; border-radius: 12px; border:  #bababa 1px solid; color:  #8d8d8d; text-decoration: none;">Eliminar</a>
                        </div>
                    </td>
                </tr>
                @empty
                @endforelse
            </tbody>
        </table>
        <div class="pagination">
            {{ $vehiculos->links() }}
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</body>
</html>

