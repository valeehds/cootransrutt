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
             <form action="{{ route('recorrido.update', $recorridos->idRecorrido) }}" method="PUT">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="idRuta">Ruta</label>
                <select class="form-control" name="idRuta" id="idRuta" required>
                    <option value="" disabled>Seleccione una ruta</option>
                    @foreach ($rutas as $rut)
                        <option value="{{ $rut->idRuta }}" @if($rut->idRuta === $rutas->idRuta) selected @endif>{{ $rut->tiempoEstimado }}</option>
                    @endforeach
                </select>
                <div class="invalid-feedback">Por favor seleccione una ruta.</div>
            </div>

            <div class="form-group">
                <label for="idRotacion">Rotación</label>
                <select class="form-control" name="idRotacion" id="idRotacion" required>
                    <option value="" disabled>Seleccione una rotación</option>
                    @foreach ($rotaciones as $rot)
                        <option value="{{ $rot->idRotacion }}" @if($rot->idRotacion === $rotaciones->idRotacion) selected @endif>{{ $rot->fechaAsignacion }} {{ $rut->fechaFinAsignacion }}</option>
                    @endforeach
                </select>
                <div class="invalid-feedback">Por favor seleccione una rotación.</div>
            </div>

            <div class="form-group">
                <label for="numPasajeros">Cant. Pasajeros</label>
                <input type="text" name="numPasajeros" id="numPasajeros" class="form-control" value="{{ $recorridos->numPasajeros}}">
            </div>

            <div class="form-group">
                <label for="fechaHoraInicio">Fecha/Hora Inicio</label>
                <input type="datetime" name="fechaHoraInicio" id="fechaHoraInicio" class="form-control" value="{{ $recorridos->fechaHoraInicio}}">
            </div>

            <div class="form-group">
                <label for="fechaHoraFin">Fecha/Hora fin</label>
                <input type="datetime" name="fechaHoraFin" id="fechaHoraFin" class="form-control" value="{{ $recorridos->fechaHoraFin}}">
            </div>

            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
</div>
@endsection
