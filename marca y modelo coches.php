//almacenar en una matriz la informacion de varios coches de un concesionario, mediante array asociativos, visualizar la marca y modelos de aquellos coches cuyo precio sea superorior a 30000€

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coches del Concesionario</title>
</head>
<body>

    <h1>Coches con precio superior a 30.000€</h1>

    <?php
    // Array asociativo con la información de los coches
    $coches = array(
        array("marca" => "BMW", "modelo" => "Serie 3", "precio" => 35000),
        array("marca" => "Audi", "modelo" => "A4", "precio" => 40000),
        array("marca" => "Ford", "modelo" => "Focus", "precio" => 25000),
        array("marca" => "Mercedes", "modelo" => "Clase C", "precio" => 45000),
        array("marca" => "Toyota", "modelo" => "Corolla", "precio" => 28000)
    );

    // Filtrar y mostrar coches con precio superior a 30.000€
    foreach ($coches as $coche) {
        if ($coche["precio"] > 30000) {
            echo "<p>Marca: " . $coche["marca"] . " - Modelo: " . $coche["modelo"] . "</p>";
        }
    }
    ?>

</body>
</html>
