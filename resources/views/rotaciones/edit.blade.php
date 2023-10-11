@extends('layouts.panel')

@section('content')
<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">Editar Registro de Rotación</h3>
            </div>
        </div>
    </div>

    <div class="card-body">
    <form action="{{ route('rotacion.update', $rotaciones->idRotacion) }}" method="PUT">
            @csrf
            @method('PUT') 

            <div class="form-group">
                <label for="idUsuario">Persona</label>
                <select class="form-control" name="idUsuario" id="idUsuario" required>
                    @foreach ($personas as $per)
                        <option value="{{ $per->id }}" {{ $rotaciones->idUsuario == $per->id ? 'selected' : '' }}>
                            {{ $per->name }} {{ $per->apellido }}
                        </option>
                    @endforeach
                </select>
                <div class="invalid-feedback">Por favor seleccione una Persona.</div>
            </div>

            <div class="form-group">
                <label for="idVehiculo">Vehiculo</label>
                <select class="form-control" name="idVehiculo" id="idVehiculo" required>
                    @foreach ($vehiculos as $veh)
                        <option value="{{ $veh->idVehiculo }}" {{ $rotaciones->idVehiculo == $veh->idVehiculo ? 'selected' : '' }}>
                            {{ $veh->numPlaca }}
                        </option>
                    @endforeach
                </select>
                <div class="invalid-feedback">Por favor seleccione un Vehiculo.</div>
            </div>

            <div class="form-group">
                <label for="fechaAsignacion">Inicio</label>
                <input type="date" class="form-control" name="fechaAsignacion" id="fechaAsignacion" required value="{{ $rotaciones->fechaAsignacion }}">
                <div class="invalid-feedback">Por favor ingrese la fecha de inicio de la rotación.</div>
            </div>

            <div class="form-group">
                <label for="fechaFinasignacion">Fin</label>
                <input type="date" class="form-control" name="fechaFinasignacion" id="fechaFinasignacion" required value="{{ $rotaciones->fechaFinasignacion}}">
                <div class="invalid-feedback">Por favor ingrese la fecha de fin de la rotación.</div>
            </div>

           
        </div>

        <button class="btn btn-primary mt-3" type="submit">Guardar Cambios</button>
    </form>
</div>

<div class="card-footer">
    <div class="row align-items-center justify-content-between">
        <div class="col-md-6">
            <p class="text-muted mb-0">&copy; 2023 <a href="#" class="font-weight-bold">{{ config('app.name') }}</a></p>
        </div>
        <div class="col-md-6 text-md-right">
            <ul class="nav nav-footer justify-content-center justify-content-md-end">
                <li class="nav-item">
                    <a href="#" class="nav-link">¿Quiénes somos?</a>
                </li>
            </ul>
        </div>
    </div>
</div>
</div>
@endsection
