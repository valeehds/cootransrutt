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
<<<<<<< HEAD
             <form action="{{ route('nomina.update', $nominas->idNomina) }}" method="PUT">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="id">Persona</label>
                <select class="form-control" name="idUsuario" id="idUsuario" required>
                    <option value="" disabled>Seleccione una persona</option>
                    @foreach ($personas as $persona)
                        <option value="{{ $persona->id }}" @if($persona->id === $nominas->id) selected @endif>{{ $persona->name }}{{ $per->apellido }}</option>
=======
        <form action="{{ route('nomina.update', $nominas->idNomina) }}" method="PUT"> 
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="idUsuario">Persona</label>
                <select class="form-control" name="idUsuario" id="idUsuario" required>
                    <option value="" disabled selected>Seleccione una persona</option>
                    @foreach ($personas as $per)
                        @if ($per->rol == 'Conductores')
                            <option value="{{ $per->id }}">{{ $per->name }} {{ $per->apellido }}</option>
                        @endif
>>>>>>> 040f034ec117eed931e3ed09cb21f35ec7582fc8
                    @endforeach
                </select>
                <div class="invalid-feedback">Por favor seleccione una Persona.</div>
            </div>

            <div class="form-group">
                <label for="horasTrabajadas">Horas</label>
<<<<<<< HEAD
                <input type="text" name="horasTrabajadas" id="horasTrabajadas" class="form-control" value="{{ $nominas->horasTrabajadas}}">
=======
                <input type="text" name="horasTrabajadas" id="horasTrabajadas" class="form-control" value="{{ $nominas->horasTrabajadas }}">
>>>>>>> 040f034ec117eed931e3ed09cb21f35ec7582fc8
            </div>

            <div class="form-group">
                <label for="horasExtras">Extras</label>
<<<<<<< HEAD
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
=======
                <input type="text" name="horasExtras" id="horasExtras" class="form-control" value="{{ $nominas->horasExtras }}">
            </div>

            <div class="form-group">
                <label for="fechaInicio"> Fecha Inicio</label>
                <input type="date" name="fechaInicio" id="fechaInicio" class="form-control" value="{{ $nominas->fechaInicio }}">
                @if($errors->has('fechaInicio'))
                    <div class="alert alert-danger">
                        {{ $errors->first('fechaInicio') }}
                    </div>
                @endif
            </div>

            <div class="form-group">
                <label for="fechaFin"> Fecha Fin</label>
                <input type="date" name="fechaFin" id="fechaFin" class="form-control" value="{{ $nominas->fechaFin }}">
                @if($errors->has('fechaFin'))
                    <div class="alert alert-danger">
                        {{ $errors->first('fechaFin') }}
                    </div>
                @endif
            </div>

            <div class="form-group">
                <label for="valorHorastrabajadas">Valor Horas Trabajadas</label>
                <input type="text" name="valorHorastrabajadas" id="valorHorastrabajadas" class="form-control" value="{{ $nominas->valorHorastrabajadas }}">
            </div>

            <div class="form-group">
                <label for="valorHorasextras">Valor Horas Extras</label>
                <input type="text" name="valorHorasextras" id="valorHorasextras" class="form-control" value="{{ $nominas->valorHorasextras }}">
>>>>>>> 040f034ec117eed931e3ed09cb21f35ec7582fc8
            </div>

            <div class="form-group">
                <label for="porcenta">Porcentaje</label>
<<<<<<< HEAD
                <input type="text" name="porcenta" id="porcenta" class="form-control" value="{{ $nominas->porcenta}}">
=======
                <input type="text" name="porcenta" id="porcenta" class="form-control" value="{{ $nominas->porcenta }}">
>>>>>>> 040f034ec117eed931e3ed09cb21f35ec7582fc8
            </div>

            <div class="form-group">
                <label for="totalPago">Valor a Pagar</label>
<<<<<<< HEAD
                <input type="text" name="totalPago" id="totalPago" class="form-control" value="{{ $nominas->totalPago}}">
=======
                <input type="text" name="totalPago" id="totalPago" class="form-control" value="{{ $nominas->totalPago }}">
>>>>>>> 040f034ec117eed931e3ed09cb21f35ec7582fc8
            </div>

            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
</div>
<<<<<<< HEAD
=======
<script>
    document.addEventListener('DOMContentLoaded', function () {
        //Llamo los atributos para las operaciones
        var horasTrabajadasInput = document.getElementById('horasTrabajadas');
        var valorHorastrabajadasInput = document.getElementById('valorHorastrabajadas');
        var horasExtrasInput = document.getElementById('horasExtras');
        var valorHorasextrasInput = document.getElementById('valorHorasextras');
        var valorTotalInput = document.getElementById('totalPago');
        var porcentajeInput = document.getElementById('porcenta');

        // LLamo los eventos de escucha para calcular las operaciones automaticamente
        horasTrabajadasInput.addEventListener('input', updateValues);
        horasExtrasInput.addEventListener('input', updateValues);
        porcentajeInput.addEventListener('input', updateValues);

        // Funcion que hace que se actualicen los campos automaticamente
        function updateValues() {
            // Get the values of 'horasTrabajadas', 'horasExtras', and 'porcenta'
            var horasTrabajadasValue = parseFloat(horasTrabajadasInput.value) || 0;
            var horasExtrasValue = parseFloat(horasExtrasInput.value) || 0;
            var porcentajeStringValue = porcentajeInput.value.trim(); // Remove leading/trailing spaces
            var porcentajeValue = parseFloat(porcentajeStringValue) || 0;

            // Multiplico el valor por las horas
            var resultTrabajadas = horasTrabajadasValue * 10000;
            var resultExtras = horasExtrasValue * 10000;

            // Actualizo los campos totales de extras y trbajadas por el resultado de las operaciones
            valorHorastrabajadasInput.value = formatCurrency(resultTrabajadas);
            valorHorasextrasInput.value = formatCurrency(resultExtras);

            // sumo las dos multiplicaciones
            var totalBeforePercentage = resultTrabajadas + resultExtras;

            // divido el numero de porcentaje ingreado en 100 y lo resto al total
            var totalAfterPercentage = totalBeforePercentage - (totalBeforePercentage * (porcentajeValue / 100));

            // actualizo el campo automaticamente con el resultado de la suma y resta
            valorTotalInput.value = formatCurrency(totalAfterPercentage);
        }

        // Evalua el nùmero como moneda
        function formatCurrency(amount) {
            return new Intl.NumberFormat('es-CO', {
                style: 'currency',
                currency: 'COP'
            }).format(amount);
        }
    });
</script>
>>>>>>> 040f034ec117eed931e3ed09cb21f35ec7582fc8
@endsection
