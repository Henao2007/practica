<?php
    $alerta = "";
 if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $nombre  = $_POST["name"] ?? "";
        $correo  = $_POST["email"] ?? "";
        $mensaje = $_POST["mesaje"] ?? "";

    if ($nombre && $correo && $mensaje) {
        $alerta = "Datos enviados correctamente";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form method="post">
        <input type="text" name="name" placeholder="Nombre: " required>
        <input type="text" name="email" placeholder="Correo: " required>
        <input type="text" name="mesaje" placeholder="Mensaje: " required>

        <button type="submit">Enviar</button>
    </form>

    <?php if ($alerta): ?>
        <p><?= $alerta ?></p>
    <?php endif; ?>
</body>
</html>