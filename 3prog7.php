<?php
/*7.-) Dados un n�mero, obtener en una misma funci�n el primer mayor n�mero par siguiente al n�mero y el primer n�mero impar inferior al n�mero. Visualizar ambas cantidades en otra funci�n.*/

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
  echo "Primer n�mero par siguiente: ".$re1."<br>";
  echo "Primer n�mero impar inferior: ".$re2;
 }
    