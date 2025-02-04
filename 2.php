<?php
// Definir el tamaño de la tabla
define("COLUMNAS", 6);

// Función para generar la tabla con filas alternas en colores
function generarTabla($n) {
    echo "<table border='1' cellspacing='0' cellpadding='5'>";
    
    $colorFila = "white"; // Empezamos con blanco
    for ($i = 1; $i <= $n; $i++) {
        if ($i % COLUMNAS == 1) {
            echo "<tr>"; // Nueva fila cada 6 números
        }

        // Alternar colores de las filas
        echo "<td style='background-color: $colorFila;'>$i</td>";
        
        if ($i % COLUMNAS == 0) {
            echo "</tr>"; // Cierra la fila después de 6 números
            // Cambiar el color para la siguiente fila
            $colorFila = ($colorFila == "white") ? "gray" : "white";
        }
    }
    
    echo "</table>";
}

// Llamar a la función con el valor de 36
generarTabla(36);
?>

