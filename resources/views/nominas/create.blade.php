@extends('layouts.panel')
@section('content')
<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">Agregar Registro de Nóminas</h3>
            </div>
        </div>
    </div>
    <div class="card-body">
        <form action="{{ route('nomina.store') }}" method="POST" class="needs-validation" novalidate>
            @csrf
            <div class="form-group">
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
                <label for="horasTrabajadas">Horas</label>
<<<<<<< HEAD
                <input type="text" class="form-control" name="horasTrabajadas" id="horasTrabajadas" required>
=======
                <input type="number" class="form-control" name="horasTrabajadas" id="horasTrabajadas" required>
>>>>>>> 040f034ec117eed931e3ed09cb21f35ec7582fc8
                <div class="invalid-feedback">Por favor ingrese la cantidad de horas trabajadas</div>
            </div>
            <div class="form-group">
                <label for="horasExtras">Horas Extras</label>
<<<<<<< HEAD
                <input type="text" class="form-control" name="horasExtras" id="horasExtras" required>
=======
                <input type="Number" class="form-control" name="horasExtras" id="horasExtras" required>
>>>>>>> 040f034ec117eed931e3ed09cb21f35ec7582fc8
                <div class="invalid-feedback">Por favor ingrese la cantidad de horas extras.</div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="fechaInicio">Inicio</label>
                        <input type="date" class="form-control" name="fechaInicio" id="fechaInicio" required>
                        <div class="invalid-feedback">Por favor ingrese la fecha de inicio de la nómina.</div>
<<<<<<< HEAD
=======
                        @if($errors->has('fechaAsignacion'))
                <div class="alert alert-danger">
                    {{$errors->first('fechaInicio')}}
                </div>
                @endif
>>>>>>> 040f034ec117eed931e3ed09cb21f35ec7582fc8
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
<<<<<<< HEAD
                        <label for="fechaFin">Fin</label>
                        <input type="date" class="form-control" name="fechaFin" id="fechaFin" required>
                        <div class="invalid-feedback">Por favor ingrese la fecha fin de la nómina.</div>
=======
                        <label for="fechaFin">Fecha Fin</label>
                        <input type="date" class="form-control" name="fechaFin" id="fechaFin" required>
                        <div class="invalid-feedback">Por favor ingrese la fecha fin de la nómina.</div>
                        @if($errors->has('fechaFin'))
                <div class="alert alert-danger">
                    {{$errors->first('fechaFin')}}
                </div>
                @endif
>>>>>>> 040f034ec117eed931e3ed09cb21f35ec7582fc8
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
<<<<<<< HEAD
                        <label for="valorHorastrabajadas">Valor Horas</label>
=======
                        <label for="valorHorastrabajadas">Valor Horas Trabajadas</label>
>>>>>>> 040f034ec117eed931e3ed09cb21f35ec7582fc8
                        <input type="text" class="form-control" name="valorHorastrabajadas" id="valorHorastrabajadas" required>
                        <div class="invalid-feedback">Por favor ingrese el valor de las horas trabajadas.</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
<<<<<<< HEAD
                        <label for="valorHorasextras">Valor Extras</label>
=======
                        <label for="valorHorasextras">Valor Horas Extras</label>
>>>>>>> 040f034ec117eed931e3ed09cb21f35ec7582fc8
                        <input type="text" class="form-control" name="valorHorasextras" id="valorHorasextras" required>
                        <div class="invalid-feedback">Por favor ingrese el valor de las horas extras.</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="porcenta">Porcentaje</label>
                        <input type="text" class="form-control" name="porcenta" id="porcenta" required>
                        <div class="invalid-feedback">Por favor ingrese el porcentaje de descuento.</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="totalPago">Total</label>
                        <input type="text" class="form-control" name="totalPago" id="totalPago" required>
                        <div class="invalid-feedback">Por favor ingrese el valor total.</div>
                    </div>
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
