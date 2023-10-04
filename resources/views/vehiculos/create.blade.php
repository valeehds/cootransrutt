@extends('layouts.panel')
@section('content')
<div class="card shadow">
    <div class="card-body">
        <form action="{{ route('vehiculo.store') }}" method="POST" class="needs-validation" novalidate>
            @csrf
            <div class="form-group">
                <label for="idUsuario">Persona</label>
                <select class="form-control" name="idUsuario" id="idUsuario" required>
                    <option value="" disabled selected>Seleccione una persona</option>
                    @foreach ($personas as $per)
                        <option value="{{ $per->id }}">{{ $per->name }} {{ $per->apellido }}</option>
                    @endforeach
                </select>
                <div class="invalid-feedback">Por favor seleccione una Persona.</div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="marca">Marca</label>
                    <input type="text" name="marca" id="marca" class="form-control" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="modeloVehiculo">Modelo</label>
                    <input type="text" name="modeloVehiculo" id="modeloVehiculo" class="form-control">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="numPlaca">Placa</label>
                    <input type="text" name="numPlaca" id="numPlaca" class="form-control" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="codigoUt">Código UT</label>
                    <input type="text" name="codigoUt" id="codigoUt" class="form-control" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="capacidadPasajeros">Capacidad pasajeros</label>
                    <input type="text" name="capacidadPasajeros" id="capacidadPasajeros" class="form-control" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="estado">Estado</label>
                    <select name="estado" id="estado" class="form-control" required>
                        <option value="">Selecciona el estado</option>
                        <option value="Activo">Activo</option>
                        <option value="Inactivo">Inactivo</option>
                    </select>
                </div>
            </div>

            <button class="btn btn-primary mt-3" type="submit">Enviar</button>
        </form>
    </div>
</div>
<footer class="footer">
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
</footer>
@endsection
