<?php

include "page2.php";

$cpf = $_POST["cpf"];

$num1 = substr($cpf, 0, 1);

$num2 = substr($cpf, 1, 1);

$num3 = substr($cpf, 2, 1);

$num4 = substr($cpf, 4, 1);

$num5 = substr($cpf, 5, 1);

$num6 = substr($cpf, 6, 1);

$num7 = substr($cpf, 8, 1);

$num8 = substr($cpf, 9, 1);

$num9 = substr($cpf, 10, 1);

$num10 = substr($cpf, 12, 1);

$num11 = substr($cpf, 13, 1);

$somadig1 = $num1*10 + $num2*9 + $num3*8 + $num4*7 + $num5*6 + $num6*5 + $num7*4 + $num8*3 + $num9*2;

echo "<br>$num1*10 + $num2*9 + $num3*8 + $num4*7 + $num5*6 + $num6*5 + $num7*4 + $num8*2 + $num9*2 = $somadig1<br>";

$dig1 = ($somadig1*10)%11;

if($dig1 >= 10) {
    $dig1 = 0;
}
echo "$dig1<br>";


if ($dig1 == $num10) {

$somadig2 = $num1*11 + $num2*10 + $num3*9 + $num4*8 + $num5*7 + $num6*6 + $num7*5 + $num8*4 + $num9*3 + $num10*2;

echo "<br>$num1*11 + $num2*10 + $num3*9 + $num4*8 + $num5*7 + $num6*6 + $num7*5 + $num8*4 + $num9*3 + $num10*2 = $somadig2<br>";

$dig2 = ($somadig2*10)%11;

echo "$dig2<br>";

if ($dig2 == $num11) {

echo "<br>CPF $cpf Válido!";

}else {

echo "<br>CPF $cpf Inválido!";

}

}
else {

echo "<br>CPF $cpf Inválido!";

}
