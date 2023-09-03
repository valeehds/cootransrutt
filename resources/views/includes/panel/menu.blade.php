  <!-- Heading -->
  <style>
    .btn{
      font-weight: normal;
    }
  </style>
  <h6 font-family: Arial, sans-serif; class="navbar-heading text-muted">Panel Usuarios</h6>
<ul class="navbar-nav">
    <li class="nav-item">
    <a class="nav-link" href="{{ route('mantenimiento.index') }}">
  <i class="far fa-eye text-primary"></i> Mantenimientos
</a>
  </li>

    <li class="nav-item">
    <a class="nav-link" href="{{ route('personas.index')}}">
  <i class="far fa-eye text-primary"></i> Personas
</a>
  </li>

    <li class="nav-item">
    <a class="nav-link" href="{{ route('nomina.index') }}">
  <i class="far fa-eye text-primary"></i> Nóminas
</a>
  </li>
    <li class="nav-item">
      <a class="nav-link " href=" {{ route('rotacion.index') }}">
        <i class="far fa-eye text-success"></i>Rotaciones
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link " href="{{ route('despachos.index') }}">
        <i class="far fa-eye text-success"></i> Despachos
      </a>
    </li>
  </ul>
  <li class="nav-item">
      <a class="nav-link " href="{{ route('vehiculos.index') }}">
        <i class="far fa-eye text-success"></i> Vehiculos
      </a>
    </li>
  </ul>
  <!-- Divider -->
  <hr class="my-3">
  <!-- Heading -->
  <h6 class="navbar-heading text-muted">Panel exámenes</h6>
  <!-- Navigation -->
  <ul class="navbar-nav mb-md-3">
    <li class="nav-item">
      <a class="nav-link" href="{{url('/')}}">
        <i class=" far fa-eye	text-warning"></i>info
      </a>
    </li>
  </ul>