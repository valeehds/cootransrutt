@extends('layouts.panel')
@section('content')
<style>
.record-card {
        background-color: #f8f9fa;
        border: 1px solid #d1d3e2;
        border-radius: 10px;
        padding: 20px;
        margin-bottom: 20px;
        transition: transform 0.2s;
        box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
    }


    .record-card:hover {
        transform: translateY(-3px);
        box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
    }


    .action-button {
        background-color: #17a2b8;
        border-color: #17a2b8;
        color: #ffffff;
        margin-top: 10px;
    }

 
    .record-card h5,
    .record-card p {
        margin-bottom: 10px;
    }
</style>

<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">Rutas y Recorridos</h3>
            </div>
            <div class="col-md-6 text-md-right d-flex">
                <a href="{{ route('ruta.create') }}" class="btn btn-primary ml-auto">Agregar Registro Ruta</a>
                <a href="{{ route('recorrido.create') }}" class="btn btn-primary ml-2">Agregar Registro Recorrido</a>
            </div>
        </div>
    </div>
    <div class="row">
        @forelse($rutas as $fila)
        <div class="col-md-4">
            <div class="record-card">
                <h5 class="card-title">Código: {{$fila->idRuta}}</h5>
                <p class="card-text">Despacho: {{$fila->nombre}}</p>
                <p class="card-text">Duración: {{$fila->tiempoEstimado}}</p>
                <p class="card-text">Valor Tiquete: {{$fila->valorTiquete}}</p>
                <div class="text-center">
                    <a href="{{ route('ruta.edit', $fila->idRuta) }}" class="btn btn-sm btn-warning action-button">Editar</a>
                    <a href="{{ route('ruta.destroy', $fila->idRuta) }}" class="btn btn-sm btn-danger action-button" onclick="return confirm('¿Estás seguro de eliminar el registro?')">Eliminar</a>
                </div>
            </div>
        </div>
        @empty
        <div class="col-md-12">
            <div class="alert alert-warning" role="alert">
                No hay rutas disponibles.
            </div>
        </div>
        @endforelse
    </div>
    <div class="row">
        @forelse($recorridos as $fila)
        <div class="col-md-4">
            <div class="record-card">
                <h5 class="card-title">Código: {{$fila->idRecorrido}}</h5>
                <p class="card-text">Rotación: {{$fila->numPasajeros}}</p>
                <p class="card-text">No. Pasajeros: {{$fila->fechaHorainicio}}</p>
                <p class="card-text">Inicio: {{$fila->fechaHorafin}}</p>
                <div class="text-center">
                    <a href="{{ route('recorrido.edit', $fila->idRecorrido) }}" class="btn btn-sm btn-warning action-button">Editar</a>
                    <a href="{{ route('recorrido.destroy', $fila->idRecorrido) }}" class="btn btn-sm btn-danger action-button" onclick="return confirm('¿Estás seguro de eliminar el registro?')">Eliminar</a>
                </div>
            </div>
        </div>
        @empty
        <div class="col-md-12">
            <div class="alert alert-warning" role="alert">
                No hay recorridos disponibles.
            </div>
        </div>
        @endforelse
    </div>
</div>
<footer class="footer">
    <div class="row align-items-center justify-content-xl-between">
        <div class="col-xl-6">
            <div class="text-center text-xl-left text-muted">
                &copy; 2023 <a href="#" class="font-weight-bold ml-1">{{ config('app.name')}}</a>
            </div>
        </div>
        <div class="col-xl-6">
            <ul class="nav justify-content-center justify-content-xl-end">
                <li class="nav-item">
                    <a href="#" class="nav-link">¿Quiénes somos?</a>
                </li>
            </ul>
        </div>
    </div>
</footer>
@endsection
