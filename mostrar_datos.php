<?php
if (isset($_GET['nombre']) && isset($_GET['direccion'])) {
    $nombre = $_GET['nombre'];
    $direccion = $_GET['direccion'];

    echo "Tu nombre es $nombre y vives en $direccion.";
} else {
    echo "No se han recibido datos.";
}
?>
