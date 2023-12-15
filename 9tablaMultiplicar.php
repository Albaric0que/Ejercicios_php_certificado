<!-- Muestra la tabla de multiplicar de un número introducido por teclado. El resultado se debe
mostrar en una tabla (etiqueta "table" de HTML). -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Multiplicar</title>
</head>
<body>

<h2>Tabla de Multiplicar</h2>

<form action="" method="post">
    <label for="numero">Introduce un número:</label>
    <input type="text" name="numero" id="numero">
    <input type="submit" value="Mostrar Tabla">
</form>

<?php
// Función para mostrar la tabla de multiplicar
function mostrarTablaMultiplicar($numero) {
    echo "<table border='1'>";
    echo "<tr>
            <th>Multiplicador</th>
            <th>Resultado</th>
        </tr>";

    for ($i = 1; $i <= 10; $i++) {
        $resultado = $numero * $i;
        echo "<tr>
                <td>{$numero} x {$i}</td>
                <td>{$resultado}</td>
            </tr>";
    }

    echo "</table>";
}

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener el número desde el formulario
    $numero = isset($_POST['numero']) ? intval($_POST['numero']) : 0;

    // Mostrar la tabla de multiplicar utilizando la función
    mostrarTablaMultiplicar($numero);
}
?>

</body>
</html>
