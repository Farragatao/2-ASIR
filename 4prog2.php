<?php
 /* Declarar un carácter y a continuación una frase.
  Visualizar cuantas veces se encuentra el carácter en la frase. */


// ----------- cuantas las veces que se encuentra un carater en una frase
function Proceso ($car, $fra){
  $i=0;
  $conta=0;
 
  while ($i < strlen($fra)){
  
		if ($fra[$i] == $car) {
		
	         $conta++;
				 
        } 
		
		$i++;    
  }    
  return $conta;        
}


function Visualizar ($car, $fra, $dato){

 echo "El caracter -".$car."- se encuentra: ".$dato." veces en la frase: ".$fra;
 
}


// -------------------- PROGRAMA PRINCIPAL ------------------
$caracter = 'a';
$frase = "c/Alameda nº 34";

Visualizar ($caracter, $frase, Proceso($caracter, $frase));
 
?>