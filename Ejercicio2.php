// Dado dos numeros, si el primero es mayor que el segundo, visualizar los numeros comprendidos entre ambos incluidos.

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizar Números Entre Dos</title>
</head>
<body>
    <h2>Números comprendidos entre dos valores</h2>

    <?php
    // Definir dos números
    $num1 = 10;
    $num2 = 5;

    // Comprobación si el primero es mayor que el segundo
    if ($num1 > $num2) {
        echo "Los números comprendidos entre $num1 y $num2 son: <br>";

        // Mostrar los números comprendidos entre ambos
        for ($i = $num2; $i <= $num1; $i++) {
            echo $i . "<br>";
        }
    } else {
        echo "$num1 no es mayor que $num2. No se puede mostrar ningún número.";
    }
    ?>
</body>
</html>
