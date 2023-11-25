@extends('layouts.panel')
@section('content')
<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">Nóminas</h3>
            </div>
            <div class="col-md-6 text-md-right">
                <a href="{{route('nomina.create')}}" class="btn btn-sm btn-primary">Agregar registro de Nomina</a>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-striped align-items-center">
            <thead class="thead-light">
                <tr>
                    <th scope="col">Código</th>
                    <th scope="col">Persona</th>
                    <th scope="col">Horas</th>
                    <th scope="col">Horas Extras</th>
                    <th scope="col">Inicio</th>
                    <th scope="col">Fin</th>
                    <th scope="col">Costo Horas</th>
                    <th scope="col">Costo Horas Extras</th>
                    <th scope="col">Porcentaje</th>
                    <th scope="col">Valor a pagar</th>
                    <th scope="col" class="text-center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse($nominas as $fila)
                <tr>
                    <td>{{$fila->idNomina}}</td>
                    <td>@php
                    $personas = App\Models\user::find($fila->idUsuario); 
                    if ($personas) {
                        echo $personas->name . ' '. $personas->name ;
                    }
                    @endphp</td>
                    <td>{{$fila->horasTrabajadas}}</td>
                    <td>{{$fila->horasExtras}}</td>
                    <td>{{$fila->fechaInicio}}</td>
                    <td>{{$fila->fechaFin}}</td>
                    <td>{{$fila->valorHorastrabajadas}}</td>
                    <td>{{$fila->valorHorasextras}}</td>
                    <td>{{$fila->porcenta}}</td>
                    <td>{{$fila->totalPago}}</td>
                
                    <td class="text-center">
                        <a href="{{ route('nomina.edit', $fila->idNomina) }}" class="btn btn-sm btn-warning">Editar</a>
                        <a href="{{ route('nomina.destroy', $fila->idNomina) }}" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro de eliminar el registro?')">Eliminar</a>
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
