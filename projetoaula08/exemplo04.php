<?php

include "home.php";

?>

<form action="get.php">

    CPF: <input type="text" placeholder="000.000.000-00" name="cpf" size=12 maxlength=14>

    <input type="submit" value="Validar">

</form>

Agora crie o arquivo "get.php" e insira o seguinte código nele:

<?php

include "exemplo04.php";

$cpf = $_GET["cpf"];;



$i = (int)0;

$cont = 0;

while ($cont <= 13) {

    if (is_numeric(substr($cpf, $cont, 1))) {

        $num[$i] = substr($cpf, $cont, 1);

        $i++;
    }

    $cont++;
}

$somadig1 = 0;

$i = 0;

while ($i < 9) {

    $indice = 10 - $i;

    $somadig1 += $num[$i] * $indice;

    echo $i < 8 ? "$num[$i]*$indice + " : "$num[$i]*$indice<br>";

    $i++;
}

$dig1 = ($somadig1 * 10) % 11;
if ($dig1 >= 10) $dig1 = 0;
echo "$dig1<br><br>";

if ($dig1 == $num[9]) {

    $somadig2 = 0;

    $i = 0;

    while ($i < 10) {

        $indice = 11 - $i;

        $somadig2 += $num[$i] * $indice;

        echo $i < 9 ? "$num[$i]*$indice + " : "$num[$i]*$indice<br>";

        $i++;
    }

    $dig2 = ($somadig2 * 10) % 11;

    echo "$dig2<br><br>";

    if ($dig2 == $num[10]) {

        echo "<br>CPF $cpf Válido!";
    } else {

        echo "<br>CPF $cpf Inválido!";
    }
} else {

    echo "<br>CPF $cpf Inválido!";
}
?>