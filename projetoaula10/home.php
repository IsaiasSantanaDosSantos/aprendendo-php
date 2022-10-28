<html>

<head>

    <title>Aula 10 - Banco de Dados</title>

</head>

<body>

    <form action="search.php">

        <input type="text" name="nome" placeholder="Nome" size=50>

        <input type="submit" value="PROCURAR">

    </form>

    <?php

    $servidor = "localhost";

    $usuario = "mysql";

    $senha = "mysql";

    $banco = "banco_dinheirix";

    $connect = mysqli_connect($servidor, $usuario, $senha, $banco);

    listardados($connect);

    function listardados($connect)
    {

        $sql = mysqli_query($connect, "SELECT * FROM usuarios;");

        echo "

<table>

<tr>

<th>ID</th>

<th>Nome</th>

<th>Idade</th>

<th>Sexo</th>

<th>Saldo</th>

</tr>

";

        while ($escrever = mysqli_fetch_array($sql)) {

            echo "

<tr>

<td>" . $escrever["id"] . "</td>

<td>" . $escrever["nome"] . "</td>

<td>" . $escrever["idade"] . "</td>

<td>" . $escrever["sexo"] . "</td>

<td>" . $escrever["saldo"] . "</td>

</tr>

";
        }

        echo "</table>";
    }

    ?>

</body>

</html>