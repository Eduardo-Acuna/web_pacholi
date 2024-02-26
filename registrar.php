<?php

// Conexión a la base de datos
$host = "localhost";
$user = "root";
$password = "";
$database = "nbd_pacholi";
$port = 3306;

$conectar = new mysqli($host, $user, $password, $database,$port);

// Obtener datos del formulario
$nombre_apellido = $_POST["nombre_apellido_usuario"];
$cedula = $_POST["cedula"];
$contrasena = $_POST["contrasena"];
$email = $_POST["email"];
$telefono = $_POST["telefono"];
$id_centro = $_POST["id_centro"];

// Validar que la cédula no esté registrada
$sql = "SELECT * FROM Usuario WHERE cedula = '$cedula'";
$result = $conectar->query($sql);

if ($result->num_rows === 0) {
    // Registrar usuario
    $sql = "INSERT INTO usuario (cedula, nombre_apellido_usuario, contrasena, email, telefono, id_centro) VALUES ('$cedula','$nombre_apellido', '$contrasena','$email','$telefono','$id_centro')";
    $conectar->query($sql);

    echo "<p>Usuario registrado exitosamente.</p>";
    echo "<a href='login.php'>Iniciar sesión</a>";
} else {
    // La cédula ya está registrada
    echo "<p>La cédula ya está registrada.</p>";
    echo "<a href='login.php'>Volver a intentar</a>";
}

$conectar->close();

?>
