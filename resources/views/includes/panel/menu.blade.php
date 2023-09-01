  <!-- Heading -->
  <style>
    .btn{
      font-weight: normal;
    }
  </style>
  <h6 font-family: Arial, sans-serif; class="navbar-heading text-muted">Panel Usuarios</h6>
  <div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownRoles" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Selecciona un rol
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownRoles">
      <a class="dropdown-item" href="#">Administrador</a>
      <a class="dropdown-item" href="#">Usuario Normal</a>
      <a class="dropdown-item" href="#">Invitado</a>
      <!-- Agrega más roles según tus necesidades -->
    </div>
  </div>
<ul class="navbar-nav">
    <li class="nav-item">
    <a class="nav-link" href="{{ route('mantenimiento.info') }}">
  <i class="far fa-eye text-primary"></i> Mantenimiento
</a>
  </li>

    <li class="nav-item">
    <a class="nav-link" href="{{ route('persona.index') }}">
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