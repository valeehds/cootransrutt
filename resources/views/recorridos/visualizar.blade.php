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

<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">Recorridos</h3>
            </div>
        </div>
    </div>
    <div class="row">
        @forelse($recorridos as $fila)
        <div class="col-md-4">
            <div class="record-card">
                <h5 class="card-title">Código: {{$fila->idRecorrido}}</h5>
                <p class="card-text">Rotación: {{$fila->numPasajeros}}</p>
                <p class="card-text">No. Pasajeros: {{$fila->fechaHorainicio}}</p>
                <p class="card-text">Inicio: {{$fila->fechaHorafin}}</p>
            
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
