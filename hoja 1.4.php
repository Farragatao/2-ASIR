<?php

  $sueldo = 1500;
  Visualizar ($sueldo);




function Visualizar ($sueldo){

echo "Sueldo: ".$sueldo."<br>";
  if ($sueldo > 600){
         echo "Es superior a 600"."<br>";	   
	     if ($sueldo > 1200){
		          echo "Es superior a 1200"."<br>";
		          if ($sueldo > 1800){
      		          echo "Es superior a 1800"."<br>";
			      }
		 }	  
  }

}

  
  
			  	   	 
  
		  
?>	       
	 
	    