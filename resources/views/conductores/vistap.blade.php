@extends('layouts.panel')

@section('content')
  <!-- Heading -->
  <style>
    .btn{
      font-weight: normal;
    }
  </style>
  <h6  class="navbar-heading text-muted">Panel Usuarios</h6>
    <li class="nav-item">
    <a class="nav-link" href="{{ route('persona.index') }}">
  <i class="far fa-eye text-primary"></i> Personas
</a>
  </li>

    <li class="nav-item">
    <a class="nav-link" href="{{ route('persona.index') }}">
  <i class="far fa-eye text-primary"></i> Nòminas
</a>
  </li>
    <li class="nav-item">
      <a class="nav-link " href=" {{ route('rutas.index') }}">
        <i class="far fa-eye text-success"></i>Rutas
      </a>
    </li>
  </ul>
  <!-- Divider -->
  <hr class="my-3">
  <!-- Heading -->
  <h1 class="navbar-heading text-muted">e4xsrdcftgyhhtr546t78gyhoiuytf6rd5erf6gt7hy</h1>
  <!-- Navigation -->
  <ul class="navbar-nav mb-md-3">
    <li class="nav-item">
      <a class="nav-link" href="{{url('/')}}">
        <i class=" far fa-eye	text-warning"></i>info
      </a>
    </li>
  </ul>
@endsection
