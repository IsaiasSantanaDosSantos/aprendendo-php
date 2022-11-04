<?php

include 'home.php';

bubble($desordenado);

function bubble($vetor) {

$cont=1;

for ($i=0;$i<10;$i++) {

for ($j=$i;$j<10;$j++) {

if ($vetor[$i] > $vetor[$j]) {

$aux = $vetor[$i];

$vetor[$i] = $vetor[$j];

$vetor[$j] = $aux;

}

$cont++;

}

}

echo "$cont iterações realizadas!<br>";

for ($i=0;$i<10;$i++) {

echo "$vetor[$i] ";

}

}
