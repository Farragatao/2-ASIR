<?php

// Función para calcular la media de los valores positivos
function calcularMedia($valores) {
    $suma = 0;
    $contador = 0;
    
    // Recorrer los valores y sumar solo los positivos
    foreach ($valores as $valor) {
        if ($valor > 0) {
            $suma += $valor;
            $contador++;
        }
    }
    
    // Si hay valores positivos, calcular la media
    if ($contador > 0) {
        return $suma / $contador;
    } else {
        return 0; // Si no hay valores positivos
    }
}

// Valores de ejemplo
$valores = [12, -5, 8, 15, -2, 3, 10];

// Calcular la media de los valores positivos
$media = calcularMedia($valores);

// Mostrar la media
echo "La media de los valores positivos es: " . $media . "<br>";

// Comparar la media con 10
if ($media > 10) {
    echo "La media es mayor que 10.";
} else {
    echo "La media es menor o igual a 10.";
}

?>
