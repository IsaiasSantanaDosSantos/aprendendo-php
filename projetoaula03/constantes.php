<?php

include "home.php";

define("pi", 3.1415);

define("KC", 273);

define("FC", 32);

define("CF", 1.8);

define("gravidade", 9.80665);

$numero = $_POST["valor"];

$teorema = $_POST["teorema"];

if ($teorema == "area") {

$resultado = 2 * pi * $numero;

}else if($teorema == "massa") {

$resultado = $numero / gravidade;

}else if($teorema == "ftc") {

$resultado = ($numero - FC) / CF;

}else if($teorema == "ctf") {

$resultado = (CF * $numero) + FC;

}else if($teorema == "ctk") {

$resultado = $numero + KC;

}else {

$resultado = $numero - KC;

}

echo "O Resultado é $resultado";
