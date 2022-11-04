<?php

include 'home.php';

$array1 = array("pera", "uva", "maçã", "goiaba", "melancia", "banana", "jabuticaba");

$array2 = array("boi", "frango", "peixe", "porco", "carneiro", "preá");

$array3 = array("suco", "chá", "café", "leite", "água", "vitamina");

$array4 = array("bebida" => "leite", "carne" => "peixe", "fruta" => "melancia");

echo "<br><h1>Vetor Indices KEYS</h1>";

$indices = array_keys($array4);

foreach ($indices as $indice) {

    echo "<br>Indice: $indice == Valor:

$array4[$indice]<br>";
}

echo "<br><h1>Vetor Array23 MERGE</h1>";

$array23 = array_merge($array2, $array3);

foreach ($array23 as $valor) {

    echo "<br>$valor<br>";
}

echo "<br><h1>Vetor Array3 PUSH</h1>";

array_push($array3, "achocolatado", "refrigerante");

foreach ($array3 as $valor) {

    echo "<br>$valor<br>";
}

array_pop($array3);

echo "<br><h1>Vetor Array3 POP</h1>";

foreach ($array3 as $valor) {

    echo "<br>$valor<br>";
}

array_shift($array3);

echo "<br><h1>Vetor Array3 SHIFT</h1>";

foreach ($array3 as $valor) {

    echo "<br>$valor<br>";
}

array_unshift($array3, "suco", "refrigerante");

echo "<br><h1>Vetor Array3 UNSHIFT</h1>";

foreach ($array3 as $valor) {

    echo "<br>$valor<br>";
}

arsort($array23);

echo "<br><h1>Vetor Array23 ARSORT</h1>";

foreach ($array23 as $valor) {

    echo "<br>$valor<br>";
}

asort($array23);

echo "<br><h1>Vetor Array23 ASORT</h1>";

foreach ($array23 as $valor) {

    echo "<br>$valor<br>";
}

echo "<br><h1>Vetor Array23 COUNT</h1><br>" .

    count($array23) . "<br>";

asort($array4);

echo "<br><h1>Vetor Array4 KSORT</h1>";

foreach ($array4 as $valor) {

    echo "<br>$valor<br>";
}
?>