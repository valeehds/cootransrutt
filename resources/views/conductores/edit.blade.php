@extends('layouts.panel')

@section('content')
<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">Editar Mantenimiento</h3>
            </div>
        </div>
    </div>
    <div class="card-body">
        <form action="{{ route('mantenimiento.update', $mantenimiento->idMantenimiento) }}" method="PUT">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="idv">Vehículo</label>
                <select class="form-control" name="idv" id="idv" required>
                    <option value=""></option>
                    @foreach ($vehiculos as $veh)
                        <option value="{{ $veh->idVehiculo }}" {{ $veh->idVehiculo == $mantenimiento->idVehiculo ? 'selected' : '' }}>
                            {{ $veh->numPlaca }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="fechaMantenimiento">Fecha</label>
                <input type="date" class="form-control" name="fechaMantenimiento" id="fechaMantenimiento" value="{{ $mantenimiento->fechaMantenimiento }}">
                @if($errors->has('fechaMantenimiento'))
                    <div class="alert alert-danger">
                        {{ $errors->first('fechaMantenimiento') }}
                    </div>
                @endif
            </div>

            <div class="form-group">
                <label for="observaciones">Observaciones</label>
                <input type="text" class="form-control" name="observaciones" id="observaciones" value="{{ $mantenimiento->observaciones }}">
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="valorManoobra">Costo Obra</label>
                        <input type="text" class="form-control calcular-total currency-input" name="valorManoobra" id="valorManoobra" value="{{ $mantenimiento->valorManoobra }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="valorPiezas">Costo Piezas</label>
                        <input type="text" class="form-control calcular-total currency-input"  name="valorPiezas" id="valorPiezas" value="{{ $mantenimiento->valorPiezas }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="valorTotal">Total</label>
                        <input type="text" class="form-control" name="valorTotal" id="valorTotal" value="{{ $mantenimiento->valorTotal }}">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="fotoFactura">Comprobante</label>
                <input type="text" class="form-control" name="fotoFactura" id="fotoFactura" value="{{ $mantenimiento->fotoFactura }}">
            </div>

            <button type="submit" class="btn btn-sm btn-primary">Actualizar</button>
        </form>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        console.log("JavaScript loaded");

        const calcularTotal = function () {
            const costoObra = parseFloat(document.getElementById('valorManoobra').value.replace(/[$,]/g, '')) || 0;
            const costoPiezas = parseFloat(document.getElementById('valorPiezas').value.replace(/[$,]/g, '')) || 0;
            const total = costoObra + costoPiezas;

            document.getElementById('valorTotal').value = total.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,');
        };

        const calcularTotalFields = document.querySelectorAll('.calcular-total');
        calcularTotalFields.forEach(function (field) {
            field.addEventListener('input', calcularTotal);
        });

        
        const currencyInputFields = document.querySelectorAll('.currency-input');
        currencyInputFields.forEach(function (field) {
            field.addEventListener('input', function (event) {
                const value = event.target.value.replace(/\D/g, '').replace(/\B(?=(\d{3})+(?!\d))/g, ',');
                event.target.value = value === '' ? '' : '$' + value;
            });
        });
    });
</script>
@endsection
