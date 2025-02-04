<?php

// Función para verificar si hay un número impar entre 40 y 50
function verificarImparEntre40y50($valores) {
    foreach ($valores as $valor) {
        if ($valor % 2 != 0 && $valor >= 40 && $valor <= 50) {
            return true;
        }
    }
    return false;
}

// Valores de ejemplo (puedes cambiar estos valores según sea necesario)
$valores = [12, 45, 33, 60, 49, 22, 7];

// Verificar si hay un número impar entre 40 y 50
$hayImpar = verificarImparEntre40y50($valores);

// Mostrar el resultado
if ($hayImpar) {
    echo "Hay al menos un número impar entre 40 y 50.";
} else {
    echo "No hay números impares entre 40 y 50.";
}

?>
