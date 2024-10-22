<?php
/*
3.-) Dados 3 valores numéricos, obtener en un programa PHP:
	- Visualizar por cada valor si es perfecto o no (un número es perfecto cuando es igual a la suma de sus 	divisores, incluyendo el uno y excluyendo el mismo número).
	 Por ejemplo el 6 es perfecto, ya que  6 = 3 + 2 + 1
     Visualizar SI o NO son los tres perfectos.
*/

// ----------------- PROGRAMA PRINCIPAL ------------
$num1 = 7;
$num2 = 6;
$num3 = 9;

Visualizar1 ($num1, Comprobar ($num1));    
Visualizar1 ($num2, Comprobar ($num2));    
Visualizar1 ($num3, Comprobar ($num3));    

Visualizar2 (Comprobar ($num1), Comprobar ($num1), Comprobar ($num1));


// ----- funcion que comprueba si un numero es perfecto -----
function Comprobar ($nu){
  $sw=0;
  $i=$nu - 1;
  $acum=0;
  while  ($i > 0){
    if ($nu % $i == 0) { 
	      $acum += $i;
	}
	$i--;
  }
  if ($nu == $acum) {
      $sw = 1;
   }
   return $sw;
 }	  
   	
// -----------------------------------
function Visualizar1 ($num, $sw){
   if ($sw) {
      echo "El numero ".$num." ES perfecto"."<br>";
   } else {
      echo "El numero ".$num." NO es perfecto"."<br>";
   }

}
   
 // ---------------------------------
 function Visualizar2 ($sw1, $sw2, $sw3){
  if ($sw1 && $sw2 && $sw3)
       echo "LOS TRES SON PERFECTOS";
      else
       echo "NO SON LOS TRES PERFECTOS";
 }