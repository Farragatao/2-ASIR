//dado 7 valores en un formulario, con las correspondientes cajas de numeros, visualizar aquellos valores que sean superiores a la media de los 7.

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Valores superiores a la media</title>
</head>
<body>
    <h1>Ingresar 7 valores</h1>
    
    <!-- El formulario para ingresar los 7 valores -->
    <form method="POST">
        Valor 1: <input type="number" name="valor[]" required><br><br>
        Valor 2: <input type="number" name="valor[]" required><br><br>
        Valor 3: <input type="number" name="valor[]" required><br><br>
        Valor 4: <input type="number" name="valor[]" required><br><br>
        Valor 5: <input type="number" name="valor[]" required><br><br>
        Valor 6: <input type="number" name="valor[]" required><br><br>
        Valor 7: <input type="number" name="valor[]" required><br><br>

        <input type="submit" value="Calcular"><br><br>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valores = $_POST['valor'];  // Recoge los valores del formulario
        $media = array_sum($valores) / count($valores);  // Calcula la media

        echo "La media es: $media<br><br>";  // Muestra la media

        echo "Valores superiores a la media:<br>";
        foreach ($valores as $valor) {
            if ($valor > $media) {
                echo "$valor<br>";  // Muestra solo los valores mayores a la media
            }
        }
    }
    ?>
</body>
</html>
