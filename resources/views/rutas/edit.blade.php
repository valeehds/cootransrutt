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
             <form action="{{ route('ruta.update', $rutas->idRuta) }}" method="PUT">
            @csrf
            @method('PUT')
            <div class="form-group">
    <label for="idDespacho">Despacho</label>
    <select class="form-control" name="idDespacho" id="idDespacho" required>
        <option value="" disabled>Seleccione un despacho</option>
        @foreach ($despachos as $des)
            <option value="{{ $des->idDespacho }}" @if($des->idDespacho === $rutas->idDespacho) selected @endif>{{ $des->nombre }}</option>
        @endforeach
    </select>
    <div class="invalid-feedback">Por favor seleccione un despacho.</div>
</div>

            <div class="form-group">
                <label for="tiempoEstimado">Tiempo estimado</label>
                <input type="text" name="tiempoEstimado" id="tiempoEstimado" class="form-control" value="{{ $rutas->tiempoEstimado}}">
            </div>

            <div class="form-group">
                <label for="valorTiquete">Valor tiquete</label>
                <input type="text" name="valorTiquete" id="valorTiquete" class="form-control" value="{{ $rutas->valorTiquete}}">
            </div>

            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
</div>
@endsection
