<!-- Realiza un conversor de euros a pesetas. Ahora la cantidad en euros que se quiere convertir
se deberá introducir por teclado. -->
 
 <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Euros a Pesetas</title>
</head>
<body>

<h2>Conversor de Euros a Pesetas</h2>

<form action="" method="post">
    <label for="euros">Introduce la cantidad en euros:</label>
    <input type="text" name="euros" id="euros">
    <input type="submit" value="Convertir">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $euros = isset($_POST['euros']) ? floatval($_POST['euros']) : 0;

    $pesetas = eurosAPesetas($euros);

    echo "<p>{$euros} euros son {$pesetas} pesetas.</p>";
}

function eurosAPesetas($euros) {
    $cambioAntiguo = 166.386;

    $pesetas = $euros * $cambioAntiguo;

    return $pesetas;
}
?>

</body>
</html>
