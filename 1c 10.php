<?php

// Función para verificar si un número es primo
function esPrimo($numero) {
    if ($numero <= 1) return false;
    for ($i = 2; $i <= $numero / 2; $i++) {
        if ($numero % $i == 0) return false;
    }
    return true;
}

// Datos de los números
$numeros = [5, 12, 7, 19, 4, 2, 25, 3];

// Contar los primos
$primos = 0;
foreach ($numeros as $numero) {
    if (esPrimo($numero)) $primos++;
}

// Mostrar el resultado
echo "Hay $primos números primos.";

?>
