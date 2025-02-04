<?php

// Función para modificar el nombre de la calle
function modificarCalle($calle) {
    return "c/" . $calle;
}

// Nombre de la calle de ejemplo
$calle = "Alameda N.2";

// Modificar la calle
$calleModificada = modificarCalle($calle);

// Mostrar el resultado
echo "La calle modificada es: " . $calleModificada;

?>
