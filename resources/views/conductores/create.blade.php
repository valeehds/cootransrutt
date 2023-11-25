@extends('layouts.base')

@section('title', 'Agregar mantenimiento')

@section('content')
<style>
    .container {
        padding-top: 1px;
        max-width: 900px;
        margin: 0 auto;
        margin-top: 50px;
        margin-bottom: -70px;
    }

    label {
        display: block;
        width: 100%;
        margin-bottom: 5px;
        color: rgb(135, 135, 135);
        text-align: left;
    }

    input {
        width: calc(100% - -16px);
        padding: 5px;
        margin-bottom: 15px;
        border-radius: 4px;
        border: none;
        outline: none;
        resize: vertical;
        background-color: #F1F1F1;
        font-size: 14px;
        color: #A39F9F;
    }

    .select1 {
        width: calc(100% - -16px);
        padding: 8px;
        margin-bottom: 15px;
        border-radius: 4px;
        border: none;
        outline: none;
        resize: vertical;
        background-color: #F1F1F1;
        font-size: 14px;
        color: #A39F9F;
    }

    button[type="submit"] {
        padding: 6px 20px;
        background-color: #838383;
        border-radius: 15px;
        color: #fff;
        cursor: pointer;
        display: block;
        margin: -10px auto;
        text-decoration: none;
        font-size: 16px;
        font-size: 13px;
        border: none;
        outline: none;
        margin-top:15px;
    }

    .title-section {
        text-align: center;
    }

    .btn-create {
        display: block;
        margin: 10px auto;
        text-align: right;
        outline: none;
    }

    .required::after {
        content: "*";
        color: red;
        margin-left: 4px;
    }
</style>

<div class="container">
    <div class="title-section">
        <h2>Agregar mantenimiento</h2>
        <div class="text-right">
            <a href="{{ route('mantenimiento.index') }}" class="btn btn-primary btn-create">
                Listado <i class="fas fa-arrow-left"></i>
            </a>
        </div>
    </div>

    <form action="{{ route('mantenimiento.store') }}" method="POST" class="needs-validation" novalidate>
        @csrf

        <div class="row">
            <div class="col-md-6">
                <label for="idv" class="form-label required">Vehículo</label>
                <select class="select1" name="idv" id="idv" required>
                    <option value="" disabled selected>Seleccione un vehículo</option>
                    @foreach ($vehiculos as $veh)
                        <option value="{{$veh->idVehiculo}}">{{$veh->numPlaca}}</option>
                    @endforeach
                </select>
                <div class="invalid-feedback">Por favor seleccione un vehículo.</div>
            </div>

            <div class="col-md-6">
                <label for="fechaMantenimiento" class="form-label required">Fecha de Mantenimiento</label>
                <input type="date" class="" name="fechaMantenimiento" id="fechaMantenimiento" required>
                <div class="invalid-feedback">Por favor ingrese la fecha de mantenimiento.</div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <label for="observaciones" class="form-label required">Observaciones</label>
                <input type="text" class="" name="observaciones" id="observaciones" required>
                <div class="invalid-feedback">Por favor ingrese las observaciones.</div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <label for="valorManoobra" class="form-label required">Costo de Mano de Obra</label>
                <input type="text" class="" name="valorManoobra" id="valorManoobra" required>
                <div class="invalid-feedback">Por favor ingrese el costo de mano de obra.</div>
            </div>

            <div class="col-md-4">
                <label for="valorPiezas" class="form-label required">Costo de Piezas</label>
                <input type="text" class="" name="valorPiezas" id="valorPiezas" required>
                <div class="invalid-feedback">Por favor ingrese el costo de piezas.</div>
            </div>

            <div class="col-md-4">
                <label for="valorTotal" class="form-label required">Costo Total</label>
                <input type="text" class="" name="valorTotal" id="valorTotal" required>
                <div class="invalid-feedback">Por favor ingrese el costo total.</div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <label for="fotoFactura" class="form-label required">Comprobante (Foto)</label>
                <input type="file" class="factura" name="fotoFactura" id="fotoFactura" required>
                <div class="invalid-feedback">Por favor seleccione un archivo.</div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary btn-block">Guardar mantenimiento</button>
    </form>
</div>
@endsection
