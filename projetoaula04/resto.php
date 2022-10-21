<?php

include 'home.php';

$dividendo = $_POST["num1"];

$divisor = $_POST["num2"];

$resto = $dividendo % $divisor;

$quociente = (int)($dividendo / $divisor);

echo "$dividendo / $divisor = $quociente resto $resto";

?>