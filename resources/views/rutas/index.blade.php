@extends('layouts.panel')
@section('content')
<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">Rutas</h3>
            </div>
            <div class="col-md-6 text-md-right">
                <a href="{{route('rutas.create')}}" class="btn btn-sm btn-primary">Agregar registro de ruta</a>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-striped align-items-center">
            <thead class="thead-light">
                <tr>
                    <th scope="col">Código</th>
                    <th scope="col">Despacho</th>
                    <th scope="col">Tiempo estimado</th>
                    <th scope="col">Valor tiquete</th>
                    <th scope="col" class="text-center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse($rutas as $fila)
                <tr>
                    <td>{{$fila->idRuta}}</td>
                    <td>@php
                    $despachos = App\Models\despachos::find($fila->idDespacho); 
                    if ($despachos) {
                        echo $despachos->nombre;
                    }
                    @endphp</td>
                    <td>{{$fila->tiempoEstimado}}</td>
                    <td>{{$fila->valorTiquete}}</td>                
                    <td class="text-center">
                        <a href="{{ route('rutas.edit', $fila->idRuta) }}" class="btn btn-sm btn-warning">Editar</a>
                        <a href="{{ route('rutas.destroy', $fila->idRuta) }}" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro de eliminar el registro?')">Eliminar</a>
                    </td>
                </tr>
                @empty
                @endforelse
            </tbody>
        </table>
    </div>
</div>
<footer class="footer mt-4">
        <div class="row align-items-center justify-content-between">
            <div class="col-md-6">
                <p class="text-muted mb-0">&copy; 2023 <a href="#" class="font-weight-bold">{{ config('app.name')}}</a></p>
            </div>
        </div>
    </footer>
@endsection
