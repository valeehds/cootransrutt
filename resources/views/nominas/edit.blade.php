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
             <form action="{{ route('nomina.update', $nominas->idNomina) }}" method="PUT">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="id">Persona</label>
                <select class="form-control" name="idUsuario" id="idUsuario" required>
                    <option value="" disabled>Seleccione una persona</option>
                    @foreach ($personas as $persona)
                        <option value="{{ $persona->id }}" @if($persona->id === $nominas->id) selected @endif>{{ $persona->name }}{{ $per->apellido }}</option>
                    @endforeach
                </select>
                <div class="invalid-feedback">Por favor seleccione una Persona.</div>
            </div>

            <div class="form-group">
                <label for="horasTrabajadas">Horas</label>
                <input type="text" name="horasTrabajadas" id="horasTrabajadas" class="form-control" value="{{ $nominas->horasTrabajadas}}">
            </div>

            <div class="form-group">
                <label for="horasExtras">Extras</label>
                <input type="text" name="horasExtras" id="horasExtras" class="form-control" value="{{ $nominas->horasExtras}}">
            </div>

            <div class="form-group">
                <label for="fechaInicio">Inicio</label>
                <input type="date" name="fechaInicio" id="fechaInicio" class="form-control" value="{{ $nominas->fechaInicio}}">
            </div>

            <div class="form-group">
                <label for="fechaFin">Fin</label>
                <input type="date" name="fechaFin" id="fechaFin" class="form-control" value="{{ $nominas->fechaFin}}">
            </div>

            <div class="form-group">
                <label for="valorHorastrabajadas">Costo Horas</label>
                <input type="text" name="valorHorastrabajadas" id="valorHorastrabajadas" class="form-control" value="{{ $nominas->valorHorastrabajadas}}">
            </div>

            <div class="form-group">
                <label for="valorHorasextras">Costo Extras</label>
                <input type="text" name="valorHorasextras" id="valorHorasextras" class="form-control" value="{{ $nominas->valorHorasextras}}">
            </div>

            <div class="form-group">
                <label for="porcenta">Porcentaje</label>
                <input type="text" name="porcenta" id="porcenta" class="form-control" value="{{ $nominas->porcenta}}">
            </div>

            <div class="form-group">
                <label for="totalPago">Valor a Pagar</label>
                <input type="text" name="totalPago" id="totalPago" class="form-control" value="{{ $nominas->totalPago}}">
            </div>

            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
</div>
@endsection
