<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario de Datos Personales</title>
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
    }

    table {
      margin: 10px 0;
    }

    td {
      padding: 5px;
    }

    label {
      display: block;
    }

    input[type="submit"], input[type="reset"] {
      margin: 10px 5px;
    }

    footer {
      text-align: center;
      margin-top: 20px;
    }
  </style>
</head>

<body>
  <h1>Formulario de Datos Personales</h1>

  <form action="" method="get">
    <p>Escriba los datos siguientes:</p>

    <table>
      <tr>
        <td>
          <label><strong>Nombre:</strong><br>
            <input type="text" name="nombre" size="20" maxlength="20">
          </label>
        </td>
        <td>
          <label><strong>Apellidos:</strong><br>
            <input type="text" name="apellidos" size="20" maxlength="20">
          </label>
        </td>
        <td>
          <label><strong>Edad:</strong><br>
            <select name="edad">
              <option>...</option>
              <option value="1">Menos de 20 años</option>
              <option value="2">Entre 20 y 39 años</option>
              <option value="3">Entre 40 y 59 años</option>
              <option value="4">60 años o más</option>
            </select>
          </label>
        </td>
      </tr>
      <tr>
        <td>
          <label><strong>Peso:</strong><br>
            <input type="number" name="peso" min="1" max="250"> kg
          </label>
        </td>
        <td>
          <label><strong>Sexo:</strong><br>
            <input type="radio" name="genero" value="hombre"> Hombre
            <input type="radio" name="genero" value="mujer"> Mujer
          </label>
        </td>
        <td>
          <label><strong>Estado Civil:</strong><br>
            <input type="radio" name="estadoCivil" value="soltero"> Soltero
            <input type="radio" name="estadoCivil" value="casado"> Casado
            <input type="radio" name="estadoCivil" value="otro"> Otro
          </label>
        </td>
      </tr>
    </table>

    <table>
      <tr>
        <td><strong>Aficiones:</strong></td>
        <td><label><input type="checkbox" name="aficiones[]" value="cine"> Cine</label></td>
        <td><label><input type="checkbox" name="aficiones[]" value="literatura"> Literatura</label></td>
        <td><label><input type="checkbox" name="aficiones[]" value="deporte"> Deporte</label></td>
      </tr>
      <tr>
        <td></td>
        <td><label><input type="checkbox" name="aficiones[]" value="musica"> Música</label></td>
        <td><label><input type="checkbox" name="aficiones[]" value="television"> Televisión</label></td>
      </tr>
    </table>

    <input type="submit" value="Enviar">
    <input type="reset" value="Borrar">
  </form>

  <?php
    if ($_GET) {
        $nombre = $_GET['nombre'] ?? '';
        $apellidos = $_GET['apellidos'] ?? '';
        $edad = $_GET['edad'] ?? '';
        $peso = $_GET['peso'] ?? '';
        $genero = $_GET['genero'] ?? '';
        $estadoCivil = $_GET['estadoCivil'] ?? '';
        $aficiones = $_GET['aficiones'] ?? [];

        echo "<h2>Datos Recibidos:</h2>";
        echo "Nombre: $nombre<br>";
        echo "Apellidos: $apellidos<br>";
        echo "Edad: $edad<br>";
        echo "Peso: $peso kg<br>";
        echo "Sexo: $genero<br>";
        echo "Estado Civil: $estadoCivil<br>";
        echo "Aficiones: " . implode(", ", $aficiones) . "<br>";
    }
  ?>

  <footer>
    <p>Formulario de ejemplo con PHP</p>
  </footer>
</body>
</html>
