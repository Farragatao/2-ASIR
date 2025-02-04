<?php
// Función para mostrar una fila
function mostrarFila($numero, $veces) {
    echo str_repeat($numero, $veces) . "<br>";
}

// Función para generar las filas
function generarPatron($n) {
    // Parte ascendente
    for ($i = 1; $i <= $n; $i++) {
        mostrarFila($i, $i); // Llama a la función para mostrar cada fila
    }
    // Parte descendente
    for ($i = $n - 1; $i >= 1; $i--) {
        mostrarFila($i, $i); // Llama a la función para mostrar cada fila
    }
}

// Ejemplo de uso
$n = 6; // Cambia este número para probar con otros valores
generarPatron($n);
?>

