<?php
// Función para generar la tabla
function generarTabla($n) {
    echo "<table border='1'>";
    
    for ($i = 1; $i <= $n; $i++) {
        if ($i % 10 == 1) {
            echo "<tr>"; // Nueva fila cada 10 números
        }
        
        echo "<td>$i</td>"; // Muestra el número
        
        if ($i % 10 == 0) {
            echo "</tr>"; // Cierra la fila después del décimo número
        }
    }
    
    echo "</table>";
}

// Llamar a la función con el valor de 100
generarTabla(100);
?>

