//dado 7 valores en un formulario, con las correspondientes cajas de numeros, visualizar aquellos valores que sean superiores a la media de los 7.

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valores superiores a la media</title>
</head>
<body>
    <h1>Ingresar 7 valores</h1>
    <form method="POST">
        <?php
            // Mostrar las cajas de números
            for ($i = 1; $i <= 7; $i++) {
                echo "Valor $i: <input type='number' name='valor[]' step='any' required><br>";
            }
        ?>
        <br>
        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valores = $_POST['valor'];
        $suma = array_sum($valores);
        $media = $suma / count($valores);

        echo "<h2>La media es: $media</h2>";
        echo "<h3>Valores superiores a la media:</h3>";

        foreach ($valores as $valor) {
            if ($valor > $media) {
                echo "$valor<br>";
            }
        }
    }
    ?>
</body>
</html>
