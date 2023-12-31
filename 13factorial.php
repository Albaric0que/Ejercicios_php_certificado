<!-- Escribe un programa que calcule el factorial de un número entero leído por teclado. -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Factorial</title>
</head>
<body>

<h2>Calculadora de Factorial</h2>

<form action="" method="post">
    <label for="numero">Introduce un número entero:</label>
    <input type="text" name="numero" id="numero">
    <input type="submit" value="Calcular Factorial">
</form>

<?php
function calcularFactorial($n) {
    if ($n == 0 || $n == 1) {
        return 1;
    } else {
        return $n * calcularFactorial($n - 1);
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = isset($_POST['numero']) ? intval($_POST['numero']) : 0;

    if ($numero >= 0) {
        $factorial = calcularFactorial($numero);

        echo "<p>El factorial de {$numero} es: {$factorial}</p>";
    } else {
        echo "<p>Por favor, introduce un número entero no negativo.</p>";
    }
}
?>

</body>
</html>
