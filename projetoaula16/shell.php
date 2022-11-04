<?php

include'home.php';

shell($desordenado);

function shell($vetor){

$pet=1;

do{

$pet=3*$pet+1;

}while($pet<count($vetor));

do{

$pet/=3;

$pet=intval($pet);

for($i=$pet;$i<count($vetor);$i++){

$aux=$vetor[$i];

$j=$i-$pet;

while($j>=0&&$aux<$vetor[$j]){

$vetor[$j+$pet]=$vetor[$j];

$j-=$pet;

}

$vetor[$j+$pet]=$aux;

}

}

while($pet>1);

for ($i=0;$i<10;$i++) {

echo "$vetor[$i] ";

}

}

?>