<?php
 include("conexion.php");

 $nombre = $_POST["nombre"];
 $apellido = $_POST["apellido"];
 $edad = $_POST["edad"];

 $sql = "INSERT INTO usuarios (nombre, apellido, edad) VALUES ('$nombre', '$apellido', '$edad')";

 if(mysqli_query($conexion, $sql)){
        echo "Registro exitoso..";
    }else{
        echo "Error en el registro..";
    }

    mysqli_close($conexion);

?>

