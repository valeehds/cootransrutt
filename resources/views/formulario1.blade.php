<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cootransrut | Inicia sesión</title>
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
            background-color: white; 
        }

        .login-form {
            background-color: #ffffff;
            padding: 50px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
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
            margin-bottom: 15px;
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
            margin-bottom: 15px;
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
          height: 30%;
          width: 30%
        }

    </style>
</head>
<body>
    <div id="map-container">
        <!-- Reemplazar la ubicación del mapa con una imagen -->
        <img src="img\brand\cootranscol.webp" alt="Imagen" style="width: 100%; height: 100%;">
    </div>
    <div id="login-container">
        <div class="login-form">
            <div class="text-center mb-4">
                <!-- Cabecera con el logotipo de la empresa -->
                <h1>COOTRANSRUT</h1>
                <img src="http://localhost/cootransrut/public/img/brand/logocootranascol.jpeg" alt="Logo de la empresa" width="200">
            </div>
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

                <button type="submit" class="btn btn-success btn-lg btn-block my-4">Siguiente</button>
            </form>
        </div>
    </div>
</body>
</html>
