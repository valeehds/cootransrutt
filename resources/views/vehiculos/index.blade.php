@extends('layouts.panel')
@section('content')
<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">Vehículos</h3>
            </div>
            <div class="col-md-6 text-md-right">
                <a href="{{route('vehiculo.create')}}" class="btn btn-sm btn-primary">Agregar registro de vehículos</a>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-striped align-items-center">
            <thead class="thead-light">
                <tr>
                    <th scope="col">Código</th>
                    <th scope="col">Persona</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Placa</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Pasajeros</th>
                    <th scope="col">Código UT</th>
                    <th scope="col">Estado</th>
                    <th scope="col" class="text-center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse($vehiculos as $fila)
                <tr>
                    <td>{{$fila->idVehiculo}}</td>
                    <td>@php
                    $personas = App\Models\user::find($fila->idUsuario); 
                    if ($personas) {
                        echo $personas->name . ' '. $personas->name;
                    }
                    @endphp</td>
                    <td>{{$fila->marca}}</td>
                    <td>{{$fila->numPlaca}}</td>
                    <td>{{$fila->modeloVehiculo}}</td>
                    <td>{{$fila->capacidadPasajeros}}</td>
                    <td>{{$fila->codigoUt}}</td>
                    <td>{{$fila->estado}}</td>
                    <td class="text-center">
                        <a href="{{ route('vehiculo.edit', $fila->idVehiculo) }}" class="btn btn-sm btn-warning">Editar</a>
                        <a href="{{ route('vehiculo.destroy', $fila->idVehiculo) }}" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro de eliminar el registro?')">Eliminar</a>
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
