  <!-- Heading -->
  <style>
    .btn{
      font-weight: normal;
    }
  </style>
  <h6 font-family: Arial, sans-serif; class="navbar-heading text-muted">Panel Usuarios</h6>
<ul class="navbar-nav">
    <li class="nav-item">
    <a class="nav-link" href="{{ route('mantenimiento.info') }}">
  <i class="far fa-eye text-primary"></i> Mantenimiento
</a>
  </li>

    <li class="nav-item">
    <a class="nav-link" href="{{ route('personas.index')}}">
  <i class="far fa-eye text-primary"></i> Personas
</a>
  </li>

    <li class="nav-item">
    <a class="nav-link" href="{{ route('nomina.index') }}">
  <i class="far fa-eye text-primary"></i> Nòminas
</a>
  </li>
    <li class="nav-item">
      <a class="nav-link " href=" {{ route('rutas.index') }}">
        <i class="far fa-eye text-success"></i>Rutas
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link " href="">
        <i class="far fa-eye text-success"></i> Despachos
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