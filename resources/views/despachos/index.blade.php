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
                <h3 class="mb-0">Despachos</h3>
            </div>
            <div class="col-md-6 text-md-right">
                <a href="{{ route('despacho.create') }}" class="btn btn-primary">Agregar Registro</a>
            </div>
        </div>
    </div>
    <div class="row">
        @forelse($despachos as $fila)
        <div class="col-md-4">
            <div class="record-card">
                <h5 class="card-title">Código: {{ $fila->idDespacho }}</h5>
                <p class="card-text">Nombre: {{ $fila->nombre }}</p>
                <p class="card-text">Dirección: {{ $fila->direccion }}</p>
                <div class="text-center">
                    <a href="{{ route('despacho.rutas', ['id' => $fila->idDespacho]) }}" class="btn btn-warning action-button">Ver Rutas Y Recorridos</a>
                    <a href="{{ route('despacho.edit', $fila->idDespacho) }}" class="btn btn-warning action-button">Editar</a>
                    <a href="{{ route('despacho.destroy', $fila->idDespacho) }}" class="btn btn-danger action-button" onclick="return confirm('¿Estás seguro de eliminar el registro?')">Eliminar</a>
                </div>
            </div>
        </div>
        @empty
        <div class="col-md-12">
            <div class="alert alert-warning" role="alert">
                No hay registros disponibles.
            </div>
        </div>
        @endforelse
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
</div>

@endsection
