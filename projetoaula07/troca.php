<a href="home.php">VOLTAR</a><br><br>

<?php

function troca(&$a, &$b) {

$aux = $a;

$a = $b;

$b = $aux;

}

$primeiro = 5;

$segundo = 10;

echo "Esses são os Valores antes da troca:<br>Primeiro = $primeiro<br>Segundo = $segundo<br><br>";

troca($primeiro, $segundo);

echo "Esses são os Valores depois da troca:<br>Primeiro = $primeiro<br>Segundo = $segundo";

?>