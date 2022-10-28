<?php

include "home.php";

$num1 = $_POST["val1"];

$num2 = $_POST["val2"];

$opera = $_POST["operador"];

if ($opera == "==") {

$terna = $num1 == $num2 ? "SIM" : "NÃO";

}else if ($opera == ">=") {

$terna = $num1 >= $num2 ? "SIM" : "NÃO";

}else if ($opera == "<=") {

$terna = $num1 <= $num2 ? "SIM" : "NÃO";

}else if ($opera == ">") {

$terna = $num1 > $num2 ? "SIM" : "NÃO";

}else {

$terna = $num1 < $num2 ? "SIM" : "NÃO";

}

echo "$num1 $opera $num2 ? $terna!";
