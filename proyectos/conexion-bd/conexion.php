<?php
$server = "localhost";
$user = "root";
$pass = "";
$bd = "registros";


$conexion = new mysqli($server, $user, $pass, $bd);


if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>

