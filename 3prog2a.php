<?php
/*2a.-)  Crea el código PHP donde generes:
	a) Un bucle while que cuente desde 50 hasta 40 (fíjate que en este caso es decreciente)
	b) Un bucle while que a partir de una variable $contador que toma valores de 1 a 5, muestre por pantalla el 	doble del valor de $contador, es decir, que muestre 2, 4, 6, 8, 10.  */

// -------- PROGRAMA PRINCIPAL --------------	
Visualizar1();
Visualizar2();

// ------------------------
// -------- funcion apartado a
function Visualizar1(){
  $i=50;
  while ($i >= 40){
     echo $i." ";
     $i--;
  }
  echo "<br>";
}

// -------- funcion apartado b
function Visualizar2(){
  $i=1;
  while ($i <= 5){
     printf ("%d ",$i*2);
     $i++;
  }
  echo "<br>";
}


