<html>

<head>

    <title>Aula 11 - Banco de Dados</title>

</head>

<body>

    <?php

    $servidor = "localhost";

    $usuario = "mysql";

    $senha = "mysql";

    $banco = "banco_dinheirix";

    $connect = mysqli_connect($servidor, $usuario, $senha, $banco);

    function listardados($connect)
    {

        $sql = mysqli_query($connect, "SELECT * FROM usuarios;");

        while ($escrever = mysqli_fetch_array($sql)) {

            echo "<option value=" . $escrever['id'] . "> " . $escrever['nome'] . "</option>";
        }
    }

    ?>

    <form method="post" action="update.php">

        <select name="id">

            <?php listardados($connect) ?>

        </select>

        <input type="submit" value="Alterar">

    </form>

</body>

</html>