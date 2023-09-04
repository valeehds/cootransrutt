@extends('layouts.panel')
@section('content')

<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">Despachos</h3>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table align-items-center table-flush">
            <thead class="thead-light">
                <tr>
                    <th scope="col">Código</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Direccion</th>
                    <th scope="col" class="text-center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse($despachos as $fila)
                <tr>
                    <td>{{$fila->idDespacho}}</td>
                    <td>{{$fila->nombre}}</td>
                    <td>{{$fila->direccion}}</td>
                    <td class="text-center">
                    <a href="{{ route('despacho.rutas', ['id' => $fila->idDespacho]) }}"class="btn btn-sm btn-warning">Ver Rutas Y Recorridos</a>
                    <a href="{{route('despacho.edit',$fila->idDespacho)}}" class="btn btn-sm btn-warning">Editar</a>
                    <a href="{{route('despacho.destroy',$fila->idDespacho)}}" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro de eliminar el registro?')">Eliminar</a>

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
            <div class="col-md-6 text-md-right">
                <a href="{{route('despacho.create')}}" class="btn btn-primary">Agregar Registro</a>
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


