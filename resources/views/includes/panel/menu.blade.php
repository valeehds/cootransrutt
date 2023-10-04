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
    <a class="nav-link" href="{{ route('vehiculo.index') }}">
  <i class="far fa-eye text-primary"></i> Vehículos
</a>
  </li>

    <li class="nav-item">
    <a class="nav-link" href="{{ route('persona.index')}}">
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
      <a class="nav-link " href="{{ route('despacho.index') }}">
        <i class="far fa-eye text-success"></i> Despachos
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link " href="{{ route('ruta.index') }}">
        <i class="far fa-eye text-success"></i> Rutas
      </a>
    </li>
  </ul>
  <!-- Divider -->
  <hr class="my-3">
  <!-- Heading -->
  <h6 class="navbar-heading text-muted">Panel exámenes</h6>
  <!-- Navigation -->
 
    