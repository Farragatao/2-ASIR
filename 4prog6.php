<?php
 /*   Declarar un array con 15 valores numéricos enteros. 
 Entonces, visualizar cuantas veces se ha tecleado el 10, 
 cuantas el 20, 30, 40, 50, 60, 70, 80, y cuantas el 90. 
	Nota: (Utilizar un vector  de 9 elementos que se procesen como 9 acumuladores.)*/


// ----------------- inrtercambia los 5 primeros valores con los 5 últimos 
function Proceso($tabla, &$tabla_acum){
  
  for ($i=0; $i < 15; $i++){
  
	    if ($tabla[$i] >= 10 && $tabla[$i] <= 90) {
				     
		     if ($tabla[$i] % 10 == 0) {
                
				$indice = $tabla[$i] / 10 - 1;
				
				$tabla_acum[$indice]++;   
			 }
					          	

			 
		}
		
	
  } 

          
}

// ------------- recorre un array
function Visualizar ($tab){
  
  $i = 0;
  while ($i < 9){
      $valor = ($i+1) * 10;
     echo "<br>"." el número ".$valor." está ".$tab[$i]." veces";
	 $i++;
  }
 
}


// -------------------- PROGRAMA PRINCIPAL ------------------
$tabla = array (45,56,90,35,10,90,40,54,33,21,70,90,10,15,60);

$tabla_acum= array (0,0,0,0,0,0,0,0,0);

Proceso ($tabla, $tabla_acum);

Visualizar ($tabla_acum);
 
?>