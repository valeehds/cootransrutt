@extends('layouts.panel')
@section('content')
<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">Mantenimientos</h3>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-striped align-items-center">
            <thead class="thead-light">
                <tr>
                    <th scope="col">Código</th>
                    <th scope="col">Vehículo</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Observaciones</th>
                    <th scope="col">Costo Obra</th>
                    <th scope="col">Costo Piezas</th>
                    <th scope="col">Total</th>
                    <th scope="col">Comprobante</th>
                    <th scope="col" class="text-center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse($mantenimientos as $fila)
                <tr>
                    <td>{{$fila->idMantenimiento}}</td>
                    <td>{{$fila->idVehiculo}}</td>
                    <td>{{$fila->fechaMantenimiento}}</td>
                    <td>{{$fila->observaciones}}</td>
                    <td>{{$fila->valorManoobra}}</td>
                    <td>{{$fila->valorPiezas}}</td>
                    <td>{{$fila->valorTotal}}</td>
                    <td><a href="{{ route('archivo.download', $fila->fotoFactura) }}" target="_blank" class="btn btn-sm btn-primary">Descargar</a></td>
                    <td class="text-center">
                        <a href="{{route('mantenimiento.edit',$fila->idMantenimiento)}}" class="btn btn-sm btn-warning">Editar</a>
                        <a href="{{route('mantenimiento.destroy',$fila->idMantenimiento)}}" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro de eliminar el registro?')">Eliminar</a>
                    </td>
                </tr>
                @empty
                @endforelse
            </tbody>
        </table>
    </div>
    <footer class="footer mt-4">
        <div class="row align-items-center justify-content-between">
            <div class="col-md-6">
                <p class="text-muted mb-0">&copy; 2023 <a href="#" class="font-weight-bold">{{ config('app.name')}}</a></p>
            </div>
            <div class="col-md-6 text-md-right">
                <a href="{{route('mantenimiento.create')}}" class="btn btn-primary">Agregar Mantenimiento</a>
            </div>
        </div>
    </footer>
</div>
@endsection
