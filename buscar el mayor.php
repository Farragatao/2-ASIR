//dado 7 numeros en un formulario visualizar el mayor

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mayor de 7 Números</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 20px;
      padding: 10px;
    }

    h1 {
      text-align: center;
      font-size: 24px;
    }

    form {
      display: flex;
      flex-direction: column;
      align-items: center;
      margin-bottom: 20px;
    }

    label {
      margin: 5px 0;
    }

    input[type="submit"] {
      margin-top: 10px;
    }

    .result {
      text-align: center;
      font-size: 20px;
      margin-top: 20px;
      font-weight: bold;
    }
  </style>
</head>
<body>
  <h1>Formulario de Números</h1>

  <form action="" method="POST">
    <p>Introduce 7 números:</p>

    <?php
    
    for ($i = 1; $i <= 7; $i++) {
        echo "<label for='numero$i'>Número $i:</label>";
        echo "<input type='number' id='numero$i' name='numero[]' required><br>";
    }
    ?>

    <input type="submit" value="Enviar">
  </form>

  <?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     
      $numeros = $_POST['numero'];

      
      $mayor = max($numeros);

     
      echo "<p class='result'>El número mayor es: $mayor</p>";
  }
  ?>
</body>
</html>
