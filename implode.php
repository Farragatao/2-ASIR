//almacenar en un array las palabras "Hola mundo informático", y aqui usando la función implode, obtener una cadena a partir del array anterior que visualice el contenido del array separado con una coma cada palabra.

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array con Implode</title>
</head>
<body>

    <?php
    // Array con las palabras "Hola mundo informático"
    $palabras = array("Hola", "mundo", "informático");

    // Usar implode para unir las palabras con una coma
    $cadena = implode(", ", $palabras);

    // Mostrar la cadena resultante
    echo "<p>$cadena</p>";
    ?>

</body>
</html>
