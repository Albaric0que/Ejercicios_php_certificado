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
// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener la cantidad en euros desde el formulario
    $euros = isset($_POST['euros']) ? floatval($_POST['euros']) : 0;

    // Realizar la conversión
    $pesetas = eurosAPesetas($euros);

    // Mostrar el resultado
    echo "<p>{$euros} euros son {$pesetas} pesetas.</p>";
}

// Función para convertir euros a pesetas
function eurosAPesetas($euros) {
    // CAmbio de euro a pesetas
    $cambioAntiguo = 166.386;

    // Realizar la conversión
    $pesetas = $euros * $cambioAntiguo;

    return $pesetas;
}
?>

</body>
</html>
