<?php
/*8.-) Dadas un nombre en $nom, el primer apellido en $ape1 y el segundo apellido en $ape2. Obtener un nombre completo con todos los datos separados por un espacio, en una sola variable. Visualizar el resultado en otra función diferente.*/

// ----------- PROGRAMA PRINCIPAL ------------

InicializarValores ($nom, $ape1, $ape2);
Visualizar (Proceso ($nom, $ape1, $ape2));


// -------------- funcion que inicializa los valores
function InicializarValores (&$nom, &$ape1, &$ape2){
  $nom= "Manuel";
  $ape1="Lopez";
  $ape2="Ramirez";
}

// -------------- funcion que obtiene el resultado
function Proceso ($nom, $ape1, $ape2){
  $resul=$nom." ".$ape1." ".$ape2;
  return $resul;
}

// ------------ funcion que visualiza el resultado
function Visualizar ($dato){
  echo "Resultado: ".$dato;
}
