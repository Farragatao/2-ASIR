<?php

  $nota = 5;
  $edad = 23;
  $car = "M";
  Visualizar ($nota, $edad, $car);


function Visualizar ($nota, $edad, $car) {
  echo "Nota: ".$nota."<br>";
  echo "Edad: ".$edad."<br>";
  echo "Sexo: ".$car."<br>";

  if ($edad < 18) { 
      echo "NO ES POSIBLE, es menor de edad.";
	  } else {
		  if ($nota < 5) { 	 
			    echo "NO ES POSIBLE, nota suspensa.";
			 } else {
  	        		   if ($car == "V" || $car == "v"){
			                echo "ACEPTADO";
        				   } else {
    						   if ($car == "M" || $car == "m"){
				    	            echo "ACEPTADA";
							   } 	
			           }
		  }   
  }
		  
}
		  
?>	       
	 
	    