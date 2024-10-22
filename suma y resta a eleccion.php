// dados 5 numeros de formulario, utilizar dos chekbox, que indique suma y resta de tal forma qeu el usuario pueda elegir suma, resta, ambas o nonguna.
<!DOCTYPE html>
<html lang="es">
<head>
  <title>Problema</title>
</head>
<body>
  <form action="" method="post">
    Ingrese primer valor:
    <input type="text" name="valor1">
    <br>
    Ingrese segundo valor:
    <input type="text" name="valor2">
    <br>
    Ingrese tercer valor:
    <input type="text" name="valor3">
    <br>
    Ingrese cuarto valor:
    <input type="text" name="valor4">
    <br>
    Ingrese quinto valor:
    <input type="text" name="valor5">
    <br><br>
    
    <!-- Checkboxes para elegir la operación -->
    <input type="checkbox" name="check1"> Sumar<br>
    <input type="checkbox" name="check2"> Restar<br><br>
    <input type="checkbox" name="check3"> Multiplicar<br><br>
    <input type="checkbox" name="check4"> Dividir<br><br>


    
    <input type="submit" name="operar" value="Calcular">
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger los valores
    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];
    $valor3 = $_POST['valor3'];
    $valor4 = $_POST['valor4'];
    $valor5 = $_POST['valor5'];

    // Realizar suma y resta sin comprobaciones adicionales
    $suma = $valor1 + $valor2 + $valor3 + $valor4 + $valor5;
    $resta = $valor1 - $valor2 - $valor3 - $valor4 - $valor5;
    $multiplicacion = $valor1 * $valor2 * $valor3 * $valor4 * $valor5;
    $dividir = $valor1 / $valor2 / $valor3 / $valor4 / $valor5;



    // Mostrar los resultados si se seleccionan los checkboxes
    if (isset($_POST['check1'])) {
      echo "La suma de los valores es: $suma<br>";
    }
    if (isset($_POST['check2'])) {
      echo "La resta de los valores es: $resta<br>";
    }
    if (isset($_POST['check3'])) {
        echo "La multiplicacion de los valores es: $multiplicacion<br>";
    }
    if (isset($_POST['check4'])) {
        echo "La division de los valores es: $division<br>";
    }
  }
  ?>
</body>
</html>
