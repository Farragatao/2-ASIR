<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lluvias en Localidades</title>
</head>
<body>

<?php
    // Declaramos la matriz de lluvias para cada localidad durante los cinco días de la semana pasada
    // Filas: localidades (Chiclana, San Fernando, Cádiz)
    // Columnas: días de la semana (lunes a viernes)
    $lluvias = [
        "Chiclana" => [10, 20, 5, 15, 8], // Lunes a viernes
        "San Fernando" => [7, 12, 3, 10, 5],
        "Cádiz" => [20, 5, 10, 0, 25]
    ];

    $dias = ["lunes", "martes", "miércoles", "jueves", "viernes"];

    // a) Determinar el día de la semana con más lluvia entre las tres localidades
    function diaConMasLluvia($matriz, $dias) {
        $lluviaPorDia = array_fill(0, count($dias), 0);

        // Sumar las lluvias de cada localidad para cada día
        foreach ($matriz as $localidad) {
            foreach ($localidad as $dia => $lluvia) {
                $lluviaPorDia[$dia] += $lluvia;
            }
        }

        // Encontrar el día con más lluvia
        $maxLluvia = max($lluviaPorDia);
        $indiceDia = array_search($maxLluvia, $lluviaPorDia);

        return $dias[$indiceDia];
    }

    // b) Determinar la localidad con menos lluvia en total durante los cinco días
    function ciudadConMenosLluvia($matriz) {
        $lluviaTotalPorCiudad = [];

        // Calcular la suma total de lluvias para cada ciudad
        foreach ($matriz as $ciudad => $lluvias) {
            $lluviaTotalPorCiudad[$ciudad] = array_sum($lluvias);
        }

        // Encontrar la ciudad con menos lluvia
        $minLluviaCiudad = array_keys($lluviaTotalPorCiudad, min($lluviaTotalPorCiudad));

        return $minLluviaCiudad[0];
    }

    // Llamar a las funciones y mostrar el resultado
    $diaMaxLluvia = diaConMasLluvia($lluvias, $dias);
    $ciudadMinLluvia = ciudadConMenosLluvia($lluvias);

    echo "<p>El día con más lluvia entre las tres localidades fue: <strong>$diaMaxLluvia</strong></p>";
    echo "<p>La ciudad con menos lluvia en total en los cinco días fue: <strong>$ciudadMinLluvia</strong></p>";
?>

</body>
</html>
