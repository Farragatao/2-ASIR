<?php
// Valores numéricos dados
$valores = [150, 75, 600, 2500, 50, 3000];

// Función para contar valores mayores a un límite
function contarMayores($valores, $limite) {
    $contador = 0;
    foreach ($valores as $valor) {
        if ($valor > $limite) {
            $contador++;
        }
    }
    return $contador;
}

// Cálculos
$mayores100 = contarMayores($valores, 100);
$mayores500 = contarMayores($valores, 500);
$mayores2000 = contarMayores($valores, 2000);

// Resultados
echo "Cantidad de valores mayores a 100: $mayores100<br>";
echo "Cantidad de valores mayores a 500: $mayores500<br>";
echo "Cantidad de valores mayores a 2000: $mayores2000<br>";
?>

