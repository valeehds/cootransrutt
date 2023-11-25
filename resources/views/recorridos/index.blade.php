@extends('layouts.panel')
@section('content')
<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">Rutas</h3>
            </div>
            <div class="col-md-6 text-md-right">
                <a href="{{route('recorridos.create')}}" class="btn btn-sm btn-primary">Agregar registro de ruta</a>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-striped align-items-center">
            <thead class="thead-light">
                <tr>
                    <th scope="col">Código</th>
                    <th scope="col">Ruta</th>
                    <th scope="col">Rotación</th>
                    <th scope="col">Cant. Pasajeros</th>
                    <th scope="col">Fecha/hora Inicio</th>
                    <th scope="col">Fecha/hora Inicio</th>
                    <th scope="col" class="text-center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse($rutas as $fila)
                <tr>
                    <td>{{$fila->idRuta}}</td>
                    <td>{{$fila->idRotacion}}</td>
                    <td>{{$fila->numPasajeros}}</td>
                    <td>{{$fila->fechaHoraInicio}}</td>
                    <td>{{$fila->fechaHoraFin}}</td>                  
                    <td class="text-center">
                        <a href="{{ route('recorrido.edit', $fila->idRecorrido) }}" class="btn btn-sm btn-warning">Editar</a>
                        <a href="{{ route('recorrido.destroy', $fila->idRecorrido) }}" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro de eliminar el registro?')">Eliminar</a>
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
