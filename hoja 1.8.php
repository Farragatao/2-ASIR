<?php

   $numero=40;
   Visualizar1 ($numero);
   Visualizar2 ($numero);
   Visualizar3 ($numero);



  function Visualizar1 ($numero){
 echo "CON FOR. Divisores de ".$numero."<br>";
 for ($i=$numero; $i >=1; $i--){
  
   if ($numero % $i == 0) {
   
              echo $i. " ";
   }   	 
	 
 }
}

 function Visualizar2 ($numero){
 echo "<br>"."CON WHILE. Divisores de ".$numero."<br>";
 $i=$numero;
 
 do {
 
  if ($numero % $i == 0)
       echo $i." ";
  
  $i--;
 
 } while ($i > 0);
}


function Visualizar3 ($numero) {
 echo "<br>"."CON DO WHILE. Divisores de ".$numero."<br>";
 $i=$numero;
 
 while ($i > 0) {
 
  if ($numero % $i == 0)
       echo $i." ";
  
  $i--;
 
 } 
}
		  
?>	       
	