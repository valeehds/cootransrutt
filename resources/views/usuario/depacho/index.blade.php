@extends('layouts.panel')
@section('content')
<style>
        .driver-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            grid-gap: 20px;
        }
        
        .driver-card {
            background-color: #ffffff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
        }

        .driver-card:hover {
            transform: translateY(-5px);
        }
        
        .driver-avatar {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
            margin: 0 auto 10px;
            display: block;
        }
        
        .driver-name {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 5px;
        }
        
        .driver-license {
            color: #6c757d;
        }
</style>
<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">Despachos</h3>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="driver-grid">
            @forelse($despachos as $fila)
            <div class="driver-card">
                {{ $fila->idDespacho }}
                {{ $fila->nombre }}
                {{ $fila->direccion }}
                <a href="{{ route('despachos.rutas', ['id' => $fila->idDespacho]) }}">Ver Rutas Y Recorridos</a>
            </div>
            @empty
            <p>No hay despachos disponibles.</p>
            @endforelse
        </div>
    </div>
    <footer class="footer mt-4">
        <div class="row align-items-center justify-content-between">
            <div class="col-md-6">
                <p class="text-muted mb-0">&copy; 2023 <a href="#" class="font-weight-bold">{{ config('app.name') }}</a></p>
            </div>
            <div class="col-md-6 text-md-right">
            </div>
        </div>
    </footer>
</div>
@endsection


