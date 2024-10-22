<?php
 /*  Declara dos arrays unidimensionales con 8 valores numéricos. Sumar ambos y obtener un tercer array, sumando el primero de uno con el primero del segundo y almacenando la suma en el tercero, y así sucesivamente.*/
// -------------------- PROGRAMA PRINCIPAL ------------------
$tabla1 = array (1,2,3,4,5,6,7,8);
$tabla2 = array (1,2,3,4,5,6,7,8);
$tabla3 = array();

$tabla3 = Suma ($tabla1, $tabla2);

Visualizar ($tabla3);


// ----------------- suma dos array y obiene un tercero
function Suma ($tabla1, $tabla2){
  $tab = array();
  $i=0;
 
  while ($i < count($tabla1)){
  
	    $tab[] = $tabla1[$i] + $tabla2[$i];		
		
		$i++;    
  }    
  return $tab;
          
}

// ------------- recorre un array
function Visualizar ($tab){
  $i=0;
 
  while ($i < count($tab)){
  
        echo $tab[$i]." ";  	
		
		$i++;    
  }  
  echo "<br>";
}



 
?>