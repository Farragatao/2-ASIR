<?php
 /* Declarar un vector de 15 valores num�ricos. 
 A continuaci�n, declarar un  n�mero y una posici�n (deber� estar entre 1 y 15).
  Se pide, guardar el n�mero (en el vector) en la posici�n anteriormente referida. .*/


// ----------------- actualiza un array con un numero en una posici�n ---------
function Proceso ($num, $pos, &$tabla){

     if ($pos >= 0 && $pos < 15)
		     $tabla[$pos] = $num;
		          
}

// ------------- recorre un array
function Visualizar ($tab){
  
   foreach ($tab as $valor){
       echo $valor." * ";
   }
 
 
}


// -------------------- PROGRAMA PRINCIPAL ------------------
$tabla = array (1,2,3,4,5,6,7,8,9,10,11,12,13,14,15);
$numero = 9999;
$pos=2;

Proceso ($numero, $pos, $tabla);

Visualizar ($tabla);
 
?>