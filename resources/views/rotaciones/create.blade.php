@extends('layouts.panel')
@section('content')
<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">Agregar Registro de Rotaciòn</h3>
            </div>
        </div>
    </div>
    
    <div class="card-body">
        <form action="{{ route('rotacion.store') }}" method="POST" class="needs-validation" novalidate>
            @csrf
<<<<<<< HEAD
            <div class="form-group">
=======
        <div class="form-group">
>>>>>>> 040f034ec117eed931e3ed09cb21f35ec7582fc8
                <label for="idUsuario">Persona</label>
                <select class="form-control" name="idUsuario" id="idUsuario" required>
                    <option value="" disabled selected>Seleccione una persona</option>
                    @foreach ($personas as $per)
<<<<<<< HEAD
                        <option value="{{ $per->id }}">{{ $per->name }}{{ $per->apellido }}</option>
=======
                        @if ($per->rol == 'Conductores')
                            <option value="{{ $per->id }}">{{ $per->name }} {{ $per->apellido }}</option>
                        @endif
>>>>>>> 040f034ec117eed931e3ed09cb21f35ec7582fc8
                    @endforeach
                </select>
                <div class="invalid-feedback">Por favor seleccione una Persona.</div>
            </div>
            <div class="form-group">
                <label for="idVehiculo">Vehiculo</label>
                <select class="form-control" name="idVehiculo" id="idVehiculo" required>
                    <option value="" disabled selected>Seleccione una vehiculo</option>
                    @foreach ($vehiculos as $veh)
                        <option value="{{ $veh->idVehiculo }}">{{ $veh->numPlaca}}</option>
                    @endforeach
                </select>
                <div class="invalid-feedback">Por favor seleccione un Vehiculo.</div>
            </div>
            <div class="form-group">
                <label for="fechaAsignacion">Inicio</label>
                <input type="date" class="form-control" name="fechaAsignacion" id="fechaAsignacion" required>
                <div class="invalid-feedback">Por favor ingrese la fecha de inicio de la rotaciòn</div>
                @if($errors->has('fechaAsignacion'))
                <div class="alert alert-danger">
                    {{$errors->first('fechaAsignacion')}}
                </div>
                @endif
            </div>
            <div class="form-group">
                <label for="fechaFinasignacion">Fin</label>
                <input type="date" class="form-control" name="fechaFinasignacion" id="fechaFinasignacion" required>
                <div class="invalid-feedback">Por favor ingrese la fecha de fin de la rotacion.</div>
                @if($errors->has('fechaFinasignacion'))
                <div class="alert alert-danger">
                    {{$errors->first('fechaFinasignacion')}}
                </div>
                @endif
            </div>
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
