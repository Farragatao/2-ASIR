<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Comparación de Arrays</title>
</head>
<body>

<?php
    // Declaramos los dos arrays de 8 números enteros
    $tab1 = [3, 0, 0, 0, 7, 8, 5, 1];
    $tab2 = [1, 2, 0, 0, 4, 6, 0, 9];

    // Función para obtener el valor máximo de un array
    function obtenerMayor($array) {
        $mayor = $array[0];
        foreach ($array as $numero) {
            if ($numero > $mayor) {
                $mayor = $numero;
            }
        }
        return $mayor;
    }

    // Función para comparar los máximos de los dos arrays
    function compararMayores($mayor1, $mayor2) {
        if ($mayor1 > $mayor2) {
            return "El mayor valor está en el primer array (tab1).";
        } elseif ($mayor2 > $mayor1) {
            return "El mayor valor está en el segundo array (tab2).";
        } else {
            return "Ambos arrays tienen el mismo valor máximo.";
        }
    }

    // Función para verificar si existen tres ceros consecutivos en un array
    function tresCerosSeguidos($array) {
        for ($i = 0; $i <= count($array) - 3; $i++) {
            if ($array[$i] == 0 && $array[$i + 1] == 0 && $array[$i + 2] == 0) {
                return true;
            }
        }
        return false;
    }

    // Obtener el mayor de cada array
    $mayorTab1 = obtenerMayor($tab1);
    $mayorTab2 = obtenerMayor($tab2);

    // Comparar los valores máximos de los dos arrays
    $resultadoComparacion = compararMayores($mayorTab1, $mayorTab2);

    // Verificar si hay tres ceros consecutivos en alguno de los arrays
    $tresCerosTab1 = tresCerosSeguidos($tab1);
    $tresCerosTab2 = tresCerosSeguidos($tab2);

    // Mostrar resultados
    echo "<p>Mayor valor de tab1: <strong>$mayorTab1</strong></p>";
    echo "<p>Mayor valor de tab2: <strong>$mayorTab2</strong></p>";
    echo "<p>Comparación de mayores: <strong>$resultadoComparacion</strong></p>";

    if ($tresCerosTab1 && $tresCerosTab2) {
        echo "<p>Ambos arrays tienen al menos tres ceros consecutivos.</p>";
    } elseif ($tresCerosTab1) {
        echo "<p>El primer array (tab1) tiene tres ceros consecutivos.</p>";
    } elseif ($tresCerosTab2) {
        echo "<p>El segundo array (tab2) tiene tres ceros consecutivos.</p>";
    } else {
        echo "<p>Ninguno de los arrays tiene tres ceros consecutivos.</p>";
    }
?>

</body>
</html>
