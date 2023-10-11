@extends('layouts.panel')
@section('content')
<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">Nóminas</h3>
            </div>
            <div class="col-md-6 text-md-right">
                <a href="{{route('rotacion.create')}}" class="btn btn-sm btn-primary">Agregar registro de Rotaciòn</a>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-striped align-items-center">
            <thead class="thead-light">
                <tr>
                    <th scope="col">Código</th>
                    <th scope="col">Vehiculo</th>
                    <th scope="col">Conductor</th>
                    <th scope="col">Inicio</th>
                    <th scope="col">Fin</th>
                    <th scope="col" class="text-center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse($rotaciones as $fila)
                <tr>
                    <td>{{$fila->idRotacion}}</td>
                    <td>@php
                    $vehiculos = App\Models\vehiculos::find($fila->numPlaca); 
                    if ($vehiculos) {
                        echo $vehiculos->numPlaca . ' '. $personas->numPlaca ;
                    }
                    @endphp</td>
                    <td>@php
                    $personas = App\Models\user::find($fila->idUsuario); 
                    if ($personas) {
                        echo $personas->name . ' '. $personas->name ;
                    }
                    @endphp</td>
                    <td>{{$fila->fechaAsignacion}}</td>
                    <td>{{$fila->fechaFinasignacion}}</td>
                
                    <td class="text-center">
                        <a href="{{ route('rotacion.edit', $fila->idRotacion) }}" class="btn btn-sm btn-warning">Editar</a>
                        <a href="{{ route('rotacion.destroy', $fila->idRotacion) }}" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro de eliminar el registro?')">Eliminar</a>
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
