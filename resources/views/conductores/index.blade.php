@extends('layouts.panel')
@section('content')
<div class="card shadow">
        <div class="card-header border-0">
          <div class="row align-items-center">
            <div class="col">
              <h3 class="mb-0">Mantenimientos</h3>
              <table class="table">
                    <tr>
                        <th>Codigo</th>
                        <th>Vehiculo</th>
                        <th>Fecha</th>
                        <th>Observaciones</th>
                        <th>Costo Obra</th>
                        <th>Costo piezas</th>
                        <th>Total</th>
                        <th>Comprobante</th>
                    </tr>
                    @forelse($mantenimientos as $fila)
                    <tr>
                        <td>{{$fila->idMantenimiento}}</td>
                        <td>{{$fila->idVehiculo}}</td>
                        <td>{{$fila->fechaMantenimiento}}</td>
                        <td>{{$fila->observaciones}}</td>
                        <td>{{$fila->valorManoobra}}</td>
                        <td>{{$fila->valorPiezas}}</td>
                        <td>{{$fila->valorTotal}}</td>
                        <td>{{$fila->fotoFactura}}</td>
                        
                    </tr>
                    @empty
                    @endforelse
                </table>
            </div>
      <footer class="footer">
        <div class="row align-items-center justify-content-xl-between">
          <div class="col-xl-6">
            <div class="copyright text-center text-xl-left text-muted">
              &copy; 2023 <a href="#" class="font-weight-bold ml-1">{{ config('app.name')}}</a>
            </div>
            <a href="{{route('mantenimiento.create')}}"><button class="btn-agregar">Agregar</button></a>
            <a href=""><button class="">Editar</button></a>
            <a href=""><button class="">Eliminar</button></a>
          </div>

          <div class="col-xl-6">
            
            <ul class="nav nav-footer justify-content-center justify-content-xl-end">
              
              <li class="nav-item">
                <a href="#" class="nav-link">¿Quiénes somos?</a>
              </li>
            </ul>
          </div>
        </div>
        
      </footer>
    </div>
  </div>
  @endsection
