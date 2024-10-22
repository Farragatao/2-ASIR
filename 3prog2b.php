<?php 
/* 2b.-) Crea el código PHP donde generes:
	a) Un bucle for que cuente desde 50 hasta 500 de 25 en 25.
	b) Un bucle for que a partir de una variable de control $j que toma valores de 100 a 500 de 100 en 100, 	muestre por pantalla el resultado de dividir la variable de control por 20. En este caso, el resultado será 5 	(que es 100/20…), 10 (que es 200/20…), 15, 20, 25. */


// -------- PROGRAMA PRINCIPAL --------------	
Visualizar1();
Visualizar2();


// -------- funcion apartado a
function Visualizar1(){
  for ($i=50; $i <= 500; $i+=25) {
     echo $i." ";
  }
  echo "<br>";
}

// -------- funcion apartado b
function Visualizar2(){
   for ($j=100; $j <= 500; $j+=100) {
     printf ("%d ",$j/20);
   }
  echo "<br>";
}


