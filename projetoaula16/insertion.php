<?php

include 'home.php';

insertion($desordenado);

function insertion($vetor) {

$cont=1;

for ($i=0;$i<10;$i++) {

$min = $i;

for ($j=$i;$j<10;$j++) {

if ($vetor[$j] < $vetor[$min]) $min = $j;

$cont++;

}

$aux = $vetor[$min];

for ($j=$min;$j>$i;$j--) {

$vetor[$j] = $vetor[$j-1];

$cont++;

}

$vetor[$i] = $aux;

}

echo "$cont iterações realizadas!<br>";

for ($i=0;$i<10;$i++) {

echo "$vetor[$i] ";

}

}
