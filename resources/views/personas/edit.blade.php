@extends('layouts.panel')
@section('content')
<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">Actualizar usuarios</h3>
            </div>
        </div>
    </div>
    <div class="card-body">
        <form action="{{ route('persona.update', $personas->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="rol">Rol</label>
                        <select id="rol" name="rol" class="form-control" required autofocus>
                            <option value="">Selecciona el rol</option>
                            <option value="Gerencia" {{ $personas->rol === 'Gerencia' ? 'selected' : '' }}>Gerencia</option>
                            <option value="Secretaria" {{ $personas->rol === 'Secretaria' ? 'selected' : '' }}>Secretaria</option>
                            <option value="Tesoreria" {{ $personas->rol === 'Tesoreria' ? 'selected' : '' }}>Tesoreria</option>
                            <option value="Talento humano" {{ $personas->rol === 'Talento humano' ? 'selected' : '' }}>Talento humano</option>
                            <option value="Propietarios" {{ $personas->rol === 'Propietarios' ? 'selected' : '' }}>Propietarios</option>
                            <option value="Conductores" {{ $personas->rol === 'Conductores' ? 'selected' : '' }}>Conductores</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="numLicencia">No. Licencia</label>
                        <input type="text" name="numLicencia" id="numLicencia" class="form-control" value="{{ $personas->numLicencia }}">
                    </div>
                </div>
            </div>
              <div class="form-row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ $personas->name }}" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="apellido">Apellido</label>
                        <input type="text" name="apellido" id="apellido" class="form-control" value="{{ $personas->apellido }}" required>
                    </div>
                </div>
            </div>
            
            <div class="form-row">
                <div class="col-md-6">
                        <div class="form-group">
                            <label for="tipoDoc">Tipo de Documento</label>
                            <select id="tipoDoc" name="tipoDoc" class="form-control" autofocus required>
                                <option value="">Tipo de documento</option>
                                <option value="Cédula de ciudadanía" {{ $personas->tipoDoc === 'Cédula de ciudadanía' ? 'selected' : '' }}>Cédula de ciudadanía</option>
                                <option value="Cédula de extranjería" {{ $personas->tipoDoc === 'Cédula de extranjería' ? 'selected' : '' }}>Cédula de extranjería</option>
                                <option value="Pasaporte" {{ $personas->tipoDoc === 'Pasaporte' ? 'selected' : '' }}>Pasaporte</option>
                                <option value="Número de identificación tributaria" {{ $personas->tipoDoc === 'Número de identificación tributaria' ? 'selected' : '' }}>Número de identificación tributaria</option>
                            </select>
                        </div>
                    </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="documento">No. Documento</label>
                        <input type="text" name="documento" id="documento" class="form-control" value="{{ $personas->documento }}" required>
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="fechaNacimiento">Fecha Nacimiento</label>
                        <input type="date" name="fechaNacimiento" id="fechaNacimiento" class="form-control" value="{{ $personas->fechaNacimiento }}"required>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="fechaAfiliacion">Fecha Afiliacion</label>
                        <input type="date" name="fechaAfiliacion" id="fechaAfiliacion" class="form-control" value="{{ $personas->fechaAfiliacion }}"required>
                    </div>
                </div>
            </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" class="form-control" value="{{ $personas->email }}" required>
                    </div>


            <div class="form-group">
                <label for="estado">Estado</label>
                <select name="estado" id="estado" class="form-control" required>
                    <option value="">Selecciona el estado</option>
                    <option value="Activo" {{ $personas->estado === 'Activo' ? 'selected' : '' }}>Activo</option>
                    <option value="Inactivo" {{ $personas->estado === 'Inactivo' ? 'selected' : '' }}>Inactivo</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
</div>
@endsection
