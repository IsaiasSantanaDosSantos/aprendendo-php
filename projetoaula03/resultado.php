<?php

$numero1 = $_POST["primeiro"];

$numero2 = $_POST["segundo"];

$sinal = $_POST["sinal"];

if($sinal=="+") {

$resultado = $numero1+$numero2;

}else if($sinal == "-") {

$resultado = $numero1-$numero2;

}else if($sinal == "*") {

$resultado = $numero1*$numero2;

}else {

$resultado = $numero1/$numero2;

}

echo "O Resultado é $resultado";

include "home.php";
