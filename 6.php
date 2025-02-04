<?php
// Función para alterar el nombre según el sexo
function alterarNombre($nombre, $sexo) {
    if ($sexo == 'H') {
        return "Sr. " . $nombre; // Si es hombre
    } elseif ($sexo == 'M') {
        return "Sra. " . $nombre; // Si es mujer
    } else {
        return "Sexo no válido"; // Si el sexo no es H o M
    }
}

// Ejemplo de uso:
$nombre = "Juan"; // Nombre de la persona
$sexo = "H"; // Sexo de la persona (puede ser 'H' o 'M')

// Mostrar el resultado
echo alterarNombre($nombre, $sexo);
?>

