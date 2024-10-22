<?php
 /*
 9.-) Entrada y Salida de Datos con Formularios. Hacer una CALCULADORA completa (suma, resta, multiplicación 
y división) en un solo programa que se llama a si mismo y se envía los datos de su propio formulario. Se utiliza la 
función ISSET() para determinar si son enviadas las variables por el usuario.

 */
  
 if (!isset ($_POST['suma']) && !isset ($_POST['resta']) && !isset ($_POST['multi']) && !isset ($_POST['division']) ) { ?>
 
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body bgcolor="#FFFFFF" text="#000000">
<form name="form1" method="post" action="prog9.php">
  <p>Numero1: 
    <input type="text" name="numero1" size="5">
  </p>
  <p>Numero2: 
    <input type="text" name="numero2" size="5">
  </p>
  

    <input type="submit" name="suma" value="suma">
    <input type="submit" name="resta" value="resta">
    <input type="submit" name="multi" value="multi">
    <input type="submit" name="division" value="division">
		

  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
<p>&nbsp;</p>
</body>
</html>
<?php
 } else {
   $num1 = $_POST['numero1'];
   $num2 = $_POST['numero2'];
   Visualizar (Proceso ($num1, $num2)); 
      
  }
  
  // ------------- funcion que visuliza el resultado
  function  Proceso ($num1, $num2){  
   if (isset ($_POST['suma']))  $resul = $num1 + $num2;  
     else
       if (isset ($_POST['resta']))  $resul = $num1 - $num2;  
        else
          if (isset ($_POST['multi']))  $resul = $num1 * $num2;  
		   else
             if (isset ($_POST['division']))  $resul = $num1 / $num2; 
			 
   return $resul;
  }
  
  //---- funcion que visualiza el resultado
  function Visualizar ($dato){
        echo "el resultado es: ".$dato;
  }
 ?>  