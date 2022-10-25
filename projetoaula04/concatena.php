<?php

$texto1 = "Batatinha quando nasce espalha a rama pelo chão";

$texto2 = "Menininha quando dorme, põe a mão no coração";

$texto3 = $texto1 . " " . $texto2;

echo "Esse é o texto 1: $texto1<br>Esse é o texto 2: $texto2<br>Esse é o texto 3: $texto3";

$var = 5; //Atribuição simples, $var passa a conter o valor 5
echo "$var <br>";
$var += 7; //Atribuição com adição, $var, que continha o valor 5, agora recebe o valor 5+7=12;
echo "$var <br>";
$var %= 3; //Atribuição com módulo, $var, que continha o valor 12, recebe a operação 12%3=0;
echo "$var <br>";
$var = "oi"; //Atribuição simples, $var, que continha o valor 0, substitui esse valor por "oi"
echo "$var <br>";
$var .= " testando"; //Atribuição com concatenação, $var continha a string "oi", passa a conter a string "oi testando"
echo "$var <br>";
