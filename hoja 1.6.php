<?php

  $a= 1;
  $b= 2;
  Visualizar ($a, $b);

  function Visualizar ($a, $b){
  
  $suma = $a + $b;
  $pro = $a * $b;
   echo "La suma es: ".$suma."<br>";
   echo "El producto es: ".$pro."<br>";
  
   if ($suma > $pro) {
     echo "La suma es superior al producto";
	 } else {
	   if ($suma < $pro) {
        	 echo "La suma es inferior al producto";
			} else {
			     echo "SON IGUALES";
	   }			 
   }
 }
		  
?>	       
	 
	    