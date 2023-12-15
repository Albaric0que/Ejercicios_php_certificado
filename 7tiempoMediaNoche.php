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
function calcularSegundosParaMedianoche($hora, $minutos) {
    if (($hora >= 0 && $hora <= 23) && ($minutos >= 0 && $minutos <= 59)) {
        $ahora = new DateTime();

        $ahora->setTime($hora, $minutos, 0);

        $medianoche = new DateTime('tomorrow');

        $diferencia = $medianoche->getTimestamp() - $ahora->getTimestamp();

        return $diferencia;
    } else {
        return "Por favor, introduce una hora y minutos válidos.";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $hora = isset($_POST['hora']) ? intval($_POST['hora']) : 0;
    $minutos = isset($_POST['minutos']) ? intval($_POST['minutos']) : 0;

    $segundos_para_medianoche = calcularSegundosParaMedianoche($hora, $minutos);

    if (is_numeric($segundos_para_medianoche)) {
        echo "<p>Faltan {$segundos_para_medianoche} segundos para llegar a la medianoche.</p>";
    } else {
        echo "<p>{$segundos_para_medianoche}</p>";
    }
}
?>

</body>
</html>
