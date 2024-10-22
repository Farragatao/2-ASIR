<?php
 /* Declarar una frase. 
               a) Visualizar cuantos espacios contiene.
               b) Cuantas letras minúsculas contiene.
	           c) Cuantas letras mayúsculas contiene. */


// -------------- obtienes tres resultados ------------------
function Proceso ($fra, &$conta1, &$conta2, &$conta3){
  $i=0;
  $conta1=0;
  $conta2=0;
  $conta3=0;
 while ($i < strlen($fra)){
  
		if ($fra[$i] == ' ') {
		
	         $conta1++;
				 
          }  else {
		   		if ($fra[$i] >= 'a' && $fra[$i] <= 'z') {
								
				    $conta2++;
							   
                } else 
			       if ($fra[$i] >= 'A' && $fra[$i] <= 'Z') {
				   
        				    $conta3++;
                   }
		}
		$i++;
  }
}

// ------------------------ visualiza tres resultados ------------
function Visualizar ($dato1, $dato2, $dato3){

 echo "Número de espacios: ".$dato1."<br>";

 echo "Número de letras minúsculas: ".$dato2."<br>";
 
 echo "Número de letras mayúsculas: ".$dato3;

}


$frase = "c/Alameda nº 34";
 Proceso($frase, $resul1, $resul2, $resul3);
 Visualizar ($resul1, $resul2, $resul3);
 

?>