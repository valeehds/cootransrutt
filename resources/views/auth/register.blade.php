<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cootransrut | Registrate</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href="http://localhost/cootransrut/public/img/brand/logocootranascol.jpeg" rel="icon" type="image/png">
      <!-- Icons -->
  <link href=" {{ asset('js/plugins/nucleo/css/nucleo.css')}} " rel="stylesheet" />
  <link href=" {{ asset('js/plugins/@fortawesome/fontawesome-free/css/all.min.css')}} " rel="stylesheet" />
  <!-- CSS Files -->
  <link href=" {{ asset('css/argon-dashboard.css?v=1.1.2')}} " rel="stylesheet" />
    <style>
        /* Estilos CSS personalizados aquí */
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
            border-bottom: 1px solid #ccc; /* Línea de borde inferior */
            border-radius: 0; /* Remover el radio de borde */
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
          height: 20%;
          width: 20%
        }

        /* Estilo para colocar nombre y apellido en la misma fila */
        .name-and-lastname {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px; /* Espacio entre los campos de nombre y apellido */
        }

        .name-and-lastname input {
            width: 48%; 
        }

        /* Estilo para los campos de contraseña y confirmación de contraseña */
        .password-fields {
            display: flex;
            justify-content: space-between;
        }

        /* Estilo para los campos de contraseña y confirmación de contraseña */
        .password-fields input {
            width: 48%; 
        }

    </style>
</head>
<body>
    <div id="map-container">
        <!-- Aquí puedes agregar el mapa de Google Maps -->
        <!-- Por ejemplo: -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3971.2881769278138!2d-73.36409022631605!3d5.524191033971437!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e6a7dd053b09533%3A0x579688d814c54a12!2sCootranscol%20Tunja!5e0!3m2!1ses!2sco!4v1693700944795!5m2!1ses!2sco" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div id="login-container">

        <div class="login-form">
        <div class="text-center mb-4">
            <!-- Cabecera con el logotipo de la empresa -->
            <h1>COOTRANSRUT
              <img src="http://localhost/cootransrut/public/img/brand/logocootranascol.jpeg" alt="Logo de la empresa" width="200">
            </h1>
        </div>
        <form role="form" method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                <div class="input-group input-group-alternative mb-3">
                  <div class="input-group-prepend">
                  </div>
                    <select id="rol" name="rol" class="form-control" value="{{ old('rol') }}" required autofocus>
                        <option value="">Selecciona tu rol</option>
                        <option value="Gerencia">Gerencia</option>
                        <option value="Secretaria">Secretaria</option>
                        <option value="Tesoreria">Tesoreria</option>
                        <option value="Talento humano">Talento humano</option>
                        <option value="Propietarios">Propietarios</option>
                        <option value="Conductores">Conductores</option>
                    </select>
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
            <div class=""> 
                <a class="register" href="{{ route('login') }}">Iniciar sesión</a>
            </div>
        </div>
    </div>
</body>
</html>