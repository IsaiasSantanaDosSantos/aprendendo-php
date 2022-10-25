<?php

include "cpfFor.php";

for ($i=0;$i<9;$i++) {

$num[$i] = rand (1, 9);

}

$i = 0;

$somadig = 0;

while ($i < 9) {

$indice = 10-$i;

$somadig += $num[$i] * $indice;

$i++;

}

$num[9] = ($somadig*10)%11;

$i = 0;

$somadig = 0;

while ($i < 10) {

$indice = 11-$i;

$somadig += $num[$i] * $indice;

$i++;

}

$num[10] = ($somadig*10)%11;

for ($i=0;$i<=10;$i++) {

echo $num[$i];

if ($i==2 or $i==5)

echo ".";

if ($i==8)

echo "-";

}

?>