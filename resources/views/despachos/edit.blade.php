@extends('layouts.panel')

@section('content')
<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">Editar Despacho</h3>
            </div>
        </div>
    </div>
    <div class="card-body">
        <form action="{{ route('despacho.update', $despachos->idDespacho) }}" method="PUT">
            @csrf
            @method('PUT')


            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" name="nombre" id="nombre" value="{{ $despachos->nombre }}">
            </div>

            <div class="form-group">
                <label for="direccion">Direcciòn</label>
                <input type="text" class="form-control" name="direccion" id="direccion" value="{{ $despachos->direccion }}">
            </div>

            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
</div>
@endsection
