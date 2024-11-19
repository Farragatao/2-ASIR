<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $direccion = $_POST['direccion'];

    // Redirigir con los datos en la URL
    header("Location: mostrar_datos.php?nombre=" . urlencode($nombre) . "&direccion=" . urlencode($direccion));
    exit;
} else {
    echo "No se ha enviado el formulario.";
}
?>
