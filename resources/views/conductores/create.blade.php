@extends('layouts.panel')
@section('content')
<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">Agregar Mantenimiento</h3>
            </div>
        </div>
    </div>
    <div class="card-body">
        <form action="{{route('mantenimiento.store')}}" method="POST" class="needs-validation" novalidate>
            @csrf
            <div class="form-group">
                <label for="idv">Vehículo</label>
                <select class="form-control" name="idv" id="idv" required>
                    <option value="" disabled selected>Seleccione un vehículo</option>
                    @foreach ($vehiculos as $veh)
                        <option value="{{$veh->idVehiculo}}">{{$veh->numPlaca}}</option>
                    @endforeach
                </select>
                <div class="invalid-feedback">Por favor seleccione un vehículo.</div>
            </div>
            <div class="form-group">
                <label for="fechaMantenimiento">Fecha</label>
                <input type="date" class="form-control" name="fechaMantenimiento" id="fechaMantenimiento" required>
                <div class="invalid-feedback">Por favor ingrese la fecha.</div>
                @if($errors->has('fechaMantenimiento'))
                <div class="alert alert-danger">
                    {{$errors->first('fechaMantenimiento')}}
                </div>
                @endif
            </div>
            <div class="form-group">
                <label for="observaciones">Observaciones</label>
                <input type="text" class="form-control" name="observaciones" id="observaciones" required>
                <div class="invalid-feedback">Por favor ingrese las observaciones.</div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="valorManoobra">Costo Obra</label>
                        <input type="text" class="form-control calcular-total currency-input" pattern="^\d{1,3}(,\d{3})*(\.\d{2})?$" name="valorManoobra" id="valorManoobra" required>
                        <div class="invalid-feedback">Por favor ingrese un costo de obra válido.</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="valorPiezas">Costo Piezas</label>
                        <input type="text" class="form-control calcular-total currency-input" pattern="^\d{1,3}(,\d{3})*(\.\d{2})?$" name="valorPiezas" id="valorPiezas" required>
                        <div class="invalid-feedback">Por favor ingrese un costo de piezas válido.</div>
                    </div>
                </div>
                <div class="col-md-4">
                <div class="form-group">
                    <label for="valorTotal">Total</label>
                    <input type="text" class="form-control" pattern="^\d{1,3}(,\d{3})*(\.\d{2})?$" name="valorTotal" id="valorTotal" value="0.00" readonly required>
                    <div class="invalid-feedback">Por favor ingrese el valor total.</div>
                </div>
                </div>
            </div>
            <div class="form-group">
                <label for="fotoFactura">Comprobante</label>
                <input type="file" class="form-control-file" name="fotoFactura" id="fotoFactura" required>
                <div class="invalid-feedback">Por favor seleccione un archivo.</div>
            </div>
            <button class="btn btn-block btn-success mt-3" type="submit">Subir Comprobante</button>
        </form>
    </div>
    <div class="card-footer">
        <div class="row align-items-center justify-content-between">
            <div class="col-md-6">
                <p class="text-muted mb-0">&copy; 2023 <a href="#" class="font-weight-bold">{{ config('app.name')}}</a></p>
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

<script>
    //llamo los atributos
    document.addEventListener('DOMContentLoaded', function () {
        console.log("JavaScript loaded");

        const calcularTotal = function () {
            const costoObra = parseFloat(document.getElementById('valorManoobra').value.replace(/[$,]/g, '')) || 0;
            const costoPiezas = parseFloat(document.getElementById('valorPiezas').value.replace(/[$,]/g, '')) || 0;
            const total = costoObra + costoPiezas;
    //sumo el costo obra con el costo piezas
            document.getElementById('valorTotal').value = total.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,');
        };
    //llamo la funcion de escucha para que tome el valor de la suma
        
        const calcularTotalFields = document.querySelectorAll('.calcular-total');
        calcularTotalFields.forEach(function (field) {
            field.addEventListener('input', calcularTotal);
        });

    //evalua y formatea el valor en moneda
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
