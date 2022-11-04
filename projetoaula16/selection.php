<?php

include 'home.php';

selection($desordenado);

function selection($vetor) {

$cont=1;

for ($i=0;$i<10;$i++) {

$min = $i;

for ($j=$i;$j<10;$j++) {

if ($vetor[$min] > $vetor[$j]) {

$min = $j;

}

$cont++;

}

$aux = $vetor[$min];

$vetor[$min] = $vetor[$i];

$vetor[$i] = $aux;

}

echo "$cont iterações realizadas!<br>";

for ($i=0;$i<10;$i++) {

echo "$vetor[$i] ";

}

}
