<?php
   $precioDolar = 4000;
   $conversionPeso = 0;
   $dolarEnviado = $_POST["dolar"];

   $conversionPeso = $precioDolar * $dolarEnviado;

   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversion</title>
</head>
<body>

    <form method="post">
        <input type="number" placeholder="Cantidad dolares: " name="dolar" required>
        <input type="number" placeholder="Resultado:" value="<?php echo"$conversionPeso" ?>" readonly>
        <button type="submit">Convertir</button>
    </form>

    
    
</body>
</html>