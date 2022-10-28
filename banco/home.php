<?php

include 'aparencia.php';

$servidor = "localhost";

$usuario = "mysql";

$senha = "mysql";

$banco = "banco_dinheirix";

$connect = mysqli_connect($servidor, $usuario, $senha, $banco);

function lista($connect)
{

    include 'lista.php';
}

function atualiza($connect)
{

    include "atualiza.php";
}

function creddeb($connect)
{

    include "creddeb.php";
}

function elimina($connect)
{

    include "elimina.php";
}

?>



