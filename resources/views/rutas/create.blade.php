@extends('layouts.panel')
@section('content')
<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">Agregar Registro de Rutas</h3>
            </div>
        </div>
    </div>
    <div class="card-body">
        <form action="{{ route('ruta.store') }}" method="POST" class="needs-validation" novalidate enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="idDespacho">Despacho</label>
                <select class="form-control" name="idDespacho" id="idDespacho" required>
                    <option value="" disabled selected>Seleccione un despacho</option>
                    @foreach ($despachos as $des)
                        <option value="{{ $des->idDespacho }}">{{ $des->nombre }}</option>
                    @endforeach
                </select>
                <div class="invalid-feedback">Por favor seleccione un despacho.</div>
            </div>
            <div class="form-group">
                <label for="tiempoEstimado">Tiempo estimado</label>
                <input type="text" class="form-control" name="tiempoEstimado" id="tiempoEstimado" required>
                <div class="invalid-feedback">Por favor ingrese el valor estimado.</div>
            </div>
            <div class="form-group">
                <label for="valorTiquete">Valor tiquete</label>
                <input type="text" class="form-control" name="valorTiquete" id="valorTiquete" required>
                <div class="invalid-feedback">Por favor ingrese el valor del tiquete.</div>
            </div>
            <div class="form-group">
                <label for="Imagen">Imagen</label>
                <input type="file" class="form-control" name="Imagen" id="Imagen" required>
                <div class="invalid-feedback">Por favor cargue la imagen de la ruta.</div>
            </div>
            
            <!-- Add a field for the Google Maps link -->
            <div class="form-group">
                <label for="google_maps_link">Google Maps Link</label>
                <input type="text" class="form-control" name="google_maps_link" id="google_maps_link" required>
                <div class="invalid-feedback">Por favor ingrese el enlace de Google Maps.</div>
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
@endsection
