<?php

$id = $_POST['id'];

$nome = $_POST['nome'];

$idade = $_POST['idade'];

$sexo = $_POST['sexo'];

$saldo = $_POST['saldo'];

$servidor = "localhost";

$usuario = "mysql";

$senha = "mysql";

$banco = "banco_dinheirix";

$connect = mysqli_connect($servidor, $usuario, $senha, $banco);

$sql = mysqli_query($connect, "UPDATE usuarios SET nome='" . $nome . "', idade=" . $idade . ", sexo='" . $sexo . "', saldo=" . $saldo . " WHERE id=" . $id . ";");

header("Location:home.php");
