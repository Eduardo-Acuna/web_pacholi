<?php

if ($_POST) {
    include "vars.php";

    $conexion = new mysqli($host,$user,$password,$database,$port);

    $cedula = $_POST["cedula"];
    $nombre_cliente = $_POST["nombre_cliente"];
    $apellido_cliente = $_POST["apellido_cliente"];
    $direccion = $_POST["direccion"];
    $telefono = $_POST["telefono"];
    $email = $_POST["email"];

    $sql = "INSERT INTO Cliente (cedula ,nombre_cliente, apellido_cliente, direccion, telefono, email) 
        VALUES ('$cedula', '$nombre_cliente', '$apellido_cliente', '$direccion', '$telefono', '$email')";

    $conexion->query($sql);
    mysqli_close($conexion);
}
header("Location: inicio_usuario.php");
exit;
?>