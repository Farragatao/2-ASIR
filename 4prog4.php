<?php
 /*  Declarar un vector de 12 valores num�ricos.
  A continuaci�n, declarar un valor num�rico y visualizar si se encuentra en el vector o no.
  En caso afirmativo, decir en que posici�n (1�, 2�,3�, etc).*/


// -----------------devuelve la posici�n donde se encuetra un caracter en una frase
function Proceso ($num, $tabla){
  $i=0;
  
  while ($i < count($tabla) || $pos == 0){
  
	    if ($tabla[$i] == $num) {
	
		     $pos = $i;
			 
		}
		
		$i++;    
  } 
  return $pos;   
          
}

// ------------- recorre un array
function Visualizar ($pos){
  
   if ($pos == 0) {
      echo "No se encuentra en el array";
	  } else{
	    echo "Se encuentra en la posici�n ".$pos;
   }
 
}


// -------------------- PROGRAMA PRINCIPAL ------------------
$tabla = array (1,2,3,4,5,6,7,8,9,10,11,12);
$numero = 10;

Visualizar (Proceso ($numero, $tabla));
 
?>