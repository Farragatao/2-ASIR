//validar una direccion de correo electronico con una serie de filtros:
que contenga una sola vez el caracter @
que el dominio que sea o .com .es .org (hacerlo con EXPLODE)


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validación de Correo Electrónico</title>
</head>
<body>

    <form method="POST">
        <label for="email">Introduce tu correo electrónico:</label>
        <input type="text" id="email" name="email">
        <input type="submit" value="Validar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST["email"];
        
        // Validar que contenga un solo @
        if (substr_count($email, "@") == 1) {
            // Explode para separar el usuario del dominio
            $partes = explode("@", $email);
            
            // Verificar que el dominio sea correcto
            if (isset($partes[1])) {
                $dominio = $partes[1];

                // Validar que el dominio termine en .com, .es o .org
                $dominioPermitido = explode(".", $dominio);
                $extension = end($dominioPermitido);

                if (in_array($extension, ["com", "es", "org"])) {
                    echo "<p>El correo es válido.</p>";
                } else {
                    echo "<p>El dominio no es válido. Debe ser .com, .es o .org.</p>";
                }
            } else {
                echo "<p>El correo no tiene un dominio válido.</p>";
            }
        } else {
            echo "<p>El correo debe contener exactamente un '@'.</p>";
        }
    }
    ?>

</body>
</html>
