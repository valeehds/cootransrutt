@extends('layouts.panel')
@section('content')

<style>
    .record-card {
        background-color: #ffffff;
        border: 1px solid #e4e4e4;
        border-radius: 8px;
        padding: 20px;
        margin-bottom: 20px;
        transition: transform 0.2s;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    }

    .record-card:hover {
        transform: translateY(-5px);
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

<div class="row">
    @forelse($rutas as $fila)
    <div class="col-md-4">
        <div class="card record-card">
            <div class="card-header bg-primary text-white">
                Ruta {{ $fila->idRuta }}
            </div>
            <div class="card-body">
                <p class="card-text">Despacho: 
                    @php
                    $despacho = App\Models\despachos::find($fila->idDespacho);
                    if ($despacho) {
                        echo $despacho->nombre;
                    }
                    @endphp
                </p>
                <p class="card-text">Duración: {{ $fila->tiempoEstimado }}</p>
                <p class="card-text">Valor Tiquete: {{ $fila->valorTiquete }}</p>
            </div>
            <div class="card-footer">
                <a href="{{ route('recorrido.vis', ['id' => $fila->idRuta]) }}"class="btn btn-warning action-button">Ver distintos recorridos</a>
            </div>
        </div>
    </div>
    @empty
        <p class="col-md-12">No hay rutas disponibles.</p>
    @endforelse
</div>

<footer class="footer mt-4">
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
