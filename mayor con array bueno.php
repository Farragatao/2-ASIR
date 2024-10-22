<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Número Mayor de un Array</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 20px;
      padding: 10px;
      text-align: center;
    }

    h1 {
      font-size: 24px;
    }

    .result {
      font-size: 20px;
      margin-top: 20px;
      font-weight: bold;
    }
  </style>
</head>
<body>
  <h1>Obtener el Mayor de un Array</h1>

  <?php
  $numeros = array(23, 5, 67, 12, 89, 34, 56);

  $mayor = max($numeros);

  echo "<p>Los números son: " . implode(", ", $numeros) . "</p>";

  echo "<p class='result'>El número mayor es: " . $mayor . "</p>";
  ?>
</body>
</html>