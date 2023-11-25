<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    {{ config('app.name')}}
  </title>
  <!-- Favicon -->
  <link href="http://localhost/cootransrut/public/img/brand/logocootranascol.jpeg" rel="icon" type="image/png">
  <!-- Fonts -->
  <!-- Icons -->
  <link href=" {{ asset('js/plugins/nucleo/css/nucleo.css')}}" rel="stylesheet" />
  <link href=" {{ asset('js/plugins/@fortawesome/fontawesome-free/css/all.min.css')}} " rel="stylesheet" />
  <!-- CSS Files -->
  <link href="{{ asset('css/argon-dashboard.css?v=1.1.2')}}" rel="stylesheet" />
</head>
<style>
  .vh-100{ padding-top: 120px;
  }
</style>
<body class="">
  <div class="container-fluid">
    <div class="row justify-content-center align-items-center vh-100">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header text-align-center">Completa los campos faltantes para continuar</div>
          <div class="card-body">
            <form method="POST" action="">
              @csrf
              <!-- Tu formulario aquí -->
              <div class="form-group">
                <div class="input-group input-group-alternative mb-3">
                  <select id="tipoDoc" name="tipoDoc" class="form-control" autofocus required>
                    <option value="">Tipo de documento</option>
                    <option value="Cédula de ciudadanía">Cédula de ciudadanía</option>
                    <option value="Cédula de extranjería">Cédula de extranjería</option>
                    <option value="Pasaporte">Pasaporte</option>
                    <option value="Número de identificación tributaria">Número de identificación tributaria</option>
                  </select>
                </div>
              </div>

              <div class="form-group">
                <input type="text" name="documento" id="documento" class="form-control" placeholder="Número de documento" required>
              </div>

              <div class="form-group">
                <label for="">Fecha de nacimiento</label>
                <input type="date" name="fechaNacimiento" id="fechaNacimiento" max="{{ \Carbon\Carbon::now()->subYears(18)->format('Y-m-d') }}" required>
              </div>

              <button type="submit" class="btn btn-primary">Siguiente</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--   Core   -->
  <script src="{{asset('js/plugins/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <!--   Optional JS   -->
  <script src="{{asset('js/plugins/chart.js/dist/Chart.min.js')}}"></script>
  <script src="{{asset('js/plugins/chart.js/dist/Chart.extension.js')}}"></script>
  <!--   Argon JS   -->
  <script src="{{asset('js/argon-dashboard.min.js?v=1.1.2')}}"></script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-dashboard-free"
      });
  </script>
</body>

</html>
