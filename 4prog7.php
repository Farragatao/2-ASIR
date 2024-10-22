<?php
 /*  Cargar un matriz (4x3) con datos numéricos. Se pide:
a) visualizar la media de cada fila.
b) visualizar la media de cada columna.
c) la media global (de todos los valores).*/


// ----------------- visualiza la media de cada fila de una matriz
function Proceso1($mat){
  
  for ($i=0; $i < 4; $i++){
    $acum =0;  
    for ($k=0; $k < 3; $k++){
  
			$acum += $mat[$i][$k];		          	
		 
    }
	$media = $acum / 3;
	
	echo "<br>"."La media de la fila ".$i." es ".$media;
	
   }		
          
}

// ----------------- visualiza la media de cada columna de una matriz
function Proceso2($mat){
  echo "<br>";
  
  for ($i=0; $i < 3; $i++){
    $acum =0;  
    for ($k=0; $k < 4; $k++){
  
			$acum += $mat[$k][$i];		          	
		 
    }
	$media = $acum / 4;
	
	echo "<br>"."La media de la columna ".$i." es ".$media;
	
   }		
          
}

// ----------------- visualiza la media global
function Proceso3($mat){
  echo "<br>";
   $acum =0; 
  for ($i=0; $i < 4; $i++){
    
    for ($k=0; $k < 3; $k++){
  
			$acum += $mat[$i][$k];		          	
		 
    }
	
  }
  $media = $acum / 12;
	
  echo "<br>"."La media global es ".$media;
	
  
          
}

// -------------------- PROGRAMA PRINCIPAL ------------------
$matriz = array (array (2,4,8),
	            array (6,3,10),
				array (1,0,8),
				array (2,9,9) );

Proceso1($matriz);

Proceso2($matriz);

Proceso3($matriz);




 
?>