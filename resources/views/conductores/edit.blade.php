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
                            {{ $veh->idVehiculo }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="fechaMantenimiento">Fecha</label>
                <input type="date" class="form-control" name="fechaMantenimiento" id="fechaMantenimiento" value="{{ $mantenimiento->fechaMantenimiento }}">
            </div>

            <div class="form-group">
                <label for="observaciones">Observaciones</label>
                <input type="text" class="form-control" name="observaciones" id="observaciones" value="{{ $mantenimiento->observaciones }}">
            </div>

            <div class="form-group">
                <label for="valorManoobra">Costo Obra</label>
                <input type="text" class="form-control" name="valorManoobra" id="valorManoobra" value="{{ $mantenimiento->valorManoobra }}">
            </div>

            <div class="form-group">
                <label for="valorPiezas">Costo Piezas</label>
                <input type="text" class="form-control" name="valorPiezas" id="valorPiezas" value="{{ $mantenimiento->valorPiezas }}">
            </div>

            <div class="form-group">
                <label for="valorTotal">Total</label>
                <input type="text" class="form-control" name="valorTotal" id="valorTotal" value="{{ $mantenimiento->valorTotal }}">
            </div>

            <div class="form-group">
                <label for="fotoFactura">Comprobante</label>
                <input type="text" class="form-control" name="fotoFactura" id="fotoFactura" value="{{ $mantenimiento->fotoFactura }}">
            </div>

            <button type="submit" class="btn btn-sm btn-primary">Actualizar</button>
        </form>
    </div>
</div>
@endsection
