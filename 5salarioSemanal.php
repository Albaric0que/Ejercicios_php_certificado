<!-- Escribe un programa que calcule el salario semanal de un trabajador teniendo en cuenta que
las horas ordinarias (40 primeras horas de trabajo) se pagan a 12 euros la hora. A partir de la
hora 41, se pagan a 16 euros la hora. -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Salario Semanal</title>
</head>
<body>

<h2>Calculadora de Salario Semanal</h2>

<form action="" method="post">
    <label for="horas_trabajadas">Horas trabajadas:</label>
    <input type="text" name="horas_trabajadas" id="horas_trabajadas">
    <input type="submit" value="Calcular Salario">
</form>

<?php
// Función para calcular el salario semanal
function calcularSalarioSemanal($horasTrabajadas) {
    $tarifaOrdinaria = 12; // Tarifa para las primeras 40 horas
    $tarifaExtraordinaria = 16; // Tarifa para las horas extra (más de 40 horas)

    // Verificar si hay horas extraordinarias
    if ($horasTrabajadas > 40) {
        $horasOrdinarias = 40;
        $horasExtraordinarias = $horasTrabajadas - $horasOrdinarias;
    } else {
        $horasOrdinarias = $horasTrabajadas;
        $horasExtraordinarias = 0;
    }

    // Calcular el salario
    $salario = ($horasOrdinarias * $tarifaOrdinaria) + ($horasExtraordinarias * $tarifaExtraordinaria);

    return $salario;
}

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener las horas trabajadas desde el formulario
    $horas_trabajadas = isset($_POST['horas_trabajadas']) ? floatval($_POST['horas_trabajadas']) : 0;

    // Calcular el salario utilizando la función
    $salario_semanal = calcularSalarioSemanal($horas_trabajadas);

    // Mostrar el resultado
    echo "<p>El salario semanal es: {$salario_semanal} euros.</p>";
}
?>

</body>
</html>
