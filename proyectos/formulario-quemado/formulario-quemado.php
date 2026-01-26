<?php
$usuario = "Stiven";
$contraseña = "Stiven123";



if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $usuarioIngresado = $_POST["usuarioI"];
    $contraseñaIngresada = $_POST["contraseñaI"];

    if ($usuario == $usuarioIngresado && $contraseña == $contraseñaIngresada) {
        header("Location: bienvenida.html");
        exit();
    } else {
        
        echo("ERROR");
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulario Quemado</title>
</head>
<body>

<h1 style="text-align:center;">Login</h1>

<center>
<form method="post">
    <input type="text" placeholder="Usuario" name="usuarioI"><br><br>
    <input type="password" placeholder="Contraseña" name="contraseñaI"><br><br>
    <button type="submit">Ingresar</button>
</form>
</center>

</body>
</html>
