<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Clientes y Cuentas Bancarias</title>
</head>
<body>

<?php
    // Declaramos el array asociativo con los datos de los clientes
    $clientes = [
        ["cuenta" => 2034056, "nombre" => "Antonio Ruiz", "saldo" => 1000, "ciudad" => "Chiclana"],
        ["cuenta" => 3465748, "nombre" => "Maria Torres", "saldo" => 38000, "ciudad" => "Chiclana"],
        ["cuenta" => 4768584, "nombre" => "Javier Vaquero", "saldo" => 25000, "ciudad" => "Conil"],
        ["cuenta" => 4876756, "nombre" => "Laura Moreno", "saldo" => 18000, "ciudad" => "Medina"]
    ];

    // a) Visualizar el nombre de los clientes con saldo inferior a la media de todos los saldos
    function obtenerClientesSaldoInferiorMedia($clientes) {
        $sumaSaldos = 0;
        $numClientes = count($clientes);

        // Calcular la suma total de los saldos
        foreach ($clientes as $cliente) {
            $sumaSaldos += $cliente["saldo"];
        }

        // Calcular la media de los saldos
        $mediaSaldos = $sumaSaldos / $numClientes;

        // Obtener clientes con saldo inferior a la media
        $clientesInferiorMedia = [];
        foreach ($clientes as $cliente) {
            if ($cliente["saldo"] < $mediaSaldos) {
                $clientesInferiorMedia[] = $cliente["nombre"];
            }
        }

        return $clientesInferiorMedia;
    }

    // b) Visualizar los nombres con saldos superiores a 10000 ordenados alfabéticamente por nombre
    function obtenerClientesSaldoSuperior($clientes, $limite) {
        $clientesSuperior = [];

        // Obtener los nombres de los clientes con saldo superior al límite
        foreach ($clientes as $cliente) {
            if ($cliente["saldo"] > $limite) {
                $clientesSuperior[] = $cliente["nombre"];
            }
        }

        // Ordenar alfabéticamente
        sort($clientesSuperior);

        return $clientesSuperior;
    }

    // c) Visualizar el nombre de aquellos clientes que no son de Chiclana
    function obtenerClientesNoChiclana($clientes) {
        $clientesNoChiclana = [];

        // Filtrar los clientes que no son de Chiclana
        foreach ($clientes as $cliente) {
            if ($cliente["ciudad"] != "Chiclana") {
                $clientesNoChiclana[] = $cliente["nombre"];
            }
        }

        return $clientesNoChiclana;
    }

    // Ejecutar las funciones y mostrar los resultados

    // a) Clientes con saldo inferior a la media
    $clientesSaldoInferiorMedia = obtenerClientesSaldoInferiorMedia($clientes);
    echo "<p><strong>Clientes con saldo inferior a la media:</strong></p><ul>";
    foreach ($clientesSaldoInferiorMedia as $nombre) {
        echo "<li>$nombre</li>";
    }
    echo "</ul>";

    // b) Clientes con saldo superior a 10000, ordenados alfabéticamente
    $clientesSaldoSuperior10000 = obtenerClientesSaldoSuperior($clientes, 10000);
    echo "<p><strong>Clientes con saldo superior a 10000, ordenados alfabéticamente:</strong></p><ul>";
    foreach ($clientesSaldoSuperior10000 as $nombre) {
        echo "<li>$nombre</li>";
    }
    echo "</ul>";

    // c) Clientes que no son de Chiclana
    $clientesNoChiclana = obtenerClientesNoChiclana($clientes);
    echo "<p><strong>Clientes que no son de Chiclana:</strong></p><ul>";
    foreach ($clientesNoChiclana as $nombre) {
        echo "<li>$nombre</li>";
    }
    echo "</ul>";
?>

</body>
</html>
