<!-- Escribe un programa que calcule el total de una factura a partir de la base imponible. Se
considera un IVA del 21% -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Factura</title>
</head>
<body>

<h2>Calculadora de Factura</h2>

<form action="" method="post">
    <label for="base_imponible">Base Imponible:</label>
    <input type="text" name="base_imponible" id="base_imponible">
    <input type="submit" value="Calcular Total">
</form>

<?php
function calcularTotalFactura($base_imponible, $iva_porcentaje = 21) {
    $iva = $base_imponible * ($iva_porcentaje / 100);
    $total = $base_imponible + $iva;
    return ['base_imponible' => $base_imponible, 'iva' => $iva, 'total' => $total];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $base_imponible = isset($_POST['base_imponible']) ? floatval($_POST['base_imponible']) : 0;

    $resultado = calcularTotalFactura($base_imponible);

    echo "<p>Base Imponible: {$resultado['base_imponible']} euros</p>";
    echo "<p>IVA (21%): {$resultado['iva']} euros</p>";
    echo "<p>Total: {$resultado['total']} euros</p>";
}
?>

</body>
</html>


