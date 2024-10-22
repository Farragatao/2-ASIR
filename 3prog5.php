<?php 
/* 5.-) Dado un número n1 visualizar si es primo o no. A continuación dado un segundo número n2 visualizar si es primo o no. Si son primos ambos números: visualizar el mensaje correspondiente "AMBOS SON PRIMOS" y la media de ambos. Utilizar dos switchs ($sw1 y $sw2) para obtener si es primo o no.*/

// -------------- PROGRAMA PRINCIPAL ---------------
$num1 = 11;
Visualizar1 ($num1, Primo ($num1));

$num2 = 29;
Visualizar1 ($num2, Primo ($num2));

Visualizar2 ($num1, Primo ($num1), $num2, Primo ($num2));


// ----------- funcion que comprueba si un número es primo
function Primo($num){
  $sw=0;
  $sw2=1;
  $i=$num-1;
  while ($sw==0){
     if ($num % $i == 0) {
	      $sw=1;
		  $sw2=0;
		  } else {
		  $i--;
		  if ($i==1){
		     $sw=1;
		  }	 
      }	  
  } 
  return $sw2;
 }
		  
// ----------- visualiza si es primo o no
function Visualizar1 ($num, $sw){		  
   if ($sw)
       echo "El numero ".$num. " ES PRIMO". "<br>";
     else
       echo "El numero ".$num. " NO ES PRIMO". "<br>";
}

		  
// -------------- funcion que compara ambos resultados
function Visualizar2($nu1, $resul1, $nu2, $resul2){

 if ($resul1 && $resul2) {
      echo "AMBOS SON PRIMOS"."<br>";
      printf ("La media es: %.2f", ($nu1+$nu2)/ 2);
 }   
 
}  
   
   

