<?php

function descobre_digito($vetor, $limite) {

$i = 0;

$soma = 0;

while ($i < $limite-1) {

$indice = $limite-$i;

$soma += $vetor[$i] * $indice;

$i++;

}

return ($soma*10)%11;

}

for ($i=0;$i<9;$i++) {

$num[$i] = rand (1, 9);

}

$num[9] = descobre_digito($num, 10);

$num[10] = descobre_digito($num, 11);

for ($i=0;$i<=10;$i++) {

echo $num[$i];

if ($i==2 or $i==5)

echo ".";

if ($i==8)

echo "-";

}

?>