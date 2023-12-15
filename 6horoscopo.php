

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horóscopo</title>
</head>
<body>

<h2>Horóscopo</h2>

<form action="" method="post">
    <label for="dia">Día de nacimiento:</label>
    <input type="text" name="dia" id="dia">
    <br>
    <label for="mes">Mes de nacimiento:</label>
    <input type="text" name="mes" id="mes">
    <br>
    <input type="submit" value="Obtener Horóscopo">
</form>

<?php
function determinarHoroscopo($dia, $mes) {
    if (($mes == 3 && $dia >= 21) || ($mes == 4 && $dia <= 19)) {
        return "Aries";
    } elseif (($mes == 4 && $dia >= 20) || ($mes == 5 && $dia <= 20)) {
        return "Tauro";
    } elseif (($mes == 5 && $dia >= 21) || ($mes == 6 && $dia <= 20)) {
        return "Géminis";
    } elseif (($mes == 6 && $dia >= 21) || ($mes == 7 && $dia <= 22)) {
        return "Cáncer";
    } elseif (($mes == 7 && $dia >= 23) || ($mes == 8 && $dia <= 22)) {
        return "Leo";
    } elseif (($mes == 8 && $dia >= 23) || ($mes == 9 && $dia <= 22)) {
        return "Virgo";
    } elseif (($mes == 9 && $dia >= 23) || ($mes == 10 && $dia <= 22)) {
        return "Libra";
    } elseif (($mes == 10 && $dia >= 23) || ($mes == 11 && $dia <= 21)) {
        return "Escorpio";
    } elseif (($mes == 11 && $dia >= 22) || ($mes == 12 && $dia <= 21)) {
        return "Sagitario";
    } elseif (($mes == 12 && $dia >= 22) || ($mes == 1 && $dia <= 19)) {
        return "Capricornio";
    } elseif (($mes == 1 && $dia >= 20) || ($mes == 2 && $dia <= 18)) {
        return "Acuario";
    } else {
        return "Piscis";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dia = isset($_POST['dia']) ? intval($_POST['dia']) : 0;
    $mes = isset($_POST['mes']) ? intval($_POST['mes']) : 0;

    if (($dia >= 1 && $dia <= 31) && ($mes >= 1 && $mes <= 12)) {
        $horoscopo = determinarHoroscopo($dia, $mes);

        echo "<p>Tu horóscopo es: {$horoscopo}</p>";
    } else {
        echo "<p>Por favor, introduce un día y un mes válidos.</p>";
    }
}
?>

</body>
</html>
