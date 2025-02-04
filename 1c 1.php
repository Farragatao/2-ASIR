<?php

function calcularCostoLlamada($minutos) {
    $costoFijo = 1; // Costo por 3 minutos o menos
    $costoAdicional = 0.40; // Costo por cada minuto adicional
    $minutosAdicionales = max(0, $minutos - 3); // Minutos adicionales después de los primeros 3

    if ($minutos <= 3) {
        return $costoFijo; // Si la llamada es de 3 minutos o menos
    } else {
        return $costoFijo + ($minutosAdicionales * $costoAdicional); // Costo fijo + minutos adicionales
    }
}

// Ejemplo de uso
$minutosConsumidos = 5; // Aquí puedes cambiar el número de minutos
$costo = calcularCostoLlamada($minutosConsumidos);
echo "El costo de la llamada es: €" . number_format($costo, 2);

?>
