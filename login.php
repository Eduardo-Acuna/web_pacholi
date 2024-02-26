<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">

                <h1>Inicio de sesión</h1>

                <ul class="nav nav-tabs">
                    <li class="active"><a href="#login" data-toggle="tab">Iniciar sesión</a></li>
                    <li><a href="#registro" data-toggle="tab">Registrarse</a></li>
                </ul>

                <div class="tab-content">
                    <div id="login" class="tab-pane fade in active">
                        <form action="validar.php" method="post">
                            <label for="cedula">Cédula:</label>
                            <input type="text" id="cedula" name="cedula" required>
                            <br>
                            <label for="contrasena">Contraseña:</label>
                            <input type="password" id="contrasena" name="contrasena" required>
                            <br><br>
                            <button type="submit">Iniciar sesión</button>
                        </form>
                    </div>

                    <div id="registro" class="tab-pane fade">
                        <form action="registrar.php" method="post">
                            <label for="nombre_apellido_usuario">Nombre y Apellido: </label>
                            <input type="text" id="nombre_apellido_usuario" name="nombre_apellido_usuario" placeholder="Nombre y apellido"required>
                            <br>
                            <label for="cedula">Cédula:</label>
                            <input type="text" id="cedula" name="cedula" placeholder="Nro de C.I." required>
                            <br>
                            <label for="contrasena">Contraseña:</label>
                            <input type="password" id="contrasena" name="contrasena" placeholder="Contraseña" required>

                            <br>
                            <label for="email">Email:</label>
                            <input type="text" id="email" name="email" placeholder="Correo electronico" required>

                            <br>
                            <label for="telefono">Telefono: </label>
                            <input type="text" id="telefono" name="telefono" placeholder="nro de telefono" required>


                            <input type="hidden" name="id_centro" value="456">

                            <br><br>
                            <button type="submit">Registrarse</button>
                        </form>
                    </div>
                </div>

            
            </div>
        </div>
    </div>                
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
