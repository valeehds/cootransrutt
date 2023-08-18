@extends('layouts.panel')
@section('content')


<div class="card shadow">
        <div class="card-header border-0">
          <div class="row align-items-center">
            <div class="col">
              <h3 class="mb-0">Mantenimientos</h3>
              <div class="container">
              <form action="{{route('mantenimiento.store')}}" method="POST">
        @csrf
        <div>
            <label for="idv">Vehiculos</label>
            <select name="idv" id="idv">
                <option value=""></option>
                @foreach ($vehiculos as $veh)
                    <option value="{{$veh->idVehiculo}}">{{$veh->idVehiculo}}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="fechaMantenimiento">Fecha</label>
            <input type="date" name="fechaMantenimiento" id="fechaMantenimiento">
            <label for="observaciones">Observaciones</label>
            <input type="text" name="observaciones" id="observaciones">
            <label for="valorManoobra">Costo Obra</label>
            <input type="text" name="valorManoobra" id="valorManoobra">
            <label for="valorPiezas">Costo Piezas</label>
            <input type="text" name="valorPiezas" id="valorPiezas">
            <label for="valorTotal">Total</label>
            <input type="text" name="valorTotal" id="valorTotal">
            <label for="fotoFactura">Comprobante</label>
            <input type="text" name="fotoFactura" id="fotoFactura">
        </div>
        <button>Enviar</button>
    </form>
</div>
            </div>
      <footer class="footer">
        <div class="row align-items-center justify-content-xl-between">
          <div class="col-xl-6">
            <div class="copyright text-center text-xl-left text-muted">
              &copy; 2023 <a href="#" class="font-weight-bold ml-1">{{ config('app.name')}}</a>
            </div>
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