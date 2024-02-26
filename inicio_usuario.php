
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
                <hr>
                <form method="POST" action="agregar_cliente.php">
                    <input type="text" name="cedula" placeholder="CI">
                    <input type="text" name="nombre_cliente" placeholder="Nombre ">
                    <input type="text" name="apellido_cliente" placeholder="Apellido">
                    <input type="text" name="direccion" placeholder="Direccion">
                    <input type="text" name="telefono" placeholder="Telefono">
                    <input type="text" name="email" placeholder="Email">
                    <input type="hidden" name="id_usario" value="456">

                    <button type="submit" class="btn btn-success">Guardar</button>
                </form>
</body>
</html>

<?php
    include "vars.php";
    $conexion = new mysqli($host,$user,$password,$database,$port);


    $consulta = "SELECT * FROM cliente;";
    $result_set = $conexion->query($consulta);



    if($result_set->num_rows >= 0){
        echo "<table class='table table-light'>";
        echo "<tr><td>NRO CEDULA</td> <td>CLIENTE</td> <td>DIRECCIÓN</td> <td>TELEFONO</td> <td>EMAIL</td> <td>CAJERO</td> <td>OPCION</td></tr>";

        while($f = $result_set->fetch_assoc()){
            echo "<tr>";
                echo "<td>".$f['cedula']."</td>";
                echo "<td>".$f['nombre_cliente']." " .$f['apellido_cliente']."</td>";
                echo "<td>".$f['direccion']."</td>";
                echo "<td>".$f['telefono']."</td>";
                echo "<td>".$f['email']."</td>";
                echo "<td>".$f['id_usuario']."</td>";
                echo "<td><button>✏️ Editar</button><button>⛔ Eliminar</button></td>";
            echo "</tr>";
        }
    }

?>