<!-- calculadora.php -->
<?php
    $numero1 = $_POST['num1'] ?? '';
    $numero2 = $_POST['num2'] ?? '';
    $operacion = $_POST['operacion'] ?? '';
    $resultado = '';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        if($operacion == "+"){
            $resultado = $numero1 + $numero2;
        }else if($operacion == "-"){
            $resultado = $numero1 - $numero2;
        }else if($operacion == "*"){
            $resultado = $numero1 * $numero2;
        }else if($operacion == "/"){
            $resultado = ($numero2 == 0) ? "Error: división por cero" : $numero1 / $numero2;
        }
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora PHP</title>
</head>
<body>
    <h1>Calculadora</h1>

    <form method="post">
        <input type="number" name="num1" placeholder="Número 1">
        <input type="number" name="num2" placeholder="Número 2">

        <select name="operacion">
            <option value="+">Sumar</option>
            <option value="-">Restar</option>
            <option value="*">Multiplicar</option>
            <option value="/">Dividir</option>
        </select>

        <button type="submit">Calcular</button>
    </form>

    <?php
        echo "<h2> $numero1 $operacion $numero2 = $resultado </h2>";
    ?>
    
</body>
</html>
