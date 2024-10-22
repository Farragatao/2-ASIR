<?php
 /* Declarar una matriz mat[4][3] con números. Una vez cargada:
Pasar cada fila a una fila superior, esto se hace: primero se guarda la cuarta fila
   en un vector  tabAux, y luego:
La tercera pasa a la cuarta.
La segunda a la tercera
La primera a la segunda.

Y por último, el vector  tabAux se  pasa  o guarda en  la primera.
- Visualizar la matriz. .*/


// ----------------- visualiza la media de cada fila de una matriz
function Proceso(&$mat){
  
  for ($i=0; $i < 3; $i++){ // ------- paso de la cuarta fila a un array auxiliar
  
       $aux [$i] = $mat[3][$i];
	   
  }
  
  // ------  paso del resto de filas a una superior
  for ($i=2; $i >=0; $i--){
    
    for ($k=0; $k < 3; $k++){
  
       $mat[$i+1][$k] = $mat[$i][$k];
		 
    }
         
  }
  
  // -------------- paso del array auxiliar a la fila cero
  for ($i=0; $i < 3; $i++){ // ------- paso de la cuarta fila a un array auxiliar
  
       $mat[0][$i] = $aux [$i];
	   
  }
}
   
   //-------------------------- visualiza toda la matriz por filas y columnas  
function Visualizar ($mat){	     
    for ($i=0; $i <4; $i++){
    
         for ($k=0; $k < 3; $k++){
		 
		     echo $mat[$i][$k]." ";
		 }
		 
		 echo "<br>";
	}
}
		 
		 
// -------------------- PROGRAMA PRINCIPAL ------------------
$matriz = array (array (2,4,8),
	            array (6,3,10),
				array (1,0,8),
				array (2,9,9) );

Proceso($matriz);


Visualizar ($matriz);



 
?>