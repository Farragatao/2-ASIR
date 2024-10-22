<?php
/* Defina un programa que muestre en pantalla una tabla de 10 x 10 con los números del 1 al 100, coloreando las filas de forma alternada en gris y blanco.*/

// ----------- PROGRAMA PRINCIPAL ------------
Visualizar ();

// -------------- funcion que visualiza la tabla con html
function Visualizar (){
?>

<html>
<body>
<table border=1>
<?php
$num=10;
 $conta=0;
 for ($i=1; $i<=$num; $i++){
   if ($i % 2==0) {
     ?> <tr bgcolor="#aaaaaa"> <?php
     } else {
	 ?>  <tr>  <?php
	 }
	  
   ?>
   

	<?php
	 for ($k=1; $k<=$num; $k++){
	   $conta++;
	   ?>
        <td>
		<?php		  
		   echo $conta;
        ?>
		</td>
		<?php
      }
	  ?>
	  </td>
	  <?php
  }  
 ?>
  
</table>
</body>
</html>
<?php
}
?>