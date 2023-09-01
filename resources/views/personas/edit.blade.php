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
        <form action="{{ route('persona.update', $personas->idPersona) }}" method="PUT">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="cargo">Cargo</label>
                <select name="cargo" id="cargo" class="form-control">
                    <option value="Conductor" {{ $personas->cargo === 'Conductor' ? 'selected' : '' }}>Conductor</option>
                    <option value="Secretarìa" {{ $personas->cargo === 'Secretarìa' ? 'selected' : '' }}>Secretarìa</option>
                    <option value="Talento Humano" {{ $personas->cargo === 'Talento Humano' ? 'selected' : '' }}>Talento Humano</option>
                    <option value="Àrea Administrativa" {{ $personas->cargo === 'Àrea Administrativa' ? 'selected' : '' }}>Área Administrativa</option>
                    <option value="Àrea Financiera" {{ $personas->cargo === 'Àrea Financiera' ? 'selected' : '' }}>Área Financiera</option>
                </select>
            </div>

            <div class="form-group">
                <label for="nombrePersona">Nombre</label>
                <input type="text" name="nombrePersona" id="nombrePersona" class="form-control" value="{{ $personas->nombrePersona }}">
            </div>

            <div class="form-group">
                <label for="apellidoPersona">Apellido</label>
                <input type="text" name="apellidoPersona" id="apellidoPersona" class="form-control" value="{{ $personas->apellidoPersona }}">
            </div>

            <div class="form-group">
                <label for="documentoPersona">No. Documento</label>
                <input type="text" name="documentoPersona" id="documentoPersona" class="form-control" value="{{ $personas->documentoPersona }}">
            </div>

            <div class="form-group">
            <label for="tipoDoc">Tipo Documento</label>
            <select name="tipoDoc" id="tipoDoc" class="form-control">
                <option value="C" {{ $personas->tipoDoc === 'Cèdula' ? 'selected' : '' }}>Cèdula</option>
                <option value="T.I" {{ $personas->tipoDoc === 'Tarjeta de Identidad' ? 'selected' : '' }}>Tarjeta de Identidad</option>
            </select>
           
            </div>


            <div class="form-group">
                <label for="numLicencia">No. Licencia</label>
                <input type="text" name="numLicencia" id="numLicencia" class="form-control" value="{{ $personas->numLicencia }}">
            </div>

            <div class="form-group">
                <label for="fechaNacimiento">Fecha Nacimiento</label>
                <input type="date" name="fechaNacimiento" id="fechaNacimiento" class="form-control" value="{{ $personas->fechaNacimiento }}">
            </div>

            <div class="form-group">
                <label for="fechaAfiliacion">Fecha Afiliacion</label>
                <input type="date" name="fechaAfiliacion" id="fechaAfiliacion" class="form-control" value="{{ $personas->fechaAfiliacion }}">
            </div>

            <div class="form-group">
                <label for="estado">Estado</label>
                <select name="estado" id="estado" class="form-control">
                    <option value="Activo" {{ $personas->estado === 'Activo' ? 'selected' : '' }}>Activo</option>
                    <option value="Inactivo" {{ $personas->estado === 'Inactivo' ? 'selected' : '' }}>Inactivo</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
</div>
@endsection
