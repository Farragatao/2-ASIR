<?php
 /* Declarar una frase. 
               a) Visualizar cuantos espacios contiene.
               b) Cuantas letras min�sculas contiene.
	           c) Cuantas letras may�sculas contiene. */


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

 echo "N�mero de espacios: ".$dato1."<br>";

 echo "N�mero de letras min�sculas: ".$dato2."<br>";
 
 echo "N�mero de letras may�sculas: ".$dato3;

}


$frase = "c/Alameda n� 34";
 Proceso($frase, $resul1, $resul2, $resul3);
 Visualizar ($resul1, $resul2, $resul3);
 

?>