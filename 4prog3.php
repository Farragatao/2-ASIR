<?php
 /*  Declarar un vector de 10 valores numéricos. 
 Una vez cargado, intercambiar los 5 primeros con los 5 últimos. 
 Por ejemplo:  si el vector  tiene: 1,2,3,4,5,6,7,8,9,10 quedará: 6,7,8,9,10,1,2,3,4,5.*/


// ----------------- inrtercambia los 5 primeros valores con los 5 últimos 
function Proceso (&$tabla){
  $i=0;
 
  while ($i < 5){
  
	    $aux = $tabla[$i];
		$tabla[$i] = $tabla[$i+5];
	    $tabla[$i+5]= $aux; 
	
		
		$i++;    
  }    
          
}

// ------------- recorre un array
function Visualizar ($tabla){
  $i=0;
 
  while ($i < count($tabla)){
  
        echo $tabla[$i]." ";  	
		
		$i++;    
  }    


 
}


// -------------------- PROGRAMA PRINCIPAL ------------------
$tabla = array (1,2,3,4,5,6,7,8,9,10);

Proceso ($tabla);
Visualizar ($tabla);
 
?>