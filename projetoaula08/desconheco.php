<?php

include "exemplo05.php";

function url() {

$servidor = $_SERVER["HTTP_HOST"];

$url = "http://" . $servidor. $_SERVER["REQUEST_URI"];

return $url;

}

$url = urldecode(url());

$tamanhodaurl = strlen($url);

$iniciovariaveis = strpos($url, "?")+1;

$variaveis = substr($url,$iniciovariaveis,($tamanhodaurl-$iniciovariaveis));

$cont=0;

while (true) {

$igual = strpos($variaveis,"=");

if ($igual != 0) {

$eseparador = strpos($variaveis, "&");

if ($eseparador == 0) {

$var[$cont] = substr($variaveis,$igual+1,(strlen($variaveis)-$igual));

$variaveis = "";

}else{

$var[$cont] = substr($variaveis,$igual+1,$eseparador-1-$igual);

$variaveis = substr($variaveis,$eseparador+1, strlen($variaveis));

}

echo $var[$cont] . "<br>";

$cont++;

}else{

break;

}

}

for ($i=0;$i<$cont;$i++) {

echo "variável " . ($i+1) . " = " . $var[$i] . "<br>";

}
