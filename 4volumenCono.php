<!-- Escribe un programa que calcule el volumen de un cono mediante la fórmula V=13
π⋅r2 -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Volumen de Cono</title>
</head>
<body>

<h2>Calculadora de Volumen de Cono</h2>

<form action="" method="post">
    <label for="radio">Radio de la base:</label>
    <input type="text" name="radio" id="radio">
    <br>
    <label for="altura">Altura del cono:</label>
    <input type="text" name="altura" id="altura">
    <br>
    <input type="submit" value="Calcular Volumen">
</form>

<?php
function calcularVolumenCono($radio, $altura) {
    $volumen = (1/3) * M_PI * $radio**2 * $altura;
    return $volumen;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $radio = isset($_POST['radio']) ? floatval($_POST['radio']) : 0;
    $altura = isset($_POST['altura']) ? floatval($_POST['altura']) : 0;

    $volumen = calcularVolumenCono($radio, $altura);

    echo "<p>El volumen del cono es: {$volumen} unidades cúbicas.</p>";
}
?>

</body>
</html>
