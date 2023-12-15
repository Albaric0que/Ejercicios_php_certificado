<!-- Escribe un programa que ordene, de menor a mayor, tres números enteros introducidos por
teclado. -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordenar Números</title>
</head>
<body>

<h2>Ordenar Números</h2>

<form action="" method="post">
    <label for="num1">Primer número:</label>
    <input type="text" name="num1" id="num1">
    <br>
    <label for="num2">Segundo número:</label>
    <input type="text" name="num2" id="num2">
    <br>
    <label for="num3">Tercer número:</label>
    <input type="text" name="num3" id="num3">
    <br>
    <input type="submit" value="Ordenar">
</form>

<?php
function ordenarNumeros($num1, $num2, $num3) {
    $numeros = [$num1, $num2, $num3];
    sort($numeros);
    return $numeros;
} 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = isset($_POST['num1']) ? intval($_POST['num1']) : 0;
    $num2 = isset($_POST['num2']) ? intval($_POST['num2']) : 0;
    $num3 = isset($_POST['num3']) ? intval($_POST['num3']) : 0;

    $numeros_ordenados = ordenarNumeros($num1, $num2, $num3);

    echo "<p>Números ordenados: " . implode(", ", $numeros_ordenados) . "</p>";
}
?>

</body>
</html>
