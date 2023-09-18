@extends('layouts.panel')
@section('content')
<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">Agregar Registro</h3>
            </div>
        </div>
    </div>
    <div class="card-body">
        <form action="{{ route('persona.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="cargo">Cargo</label>
                <select name="cargo" id="cargo" class="form-control">
                <option value="Conductor">Conductor</option>
                <option value="Secretarìa">Secretarìa</option>
                <option value="Talento Humano">Talento Humano</option>
                <option value="Àrea Administrativa">Area Administrativa</option>
                <option value="Àrea Financiera">Area Financiera</option>
            </select>
            </div>
            <div class="form-group">
                <label for="nombrePersona">Nombre</label>
                <input type="text" name="nombrePersona" id="nombrePersona" class="form-control">
            </div>
            <div class="form-group">
                <label for="apellidoPersona">Apellido</label>
                <input type="text" name="apellidoPersona" id="apellidoPersona" class="form-control">
            </div>
            <div class="form-group">
                <label for="documentoPersona">No. Documento</label>
                <input type="text" name="documentoPersona" id="documentoPersona" class="form-control">
            </div>
            <div class="form-group">
            <label for="tipoDoc">Tipo documento</label>
            <select name="tipoDoc" id="tipoDoc" class="form-control">
                <option value="C">Cédula</option>
                <option value="T.I">Tarjeta de Identidad</option>
            </select>
           </div>

            <div class="form-group">
                <label for="numLicencia">No. Licencia</label>
                <input type="text" name="numLicencia" id="numLicencia" class="form-control">
            </div>
            <div class="form-group">
                <label for="fechaNacimiento">Fecha Nacimiento</label>
                <input type="date" name="fechaNacimiento" id="fechaNacimiento" class="form-control">
            </div>
            <div class="form-group">
                <label for="fechaAfiliacion">Fecha Afiliacion</label>
                <input type="date" name="fechaAfiliacion" id="fechaAfiliacion" class="form-control">
            </div>
            <div class="form-group">
                <label for="estado">Estado</label>
                <select name="estado" id="estado" class="form-control">
                    <option value="Activo">Activo</option>
                    <option value="Inactivo">Inactivo</option>
                </select>
            </div>

            <button class="btn btn-primary">Enviar</button>
        </form>
    </div>
</div>
@endsection
