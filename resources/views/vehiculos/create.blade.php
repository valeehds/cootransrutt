@extends('layouts.base')

@section('title', 'Creación vehículos')

@section('content')
    <style>
        .container {
            padding-top: 1px;
            max-width: 900px;
            margin: 0 auto;
            margin-top:50px;
            margin-bottom: -20px;
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
            padding: 7px;
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
            outline:none;
        }

        .title-section {
            text-align: center;
        }

        .btn-create {
            display: block;
            margin: 10px auto;
            text-align: right;
            outline:none;
        }

        .required::after {
            content: "*";
            color: red;
            margin-left: 4px;
        }
    </style>

<div class="container">
        <div class="title-section">
            <h2>Crear nuevo vehículo</h2>
            <div class="text-right">
            <a href="{{ route('vehiculo.index') }}" class="btn btn-primary btn-create">Listado
            <i class="fas fa-arrow-left"></i>
            </a>
            </div>
        </div>
        
        <form action="{{ route('vehiculo.store') }}" method="POST" class="needs-validation" novalidate>
            @csrf

            <div class="row mb-3">
                <div class="col-md-4">
                    <label for="idUsuario" class="form-label required">Persona</label>
                    <select class="select1" name="idUsuario" id="idUsuario" required>
                        <option value="" disabled selected>Seleccione una persona</option>
                        @foreach ($personas as $per)
                            <option value="{{ $per->id }}">{{ $per->name }} {{ $per->apellido }}</option>
                        @endforeach
                    </select>
                    <div class="invalid-feedback">Por favor seleccione una Persona.</div>
                </div>

                <div class="col-md-4">
                    <label for="numPlaca" class="form-label required">Placa</label>
                    <input type="text" class="" name="numPlaca" id="numPlaca" required>
                </div>

                <div class="col-md-4">
                    <label for="estado" class="form-label required">Estado</label>
                    <select class="select1" name="estado" id="estado" required>
                        <option value="">Selecciona el estado</option>
                        <option value="Activo">Activo</option>
                        <option value="Inactivo">Inactivo</option>
                    </select>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4">
                    <label for="marca" class="form-label required">Marca</label>
                    <input type="text" class="" name="marca" id="marca" required>
                </div>

                <div class="col-md-4">
                    <label for="modeloVehiculo" class="form-label required">Modelo</label>
                    <input type="text" class="" name="modeloVehiculo" id="modeloVehiculo" required>
                </div>

                <div class="col-md-4">
                    <label for="capacidadPasajeros" class="form-label required">Capacidad</label>
                    <input type="text" class="" name="capacidadPasajeros" id="capacidadPasajeros" required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4">
                    <label for="codigoUt" class="form-label required">Código UT</label>
                    <input type="text" class="" name="codigoUt" id="codigoUt" required>
                </div>
            </div>

            <button type="submit" class="btn btn-primary btn-block">Enviar</button>
        </form>
    </div>
@endsection
