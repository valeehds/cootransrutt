@extends('layouts.panel')
@section('content')
@extends('layouts.panel')
@section('content')
<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">Agregar Registro de Nòminas</h3>
            </div>
        </div>
    </div>
    <div class="card-body">
        <form action="{{route('nomina.store')}}" method="POST" class="needs-validation" novalidate>
            @csrf
            <div class="form-group">
                <label for="idv">Vehículo</label>
                <select class="form-control" name="idv" id="idv" required>
                    <option value="" disabled selected>Seleccione una Persona</option>
                    @foreach ($personas as $per)
                        <option value="{{$per->idPersona}}">{{$per->idPersona}}</option>
                    @endforeach
                </select>
                <div class="invalid-feedback">Por favor seleccione una Persona.</div>
            </div>
            <div class="form-group">
                <label for="horasTrabajadas">Horas</label>
                <input type="date" class="form-control" name="horasTrabajadas" id="horasTrabajadas" required>
                <div class="invalid-feedback">Por favor ingrese la cantidad de horas trabajadas</div>
            </div>
            <div class="form-group">
                <label for="horasExtras">Horas Extras</label>
                <input type="text" class="form-control" name="horasExtras" id="horasExtras" required>
                <div class="invalid-feedback">Por favor ingrese la cantidad de horas extras.</div>
            </div>
            <div class="row">

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="fechaInicio">Inicio</label>
                        <input type="text" class="form-control" name="fechaInicio" id="fechaInicio" required>
                        <div class="invalid-feedback">Por favor ingrese la fecha de inicio de la nòmina.</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="fechaFin">Fin</label>
                        <input type="text" class="form-control" name="fechaFin" id="fechaFin" required>
                        <div class="invalid-feedback">Por favor ingrese la fecha fin de la nòmina.</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="valorTotal">Total</label>
                        <input type="text" class="form-control" name="valorTotal" id="valorTotal" required>
                        <div class="invalid-feedback">Por favor ingrese el valor total.</div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <form action="{{ route('archivo.upload') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="fotoFactura">Comprobante</label>
                    <input type="file" class="form-control-file" name="fotoFactura" id="fotoFactura" required>
                    <div class="invalid-feedback">Por favor seleccione un archivo.</div>
                    <button class="btn btn-primary mt-3" type="submit">Subir Comprobante</button>
                </form>
            </div>
            <button class="btn btn-primary mt-3" type="submit">Enviar</button>
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
@endsection

@endsection