<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Verificar Números Pares en Rango</title>
</head>
<body>

<?php
    // Declarar un array de números enteros en el programa principal
    $numeros = [25, 32, 33, 38, 40, 17, 45, 30];

    // Función para verificar si hay al menos dos números pares entre 30 y 40
    function existenDosParesEnRango($array) {
        $contadorPares = 0;

        foreach ($array as $numero) {
            if ($numero >= 30 && $numero <= 40 && $numero % 2 == 0) {
                $contadorPares++;
            }
            if ($contadorPares >= 2) {
                return "si";
            }
        }
        return "no";
    }

    // Función para mostrar el mensaje de resultado
    function mostrarResultado($resultado) {
        if ($resultado == "si") {
            echo "<p>Si existe</p>";
        } else {
            echo "<p>No existe</p>";
        }
    }

    // Llamar a las funciones y mostrar el resultado
    $resultado = existenDosParesEnRango($numeros);
    mostrarResultado($resultado);
?>

</body>
</html>
