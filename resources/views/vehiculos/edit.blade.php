@extends('layouts.panel')
@section('content')
<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">Actualizar Registro Nóminas</h3>
            </div>
        </div>
    </div>
    <div class="card-body">
        <form action="{{ route('vehiculo.update', $vehiculo->idVehiculo) }}" method="PUT">
            @csrf
            @method('PUT')
            
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="id">Persona</label>
                    <select class="form-control" name="idUsuario" id="idUsuario" required>
                        <option value="" disabled>Seleccione una persona</option>
                        @foreach ($personas as $persona)
                            <option value="{{ $persona->id }}" @if($persona->id === $vehiculo->id) selected @endif>{{ $persona->name }} {{ $persona->apellido }}</option>
                        @endforeach
                    </select>
                    <div class="invalid-feedback">Por favor seleccione una Persona.</div>
                </div>

                <div class="form-group col-md-6">
                    <label for="marca">Marca</label>
                    <input type="text" name="marca" id="marca" class="form-control" value="{{ $vehiculo->marca}}">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="numPlaca">Placa</label>
                    <input type="text" name="numPlaca" id="numPlaca" class="form-control" value="{{ $vehiculo->numPlaca}}">
                </div>

                <div class="form-group col-md-6">
                    <label for="modeloVehiculo">Modelo</label>
                    <input type="text" name="modeloVehiculo" id="modeloVehiculo" class="form-control" value="{{ $vehiculo->modeloVehiculo}}">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="codigoUt">Código UT</label>
                    <input type="text" name="codigoUt" id="codigoUt" class="form-control" value="{{ $vehiculo->codigoUt}}">
                </div>

                <div class="form-group col-md-6">
                    <label for="capacidadPasajeros">Capacidad pasajeros</label>
                    <input type="text" name="capacidadPasajeros" id="capacidadPasajeros" class="form-control" value="{{ $vehiculo->capacidadPasajeros}}">
                </div>
            </div>

            <div class="form-group">
                <label for="estado">Estado</label>
                <select name="estado" id="estado" class="form-control" required>
                    <option value="">Selecciona el estado</option>
                    <option value="Activo" {{ $vehiculo->estado === 'Activo' ? 'selected' : '' }}>Activo</option>
                    <option value="Inactivo" {{ $vehiculo->estado === 'Inactivo' ? 'selected' : '' }}>Inactivo</option>
                </select>
            </div>


            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
</div>
@endsection
