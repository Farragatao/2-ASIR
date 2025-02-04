<?php
// Función para verificar si un número es perfecto
function esPerfecto($numero) {
    $sumaDivisores = 0;
    
    // Encontrar los divisores del número
    for ($i = 1; $i < $numero; $i++) {
        if ($numero % $i == 0) {
            $sumaDivisores += $i; // Sumar los divisores
        }
    }
    
    return $sumaDivisores == $numero; // Si la suma es igual al número, es perfecto
}

// Mostrar los primeros 4 números perfectos
$contador = 0;
$numero = 1;

while ($contador < 4) {
    if (esPerfecto($numero)) {
        echo "$numero es un número perfecto<br>";
        $contador++;
    }
    $numero++;
}
?>

