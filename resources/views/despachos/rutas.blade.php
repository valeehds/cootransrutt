@extends('layouts.panel')
@section('content')
    <div class="card shadow">
        <div class="card-header border-0">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="mb-0">Rutas y Recorridos</h3>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table align-items-center table-flush">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">Código</th>
                        <th scope="col">Duración</th>
                        <th scope="col">Valor Tiquete</th>
                        <th scope="col" class="text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($rutas as $fila)
                        <tr>
                            <td>{{ $fila->idRuta }}</td>
                            <td>{{ $fila->tiempoEstimado }}</td>
                            <td>{{ $fila->valorTiquete }}</td>
                            <td class="text-center">
                                <a href="" class="btn btn-sm btn-warning">Editar</a>
                                <a href="" class="btn btn-sm btn-danger"
                                    onclick="return confirm('¿Estás seguro de eliminar el registro?')">Eliminar</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4">No hay rutas disponibles.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            <table class="table align-items-center table-flush">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">Código</th>
                        <th scope="col">Rotación</th>
                        <th scope="col">No. Pasajeros</th>
                        <th scope="col">Inicio</th>
                        <th scope="col">Fin</th>
                        <th scope="col" class="text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($recorridos as $fila)
                        <tr>
                            <td>{{ $fila->idRecorrido }}</td>
                            <td>{{ $fila->numPasajeros }}</td>
                            <td>{{ $fila->fechaHorainicio }}</td>
                            <td>{{ $fila->fechaHorafin }}</td>
                            <td class="text-center">
                                <a href="" class="btn btn-sm btn-warning">Editar</a>
                                <a href="" class="btn btn-sm btn-danger"
                                    onclick="return confirm('¿Estás seguro de eliminar el registro?')">Eliminar</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6">No hay recorridos disponibles.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    <footer class="footer">
        <div class="row align-items-center justify-content-xl-between">
            <div class="col-xl-6">
                <div class="text-center text-xl-left text-muted">
                    &copy; 2023 <a href="#" class="font-weight-bold ml-1">{{ config('app.name') }}</a>
                </div>
            </div>
            <div class="col-xl-6">
                <ul class="nav justify-content-center justify-content-xl-end">
                    <li class="nav-item">
                        <a href="#" class="nav-link">¿Quiénes somos?</a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
@endsection
