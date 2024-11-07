<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Array y Operaciones en PHP</title>
</head>
<body>

<?php
    // Declaramos un array con 5 palabras
    $palabras = ["perro", "gato", "elefante", "delfín", "zorro"];

    // a) Obtener una palabra con las iniciales de cada palabra del array
    $inicialesOriginal = "";
    foreach ($palabras as $palabra) {
        $inicialesOriginal .= $palabra[0];
    }

    // b) Ordenar el array
    sort($palabras);

    // c) Obtener una palabra con las iniciales de cada palabra del array ordenado
    $inicialesOrdenado = "";
    foreach ($palabras as $palabra) {
        $inicialesOrdenado .= $palabra[0];
    }

    // d) Visualizar ambas palabras
    echo "<p>Iniciales del array original: <strong>$inicialesOriginal</strong></p>";
    echo "<p>Iniciales del array ordenado: <strong>$inicialesOrdenado</strong></p>";
?>

</body>
</html>
