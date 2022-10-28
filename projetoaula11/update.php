<html>

<head>

    <title>Aula 11 - Banco de Dados</title>

</head>

<body>

    <?php

    $id = $_POST['id'];

    $servidor = "localhost";

    $usuario = "mysql";

    $senha = "mysql";

    $banco = "banco_dinheirix";

    $connect = mysqli_connect($servidor, $usuario, $senha, $banco);

    function encontrar($connect, $id)
    {

        $sql = mysqli_query($connect, "SELECT * FROM usuarios WHERE id=" . $id . ";");

        $escrever = mysqli_fetch_array($sql);

        echo "

<input readonly type='number' name='id' value=" . $escrever['id'] . ">

<input type='text' name='nome' value=" . $escrever['nome'] . ">

<input type='number' name='idade' value=" . $escrever['idade'] . " min=21 max=65>

<input type='text' name='sexo' value=" . $escrever['sexo'] . ">

<input type='text' name='saldo' value=" . $escrever['saldo'] . ">

";
    }

    ?>

    <form method="post" action="scriptupdate.php">

        <?php encontrar($connect, $id) ?>

        <input type="submit" value="Alterar">

    </form>

</body>

</html>