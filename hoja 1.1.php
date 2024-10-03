<?php

  $a = -50;
  $b = 50;
  $suma = Sumar ($a, $b);  
  Visualizar ($suma);
  

 function Sumar ($n1, $n2){
   
  $suma = $n1 + $n2;
  return $suma;
 }

function Visualizar  ($n){
    
  if ($n > 0) {  
        echo "La suma es positiva: ".$n;
        } else {
             if ($n < 0) {
                echo "La suma es negativa: ".$n;
                } else {
                    echo "La suma es cero: ".$n;
             }      
  }
}            
             
?>  