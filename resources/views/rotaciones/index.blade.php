@extends('layouts.panel')
@section('content')

<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">Rotaciones</h3>
            </div>
            <div class="col-md-6 text-md-right">
                <a href="{{route('rotacion.create')}}" class="btn btn-sm btn-primary">Agregar registro de vehículos</a>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table align-items-center table-flush">
            <thead class="thead-light">
                <tr>
                    <th scope="col">Código</th>
                    <th scope="col">Vehiculo</th>
                    <th scope="col">Incio</th>
                    <th scope="col">Fin</th>
                    <th scope="col" class="text-center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse($personas as $fila)
                <tr>
                    <td>{{$fila->idVehiculo}}</td>
                    <td>{{$fila->name}} {{$fila->apellido}}</td>
                    <td>{{$fila->fechaAsignacion}}</td>
                    <td>{{$fila->fechaFinasignacion}}</td>
                    <td class="text-center">
                        <a href="" class="btn btn-sm btn-warning">Editar</a>
                        <form action="" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro de eliminar el registro?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @empty
                @endforelse
            </tbody>
        </table>
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
