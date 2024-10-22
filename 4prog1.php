<?php
 // Declarar una frase. Visualizar cuantos caracteres numéricos y cuantos alfabéticos contiene.



function Proceso1 ($fra, &$conta1, &$conta2){
  $i=0;
  $conta1=0;
  $conta2=0;
  while ($i < strlen($fra)){
  
		if ($fra[$i] >= '0' && $fra[$i] <= '9') {
		
	         $conta1++;
				 
          } else {
		   		if ($fra[$i] >= 'a' && $fra[$i] <= 'z' || $fra[$i] >= 'A' && $fra[$i] <= 'Z') 
				
				    $conta2++;			   
        }
		
		$i++;    
  }            
}


function Visualizar ($dato1, $dato2){

 echo "Número de caracteres numéricos: ".$dato1."<br>";
 
 echo "Número de caracteres alfabéticos: ".$dato2;

}


$frase = "c/Alameda nº 34";

Proceso1($frase, $resul1, $resul2);
Visualizar ($resul1, $resul2);
?>