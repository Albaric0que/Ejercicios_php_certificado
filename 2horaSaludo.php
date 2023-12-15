<!-- Realiza un programa que pida una hora por teclado y que muestre luego buenos días,
buenas tardes o buenas noches según la hora. Se utilizarán los tramos de 6 a 12, de 13 a 20
y de 21 a 5. respectivamente. Sólo se tienen en cuenta las horas, los minutos no se deben
introducir por teclado. -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saludo según la Hora</title>
</head>
<body>

<h2>Saludo según la Hora</h2>

<form action="" method="post">
    <label for="hora">Introduce la hora (formato 24 horas):</label>
    <input type="text" name="hora" id="hora">
    <input type="submit" value="Enviar">
</form>

<?php
// Función para determinar el saludo según la hora
function determinarSaludo($hora) {
    if ($hora >= 6 && $hora < 12) {
        return "Buenos días";
    } elseif ($hora >= 12 && $hora < 21) {
        return "Buenas tardes";
    } else {
        return "Buenas noches";
    }
}

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener la hora desde el formulario
    $hora = isset($_POST['hora']) ? intval($_POST['hora']) : 0;

    // Verificar que la hora sea válida
    if ($hora >= 0 && $hora <= 23) {
        // Determinar el saludo utilizando la función
        $saludo = determinarSaludo($hora);

        // Mostrar el resultado
        echo "<p>{$saludo}</p>";
    } else {
        echo "<p>Por favor, introduce una hora válida (0-23).</p>";
    }
}
?>

</body>
</html>
