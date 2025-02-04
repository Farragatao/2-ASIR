<?php

// Función para calcular el factorial
function calcularFactorial($numero) {
    $factorial = 1;
    
    // Multiplicar el número por cada número inferior hasta 1
    for ($i = $numero; $i > 0; $i--) {
        $factorial *= $i;
    }
    
    return $factorial;
}

// Número de ejemplo
$numero = 5;

// Calcular el factorial
$resultado = calcularFactorial($numero);

// Mostrar el resultado
echo "El factorial de $numero es: " . $resultado;

?>
