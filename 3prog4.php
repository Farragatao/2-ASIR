<?php
 /* 3.-) Dada una base1 y un exponente1, obtener el exponencial1 correspondiente. Por ejemplo: 2 elevado a 8 es 2*2*2*2*2*2*2*2 es decir se multiplica la base tantas veces como diga el exponente.
	En el mismo programa, posteriormente, dados una base2 y un exponente2, visualizar el exponencial2 	correspondiente.
	 Visualizar si son iguales ambos exponenciales o en caso contrario, cual es mayor el primero o el segundo. */

// ------- PROGRAMA PRINCIPAL  --------------
$baseA=2;
$expoA=3;
$resul1 = Exponencial($baseA, $expoA);
Visualizar ("primer", $resul1);

$baseB=2;
$expoB=5;
$resul2 = Exponencial($baseB, $expoB);
Visualizar ("segundo", $resul2);
Comparar ($resul1, $resul2);


// --------------------- funcion que calcula el exponencial ---
function Exponencial ($ba, $ex){
  $re=1;
  for($i=1;$i<=$ex;$i++){
	$re*=$ba;
  }	
  return $re;
}

// ----------- funcion que visualiza un resultado
function Visualizar ($cadena, $resultado){
 echo "El ".$cadena." exponencial es: ".$resultado."<br>";
}

// ----------funcion comparar los exponenciales -----------  
function Comparar ($reA, $reB){
if ($reA == $reB)
             echo "Ambos exponenciales son iguales";
			else 
			  if ($reA > $reB)  
	   		            echo "El primer exponencial es mayor";
					else 
    				    echo "El segundo exponencial es mayor";
}
?>
