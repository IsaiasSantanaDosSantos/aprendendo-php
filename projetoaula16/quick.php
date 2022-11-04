<?php

include 'home.php';

$vetor = quick($desordenado);

for ($i=0;$i<10;$i++) {

echo "$vetor[$i] ";

}

function quick($vetor) {

$tamanho = count($vetor);

if($tamanho <= 1){

return $vetor;

}

else{

$pivo = $vetor[0];

$esquerdo = $direito = array();

for($i = 1; $i < count($vetor); $i++) {

if($vetor[$i] < $pivo) {

$esquerdo[] = $vetor[$i];

}else{

$direito[] = $vetor[$i];

}

}

return array_merge(quick($esquerdo), array($pivo), quick($direito));

}

}

?>