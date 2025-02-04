<?php
// Función para dibujar la figura
function dibujarFigura($num) {
    for ($i = 1; $i <= $num; $i++) {
        // Imprimir espacios en blanco antes del número
        echo str_repeat(" ", $num - $i);
        
        // Imprimir el número repetido
        echo str_repeat($i, 2 * $i - 1);
        
        // Salto de línea después de cada fila
        echo "<br>";
    }
}

// Llamar a la función con el valor de 5
dibujarFigura(5);
?>

