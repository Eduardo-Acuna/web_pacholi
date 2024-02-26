<?php

// Conexión a la base de datos
$host = "localhost";
$user = "root";
$password = "";
$database = "nbd_pacholi";
$port = 3306;

$con = new mysqli($host, $user, $password, $database, $port);

// Obtener datos del formulario
$id_local = $_POST["local"];
$contrasena = $_POST["contrasena"];

// Validar usuario
$sql = "SELECT * FROM centro WHERE id = '$id_local' AND contrasena = '$contrasena'";
$result = $con->query($sql);

if ($result->num_rows === 1) {
    // Usuario encontrado
    session_start();
    $_SESSION["local"] = $id_local;
    header("Location: login.php");
} else {
    // Usuario no encontrado
    echo "<p>Usuario o contraseña incorrectos.</p>";
    echo "<a href='index.php'>Volver a intentar</a>";
}

$con->close();

?>
