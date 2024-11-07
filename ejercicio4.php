<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Números Primos entre 50 y 100</title>
</head>
<body>

<?php
    // Función para verificar si un número es primo
    function esPrimo($numero) {
        if ($numero < 2) {
            return false;
        }
        $divisor = 2;
        while ($divisor <= sqrt($numero)) {
            if ($numero % $divisor == 0) {
                return false;
            }
            $divisor++;
        }
        return true;
    }

    // Inicializamos el contador en 50
    $numero = 50;

    echo "<p>Números primos entre 50 y 100:</p><ul>";

    // Usamos while para recorrer desde 50 hasta 100
    while ($numero <= 100) {
        if (esPrimo($numero)) {
            echo "<li>$numero</li>";
        }
        $numero++;
    }

    echo "</ul>";
?>

</body>
</html>
