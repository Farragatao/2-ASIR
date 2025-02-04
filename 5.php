<?php
// Función para realizar la operación
function calcular($numero1, $numero2, $operacion) {
    switch ($operacion) {
        case 'suma':
            return $numero1 + $numero2;
        case 'resta':
            return $numero1 - $numero2;
        case 'multiplicacion':
            return $numero1 * $numero2;
        case 'division':
            if ($numero2 != 0) {
                return $numero1 / $numero2;
            } else {
                return "Error: División por cero.";
            }
        default:
            return "Operación no válida.";
    }
}

// Comprobar si se enviaron los datos
if (isset($_POST['numero1']) && isset($_POST['numero2']) && isset($_POST['operacion'])) {
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    $operacion = $_POST['operacion'];

    // Llamar a la función para calcular el resultado
    $resultado = calcular($numero1, $numero2, $operacion);
    echo "Resultado: " . $resultado;
}
?>

<!-- Formulario HTML -->
<form action="" method="post">
    <label for="numero1">Número 1:</label>
    <input type="number" name="numero1" required><br><br>

    <label for="numero2">Número 2:</label>
    <input type="number" name="numero2" required><br><br>

    <label for="operacion">Operación:</label>
    <select name="operacion" required>
        <option value="suma">Suma</option>
        <option value="resta">Resta</option>
        <option value="multiplicacion">Multiplicación</option>
        <option value="division">División</option>
    </select><br><br>

    <input type="submit" value="Calcular">
</form>

