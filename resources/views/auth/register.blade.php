<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cootransrut | Registrate</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href="http://localhost/cootransrut/public/img/brand/logocootranascol.jpeg" rel="icon" type="image/png">

    <link href="{{ asset('js/plugins/nucleo/css/nucleo.css') }}" rel="stylesheet" />
    <link href="{{ asset('js/plugins/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/argon-dashboard.css?v=1.1.2') }}" rel="stylesheet" />
    <style>
        body {
            display: flex;
            flex-direction: row;
            margin: 0;
            padding: 0;
        }

        #map-container,
        #login-container {
            width: 50%;
            height: 100vh;
        }

        #map {
            width: 100%;
            height: 100%;
        }

        #login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            background-color: #58E173; 
        }

        .login-form {
            background-color: #ffffff;
            padding: 50px;
            box-shadow: 0px 0px 2px rgba(0, 0, 0, 0.2);
            border-radius: 7px;
            max-width: 400px;
            width: 80%;
            text-align: center;
        }

        .login-form h1 {
            font-size: 20px;
        }

        .login-form input[type="text"],
        .login-form input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .login-form button {
            background-color: #048028; 
            color: #fff;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
            height: 50px;
        }

        .login-form button:hover {
            background-color: #c82333; 
        }

        .custom-control{
          text-align: left;
        }

        .login-form input[type="text"],
        .login-form input[type="password"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-bottom: 1px solid #ccc; 
            border-radius: 0;
            outline: none;
        }
        .register a{
          text-align: right;
          color: #EF300A;
        }
        .register a:hover {
          color: #048028;
        }

        .restablecimiento {
          text-align: left;
        }
        .restablecimiento a{
        }
        img {
          height: 15%;
          width: 15%
        }

        .name-and-lastname {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px; 
        }

        .name-and-lastname input {
            width: 48%; 
        }
        
        .password-fields {
            display: flex;
            justify-content: space-between;
        }
        .password-fields input {
            width: 48%; 
        }
        .input-group-text {
          font-size:14px;
        }
        .form-group{
          font-size:13px;
        }

        .form-control:focus {
            border-color: none;
            box-shadow: none;
        }
    </style>
</head>
<body>
    <div id="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3971.2881769278138!2d-73.36409022631605!3d5.524191033971437!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e6a7dd053b09533%3A0x579688d814c54a12!2sCootranscol%20Tunja!5e0!3m2!1ses!2sco!4v1693700944795!5m2!1ses!2sco" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div id="login-container">

        <div class="login-form">
        <div class="text-center mb-4">
            <h1>COOTRANSRUT
              <img src="http://localhost/cootransrut/public/img/brand/logocootranascol.jpeg" alt="Logo de la empresa" width="200">
            </h1>
        </div>

        <form role="form" method="POST" action="{{ route('register') }}">
                @csrf

                <div class="row">
                  <div class="col-md-6">
                      <div class="form-group">
                          <select id="rol" name="rol" class="form-control" value="{{ old('rol') }}" required autofocus>
                              <option value="">Seleccione un cargo</option>
                              <option value="Gerencia">Gerencia</option>
                              <option value="Secretaria">Secretaria</option>
                              <option value="Tesoreria">Tesoreria</option>
                              <option value="Talento humano">Talento humano</option>
                              <option value="Propietarios">Propietarios</option>
                              <option value="Conductores">Conductores</option>
                          </select>
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="form-group" id="licencia-container" style="display: none;">
                          <input class="form-control" placeholder="Licencia" type="text" name="numLicencia" id="numLicencia">
                      </div>
                  </div>
              </div>


              <div class="form-group">
                  <div class="row">
                      <div class="col-md-6">
                          <select id="tipoDoc" name="tipoDoc" class="form-control" autofocus required>
                              <option value="">T.D.</option>
                              <option value="Cédula de ciudadanía">Cédula de ciudadanía</option>
                              <option value="Cédula de extranjería">Cédula de extranjería</option>
                              <option value="Pasaporte">Pasaporte</option>
                              <option value="Número de identificación tributaria">Número de identificación tributaria</option>
                          </select>
                      </div>
                      <div class="col-md-6">
                          <input type="text" name="documento" id="documento" class="form-control" placeholder="Documento" required>
                      </div>
                  </div>
              </div>

              <div class="form-group">
              <label for="fechaNacimiento" class="text-muted">Fecha de Nacimiento</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                    </div>
                    <label for="fechaNacimiento" class="sr-only">Fecha de Nacimiento</label>
                    <input type="date" name="fechaNacimiento" id="fechaNacimiento" class="form-control" max="{{ \Carbon\Carbon::now()->subYears(18)->format('Y-m-d') }}" required>
                </div>
            </div>

              <div class="form-group name-and-lastname">
                <div class="input-group-alternative">
                  <input class="form-control" placeholder="Nombre" type="text"  name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                </div>
                <div class="input-group-alternative">
                  <input class="form-control" placeholder="Apellido" type="text"  name="apellido" value="{{ old('apellido') }}" required autocomplete="apellido" autofocus>
                </div>
              </div>

              <div class="form-group">
                <div class="input-group-alternative mb-3">
                  <input class="form-control" placeholder="Correo electrónico" type="email" name="email" value="{{ old('email') }}" required autocomplete="email">
                </div>
              </div>

              <div class="form-group password-fields">
                <div class="input-group-alternative">
                  <input class="form-control" placeholder="Contraseña" type="password"  name="password" required autocomplete="new-password" value="{{ old('password') }}">
                </div>
                <div class="input-group-alternative">
                  <input class="form-control" placeholder="Repetir contraseña" type="password" name="password_confirmation" required autocomplete="new-password" value="{{ old('password_confirmation') }}">
                </div>
              </div>
              
              <div class="text-center">
                <button type="submit" class="btn btn-danger btn-lg btn-block my-4">Registrarse</button>
              </div>
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const rolSelect = document.getElementById('rol');
            const licenciaContainer = document.getElementById('licencia-container');

            rolSelect.addEventListener('change', function() {
                if (this.value === 'Conductores') {
                    licenciaContainer.style.display = 'block';
                } else {
                    licenciaContainer.style.display = 'none';
                }
            });
        });
    </script>
</body>
</html>