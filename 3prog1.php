<?php
/* 1.-)  Dados un número que representa la cantidad de valores de una serie. Visualizar una serie como la siguiente, suponiendo num=10 (10 valores):
                        1,6,3,10,5,14,7,18,9,22 */



// --------- PROGRAMA PRINCIPAL --------------------
ValoresIniciales ($num, $contaA, $contaB, $conta, $sw);
VisualizarSerie ($num, $contaA, $contaB, $conta, $sw);

// -------------------------------------
// ------ funcion que inicializa variables -----------------
function ValoresIniciales (&$num, &$contaA, &$contaB, &$conta, &$sw){
	$num=10;
	$contaA=1;
	$contaB=6;
	$conta=0;
	$sw=0;
}

// ----------- funcion que visualiza la serie --------------
function VisualizarSerie ($num, $contaA, $contaB, $conta, $sw){
while ($conta < $num){

  if ($sw==0) {
      echo $contaA." "; 
	  $contaA+=2;
	  $sw=1;
	  } else {
	  echo $contaB." "; 
	  $contaB+=4;
	  $sw=0;
  }
   $conta++;
 }
}
 // -----------------------------------------------  