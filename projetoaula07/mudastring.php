<a href="string.php">VOLTAR</a>

<?php

function maiuscula(&$texto)
{

    $texto = strtoupper($texto);
}

function minuscula(&$texto)
{

    $texto = strtolower($texto);
}

function preencher($texto)
{

    echo "<br>Preencher texto à direita: " . str_pad($texto, 7, "*", STR_PAD_RIGHT) . "<br>";

    echo "<br>Preencher texto à esquerda: " . str_pad($texto, 7, "*", STR_PAD_LEFT) . "<br>";

    echo "<br>Preencher texto em ambos os lados: " . str_pad($texto, 7, "*", STR_PAD_BOTH) . "<br>";
}

function repete($texto)
{

    echo "<br>Texto repetido 5 vezes: " . str_repeat($texto, 5) . "<br>";
}

function substitui(&$texto)
{

    $texto = str_replace("a", "", $texto);

    $texto = str_replace("e", "", $texto);

    $texto = str_replace("i", "", $texto);

    $texto = str_replace("o", "", $texto);

    $texto = str_replace("u", "", $texto);
}

$texto = $_POST["texto"];

echo "<br>Original: $texto<br>";

maiuscula($texto);

echo "<br>Maiúsculo: $texto<br>";

minuscula($texto);

echo "<br>Minúsculo: $texto<br>";

preencher($texto);

repete($texto);

echo "<br>Esse é o tamanho do texto: " . $tamanho = strlen($texto) . "<br>";

substitui($texto);

echo "<br>Sem vogais: $texto<br>";

echo "<br>Existe o texto "tst" na posição: " . $posicao = strpos($texto, "tst");

?>