<?php
/*7.-) Dados un número, obtener en una misma función el primer mayor número par siguiente al número y el primer número impar inferior al número. Visualizar ambas cantidades en otra función.*/

// ----------- PROGRAMA PRINCIPAL ------------
$num = 11;
Proceso ($num, $resul1 , $resul2);
Visualizar ($num, $resul1 , $resul2);


// ------------- funcion que obtiene ambos resultados 
function Proceso ($num, &$re1, &$re2){
 $i = $num+1;
 if ($i % 2 == 0)
      $re1 = $i;
	  else
	   $re1= $i+1;
	   
 $i = $num-1;
 if ($i % 2 != 0)
      $re2 = $i;
	  else
	   $re2= $i-1;
}
	 
 // -----------funcion  que visualiza los resultados
 function Visualizar ($num, $re1, $re2){
  echo "Numero: ".$num."<br>"; 
  echo "Primer número par siguiente: ".$re1."<br>";
  echo "Primer número impar inferior: ".$re2;
 }
    