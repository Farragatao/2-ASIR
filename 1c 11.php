<?php

// Función para comparar edades
function compararEdades($nombre1, $edad1, $nombre2, $edad2) {
    if ($edad1 > $edad2) {
        return "El alumno con mayor edad es: " . $nombre1;
    } elseif ($edad2 > $edad1) {
        return "El alumno con mayor edad es: " . $nombre2;
    } else {
        return "Ambos alumnos tienen la misma edad: Iguales";
    }
}

// Datos de los alumnos
$nombre1 = "Juan";
$edad1 = 18;
$nombre2 = "Ana";
$edad2 = 20;

// Llamar a la función para comparar y mostrar el resultado
echo compararEdades($nombre1, $edad1, $nombre2, $edad2);

?>
