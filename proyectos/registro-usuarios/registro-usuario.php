<?php
    $nombreIngresado = $_POST["nombre"];
    $apellidoIngresado = $_POST["apellido"];

    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Usuarios</title>
</head>
<body>
    <form method="post">
        <center>
            <label>Ingrese los datos: </label> <br> <br>
            <input type="text" placeholder="Nombre..." name="nombre"> <br> <br>
            <input type="text" placeholder="Apellido..." name="apellido"> <br> <br>
            <button type="submit">Registrar</button>
        </center>
    </form>
    <?php
     echo "Hola, ",$nombreIngresado, " ",$apellidoIngresado;
     exit();

    
     ?>
    
</body>

</html>