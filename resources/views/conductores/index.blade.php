@extends('layouts.base')

@section('title', 'Listado de mantenimientos')

@section('content')
<style>
    .container {
            padding-top: 1px;
            margin: 0 auto;
            margin-top:50px;
            padding-left: 30px;
            padding-right: 30px;
    }
    .pagination {
        display: flex;
        justify-content: left;
        margin-top: -20px;
    }

    .vehicle-list {
        width: 100%;
        margin-top: 20px;
        border-collapse: separate;
        border-spacing: 0 5px;
        background-color: white;
        font-size: 0.9rem;
    }

    .vehicle-list th,
    .vehicle-list td {
        padding: 8px 30px;
        color: rgb(135, 135, 135);
        text-align: left;
        border: none;
        background-color: white;
        text-align: center;
        border-bottom: 1px solid rgb(197, 183, 183);
        font-size: 12px;
    }
</style>
<div class="container">
        @if(session('success'))
        <div class="alert alert-success" style="font-size:13px;">
            {{ session('success') }}
        </div>
        @endif
        @if(session('error'))
            <div class="alert alert-danger" style="font-size:13px;">
                {{ session('error') }}
            </div>
        @endif
        <div class="title-section">
            <h2>Listado de mantenimientos</h2>
            <a href="{{ route('mantenimiento.create') }}" class="btn btn-primary btn-create">Nuevo mantenimiento</a>
        </div>
        <div class="search-bar">
            <input type="text" placeholder="Buscar mantenimiento..." class="search-input">
        </div>
        <table class="vehicle-list table-responsive">
            <thead>
                <tr>
                    <th>Vehículo</th>
                    <th>Fecha mantenimiento</th>
                    <th>Observaciones</th>
                    <th>Costo Obra</th>
                    <th>Costo Piezas</th>
                    <th>Total</th>
                    <th>Comprobante</th>
                    <th class="text-center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse($mantenimientos as $fila)
                <tr>
                    <td>{{$fila->numPlaca}}</td>
                    <td>{{$fila->fechaMantenimiento}}</td>
                    <td>{{$fila->observaciones}}</td>
                    <td>{{$fila->valorManoobra}}</td>
                    <td>{{$fila->valorPiezas}}</td>
                    <td>{{$fila->valorTotal}}</td>
                    <td>
                        <a href="" target="_blank" class="editar">Descargar</a>
                    </td>
                    <td class="text-center">
                        <div class="d-flex justify-content-center">
                            <a href="{{route('mantenimiento.edit',$fila->idMantenimiento)}}" class="editar mr-2">Editar</a>
                            <a href="{{route('mantenimiento.destroy',$fila->idMantenimiento)}}" class="eliminar" onclick="return confirm('¿Estás seguro de eliminar el registro?')">Eliminar</a>
                        </div>
                    </td>
                </tr>
                @empty
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="pagination">
            {{ $mantenimientos->links() }}
        </div>
</div>
@endsection
