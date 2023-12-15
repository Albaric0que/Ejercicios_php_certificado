<!-- Escribe un programa que dada una hora determinada (horas y minutos), calcule los segundos
que faltan para llegar a la medianoche. -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Segundos para Medianoche</title>
</head>
<body>

<h2>Cálculo de Segundos para Medianoche</h2>

<form action="" method="post">
    <label for="hora">Hora (formato 24 horas):</label>
    <input type="text" name="hora" id="hora">
    <br>
    <label for="minutos">Minutos:</label>
    <input type="text" name="minutos" id="minutos">
    <br>
    <input type="submit" value="Calcular Segundos para Medianoche">
</form>

<?php
// Función para calcular los segundos hasta la medianoche
function calcularSegundosParaMedianoche($hora, $minutos) {
    // Verificar si la hora y los minutos son válidos
    if (($hora >= 0 && $hora <= 23) && ($minutos >= 0 && $minutos <= 59)) {
        // Obtener la fecha y hora actual
        $ahora = new DateTime();

        // Establecer la hora y los minutos dados
        $ahora->setTime($hora, $minutos, 0);

        // Obtener la fecha y hora de medianoche
        $medianoche = new DateTime('tomorrow');

        // Calcular la diferencia en segundos
        $diferencia = $medianoche->getTimestamp() - $ahora->getTimestamp();

        return $diferencia;
    } else {
        return "Por favor, introduce una hora y minutos válidos.";
    }
}

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener la hora y los minutos desde el formulario
    $hora = isset($_POST['hora']) ? intval($_POST['hora']) : 0;
    $minutos = isset($_POST['minutos']) ? intval($_POST['minutos']) : 0;

    // Calcular los segundos utilizando la función
    $segundos_para_medianoche = calcularSegundosParaMedianoche($hora, $minutos);

    // Mostrar el resultado
    if (is_numeric($segundos_para_medianoche)) {
        echo "<p>Faltan {$segundos_para_medianoche} segundos para llegar a la medianoche.</p>";
    } else {
        echo "<p>{$segundos_para_medianoche}</p>";
    }
}
?>

</body>
</html>
