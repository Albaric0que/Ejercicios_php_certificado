<!-- Realiza un programa que pinte una pirámide por pantalla. La altura se debe pedir por teclado
mediante un formulario. La pirámide estará hecha de bolitas, ladrillos o cualquier otra imagen
de las 5 que se deben dar a elegir mediante un formulario. -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pirámide</title>
</head>
<body>

<h2>Construir una Pirámide</h2>

<form action="" method="post">
    <label for="altura">Altura de la pirámide:</label>
    <input type="text" name="altura" id="altura">
    <br>
    <label for="simbolo">Elige un símbolo:</label>
    <select name="simbolo" id="simbolo">
        <option value="*">Estrella (*)</option>
        <option value="#">Ladrillo (#)</option>
        <option value="o">Bolita (o)</option>
    </select>
    <br>
    <input type="submit" value="Construir Pirámide">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $altura = isset($_POST['altura']) ? intval($_POST['altura']) : 0;
    $simbolo = isset($_POST['simbolo']) ? $_POST['simbolo'] : '*';

    if ($altura > 0) {
        echo "<pre>";
        for ($i = 1; $i <= $altura; $i++) {
            echo str_repeat($simbolo, $i) . PHP_EOL;
        }
        echo "</pre>";
    } else {
        echo "<p>Por favor, introduce una altura válida.</p>";
    }
}
?>

</body>
</html>
