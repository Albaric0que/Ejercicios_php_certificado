<!-- Escribe un programa que muestre los n primeros términos de la serie de Fibonacci. El primer
término de la serie de Fibonacci es 0, el segundo es 1 y el resto se calcula sumando los dos
anteriores, por lo que tendríamos que los términos son 0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89,
144... El número n se debe introducir por teclado. -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serie de Fibonacci</title>
</head>
<body>

<h2>Serie de Fibonacci</h2>

<form action="" method="post">
    <label for="n">Introduce el número de términos:</label>
    <input type="text" name="n" id="n">
    <input type="submit" value="Mostrar Serie">
</form>

<?php
function fibonacci($n) {
    $fibonacci = [0, 1];

    for ($i = 2; $i < $n; $i++) {
        $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }

    return $fibonacci;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $n = isset($_POST['n']) ? intval($_POST['n']) : 0;

    if ($n > 0) {
        $serie_fibonacci = fibonacci($n);

        echo "<p>Los primeros {$n} términos de la serie de Fibonacci son: ";
        echo implode(", ", $serie_fibonacci);
        echo "</p>";
    } else {
        echo "<p>Por favor, introduce un número válido de términos.</p>";
    }
}
?>

</body>
</html>
