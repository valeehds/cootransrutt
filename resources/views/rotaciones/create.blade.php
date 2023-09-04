@extends('layouts.panel')
@section('content')
<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">Agregar Registro de Rotaciones</h3>
            </div>
        </div>
    </div>
    <div class="card-body">
        <form action="{{ route('recorrido.store') }}" method="POST" class="needs-validation" novalidate>
            @csrf
            <div class="form-group">
            <label for="idRuta">Ruta</label>
            <select class="form-control" name="idRuta" id="idRuta" required>
                <option value="" disabled selected>Seleccione una ruta</option>
                @foreach ($vehiculos as $veh)
                    <option value="{{ $vehiculos->idVehiculo}}">{{ $vehiculos->numPlaca}}</option>
                @endforeach
            </select>
            <div class="invalid-feedback">Por favor seleccione un Vehiculo.</div>
        </div>

        <div class="form-group">
            <label for="idRotacion">Rotación</label>
            <select class="form-control" name="idRotacion" id="idRotacion" required>
                <option value="" disabled selected>Seleccione una rotación</option>
                @foreach ($personas as $per)
                    <option value="{{ $personas->id }}">{{ $personas->name}} {{ $personas->name}}</option>
                @endforeach
            </select>
            <div class="invalid-feedback">Por favor seleccione una persona.</div>
        </div>

            <div class="form-group">
                <label for="fechaAsignacion">Cant. Pasajeros</label>
                <input type="text" class="form-control" name="fechaAsignacion" id="fechaAsignacion" required>
                <div class="invalid-feedback">Por favor ingrese la fecha de incio.</div>
            </div>
            <div class="form-group">
                <label for="fechaFinasignacion">Fecha/hora Inicio</label>
                <input type="text" class="form-control" name="fechaFinasignacion" id="fechaFinasignacion" required>
                <div class="invalid-feedback">Por favor ingrese la fecha fin.</div>
            </div>

            <button class="btn btn-primary mt-3" type="submit">Enviar</button>
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
