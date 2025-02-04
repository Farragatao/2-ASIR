<?php

// Función para contar los múltiplos de 2 y 3
function contarMultiplos($valores) {
    $contador = 0;
    
    // Recorrer los valores y contar los múltiplos de 2 y 3
    foreach ($valores as $valor) {
        if ($valor % 2 == 0 && $valor % 3 == 0) {
            $contador++;
        }
    }
    
    return $contador;
}

// Ejemplo de 8 valores (puedes cambiar estos valores según sea necesario)
$valores = [6, 12, 15, 18, 20, 30, 36, 40];

// Contar los múltiplos de 2 y 3
$multiples = contarMultiplos($valores);

// Mostrar el resultado
echo "La cantidad de valores múltiplos de 2 y 3 es: " . $multiples;

?>
