<?php

$servidor = "localhost";

$usuario = "mysql";

$senha = "mysql";

$banco = "agenda";

$connect = mysqli_connect($servidor, $usuario, $senha, $banco);

for ($i = 1; $i < 100; $i++) preencher($i);

function preencher($id)
{

    $mes = rand(1, 12);

    $ano = rand(1970, 2005);

    if ($mes == 1 or $mes == 3 or $mes == 5 or $mes == 7 or $mes == 8 or $mes == 10 or $mes == 12) {

        $dia = rand(1, 31);
    } else if ($mes == 2) {

        if ($ano % 4 == 0 and $ano != 2000) {

            $dia = rand(1, 29);
        } else {

            $dia = rand(1, 28);
        }
    } else {

        $dia = rand(1, 30);
    }

    $data = $dia . "/" . $mes . "/" . $ano;

    global $connect;

    mysqli_query($connect, "UPDATE contatos SET nascimento=STR_TO_DATE('" . $data . "', '%d/%m/%Y') WHERE id=" . $id . ";");
}
