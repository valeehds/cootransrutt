@extends('layouts.panel')
@section('content')
<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">Crear nuevo despacho</h3>
            </div>
        </div>
    </div>
    <div class="card-body">
        <form action="{{route('despacho.store')}}" method="POST" class="needs-validation" novalidate>
            @csrf
           
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" name="nombre" id="nombre" required>
                <div class="invalid-feedback">Por favor ingrese el nombre del despacho.</div>
            </div>
            <div class="form-group">
                <label for="direccion">Direcciòn</label>
                <input type="text" class="form-control" name="direccion" id="direccion" required>
                <div class="invalid-feedback">Por favor ingrese la direcciòn.</div>
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
