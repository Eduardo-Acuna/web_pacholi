<?php

// Conexión a la base de datos
include "vars.php";

$con = new mysqli($host, $user, $password, $database, $port);

// Obtener datos del formulario
$cedula = $_POST["cedula"];
$contrasena = $_POST["contrasena"];

// Validar usuario
$sql = "SELECT * FROM usuario WHERE cedula = '$cedula' AND contrasena = '$contrasena'";
$result = $con->query($sql);

if ($result->num_rows === 1) {
    // Usuario encontrado
    session_start();
    $_SESSION["usuario"] = $cedula;
    header("Location: inicio_usuario.php");
} else {
    // Usuario no encontrado
    echo "<p>Usuario o contraseña incorrectos.</p>";
    echo "<a href='login.php'>Volver a intentar</a>";
}

$con->close();

?>
