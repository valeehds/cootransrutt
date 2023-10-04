@extends('layouts.panel')
@section('content')

<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">Personas</h3>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table align-items-center table-flush">
            <thead class="thead-light">
                <tr>
                    <th scope="col">Código</th>
                    <th scope="col">Rol</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Email</th>
                    <th scope="col">Tipo Documento</th>
                    <th scope="col">No. Documento</th>
                    <th scope="col">No. Licencia</th>
                    <th scope="col">Fecha Nacimiento</th>
                    <th scope="col">Fecha Afiliación</th>
                    <th scope="col">Estado</th>
                    <th scope="col" class="text-center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse($personas as $fila)
                <tr>
                    <td>{{$fila->id}}</td>
                    <td>{{$fila->rol}}</td>
                    <td>{{$fila->name}} {{$fila->apellido}}</td>
                    <td>{{$fila->email}}</td>
                    <td>{{$fila->tipoDoc}}</td>
                    <td>{{$fila->documento}}</td>
                    <td>
                        @if ($fila->numLicencia)
                            {{ $fila->numLicencia }}
                        @else
                            <span class="text-danger">Sin licencia</span>
                        @endif
                    </td>
                    <td>{{$fila->fechaNacimiento}}</td>
                    <td>{{$fila->fechaAfiliacion}}</td>
                    <td>{{$fila->estado}}</td>
                    <td class="text-center">
                        <a href="{{ route('persona.edit', $fila->id) }}" class="btn btn-sm btn-warning">Editar</a>
                        <form action="{{ route('persona.destroy', $fila->id) }}" method="POST" class="d-inline">
                        <a href="{{ route('persona.destroy', $fila->id) }}" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro de eliminar el registro?')">Eliminar</a>
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
