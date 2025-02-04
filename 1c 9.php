<?php

// Función para contar sueldos según los rangos
function contarSueldos($sueldos) {
    $mayores1800 = 0;
    $mayores1200 = 0;
    $menores600 = 0;

    // Comprobamos cada sueldo con if
    if ($sueldos[0] > 1800) $mayores1800++;
    if ($sueldos[1] > 1800) $mayores1800++;
    if ($sueldos[2] > 1800) $mayores1800++;
    if ($sueldos[3] > 1800) $mayores1800++;
    if ($sueldos[4] > 1800) $mayores1800++;
    if ($sueldos[5] > 1800) $mayores1800++;
    if ($sueldos[6] > 1800) $mayores1800++;
    if ($sueldos[7] > 1800) $mayores1800++;

    if ($sueldos[0] > 1200) $mayores1200++;
    if ($sueldos[1] > 1200) $mayores1200++;
    if ($sueldos[2] > 1200) $mayores1200++;
    if ($sueldos[3] > 1200) $mayores1200++;
    if ($sueldos[4] > 1200) $mayores1200++;
    if ($sueldos[5] > 1200) $mayores1200++;
    if ($sueldos[6] > 1200) $mayores1200++;
    if ($sueldos[7] > 1200) $mayores1200++;

    if ($sueldos[0] < 600) $menores600++;
    if ($sueldos[1] < 600) $menores600++;
    if ($sueldos[2] < 600) $menores600++;
    if ($sueldos[3] < 600) $menores600++;
    if ($sueldos[4] < 600) $menores600++;
    if ($sueldos[5] < 600) $menores600++;
    if ($sueldos[6] < 600) $menores600++;
    if ($sueldos[7] < 600) $menores600++;

    // Retornar los resultados
    return [$mayores1800, $mayores1200, $menores600];
}

// Ejemplo de sueldos (puedes cambiar estos valores)
$sueldos = [1900, 1100, 500, 2500, 1200, 1500, 450, 2000];

// Contamos los sueldos en los rangos
list($mayores1800, $mayores1200, $menores600) = contarSueldos($sueldos);

// Mostramos los resultados
echo "Sueldos mayores a 1800: " . $mayores1800 . "<br>";
echo "Sueldos mayores a 1200: " . $mayores1200 . "<br>";
echo "Sueldos menores a 600: " . $menores600;

?>
