@extends('layouts.base')

@section('title', 'Actualización vehículos')

@section('content')
    <style>
        /* Estilos para hacer el formulario responsivo */
        .container {
            padding-top: 1px;
            max-width: 900px;
            margin: 0 auto;
            margin-top: 50px;
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
            <h2>Actualizar registro vehículos</h2>
            <div class="text-right">
                <a href="{{ route('vehiculo.index') }}" class="btn btn-primary btn-create">Listado <i class="fas fa-arrow-left"></i></a>
            </div>
        </div>

        <form action="{{ route('vehiculo.update', $vehiculo->idVehiculo) }}" method="PUT">
            @csrf
            @method('PUT')

            <div class="row mb-3">
                <div class="col-md-4">
                    <label for="id" class="form-label required">Persona</label>
                    <select class="select1" name="idUsuario" id="idUsuario" required>
                        <option value="" disabled selected>Seleccione una persona</option>
                        @foreach ($personas as $persona)
                            <option value="{{ $persona->id }}" {{ $persona->id === $vehiculo->idUsuario ? 'selected' : '' }}>
                                {{ $persona->name }} {{ $persona->apellido }}
                            </option>
                        @endforeach
                    </select>
                    <div class="invalid-feedback">Por favor seleccione una Persona.</div>
                </div>

                <div class="col-md-4">
                    <label for="numPlaca" class="form-label required">Placa</label>
                    <input type="text" class="" name="numPlaca" id="numPlaca" required value="{{ $vehiculo->numPlaca}}" readonly>
                </div>

                <div class="col-md-4">
                    <label for="estado" class="form-label required">Estado</label>
                    <select name="estado" id="estado" class="select1" required>
                    <option value="">Selecciona el estado</option>
                    <option value="Activo" {{ $vehiculo->estado === 'Activo' ? 'selected' : '' }}>Activo</option>
                    <option value="Inactivo" {{ $vehiculo->estado === 'Inactivo' ? 'selected' : '' }}>Inactivo</option>
                </select>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4">
                    <label for="marca" class="form-label required">Marca</label>
                    <input type="text" class="" name="marca" id="marca" required value="{{ $vehiculo->marca}}">
                </div>

                <div class="col-md-4">
                    <label for="modeloVehiculo" class="form-label required">Modelo</label>
                    <input type="text" class="" name="modeloVehiculo" id="modeloVehiculo" required value="{{ $vehiculo->modeloVehiculo}}">
                </div>

                <div class="col-md-4">
                    <label for="capacidadPasajeros" class="form-label required">Capacidad</label>
                    <input type="text" class="" name="capacidadPasajeros" id="capacidadPasajeros" required value="{{ $vehiculo->capacidadPasajeros}}" readonly>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4">
                    <label for="codigoUt" class="form-label required">Código UT</label>
                    <input type="text" class="" name="codigoUt" id="codigoUt" required value="{{ $vehiculo->codigoUt}}">
                </div>
            </div>

            <button type="submit" class="btn btn-primary btn-block">Enviar</button>
        </form>
    </div>
@endsection
