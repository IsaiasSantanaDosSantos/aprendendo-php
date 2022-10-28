<html>

<head>

    <title>Aula 10 - Banco de Dados</title>

</head>

<body>

    <a href="home.php"><button>VOLTAR</button></a>

    <form action="search.php">

        <input type="text" name="nome" placeholder="Nome" size=50>

        <input type="submit" value="PROCURAR">

    </form>

    <?php

    $busca = $_GET['nome'];

    $servidor = "localhost";

    $usuario = "mysql";

    $senha = "mysql";

    $banco = "banco_dinheirix";

    $connect = mysqli_connect($servidor, $usuario, $senha, $banco);

    $consulta = "SELECT * FROM usuarios WHERE nome LIKE '%" . $busca . "%';";

    $resultado = mysqli_query($connect, $consulta);

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

    while ($escrever = mysqli_fetch_array($resultado)) {

        echo "

<tr>

<td>" . $escrever['id'] . "</td>

<td>" . $escrever['nome'] . "</td>

<td>" . $escrever['idade'] . "</td>

<td>" . $escrever['sexo'] . "</td>

<td>" . $escrever['saldo'] . "</td>

</tr>

";
    }

    echo "</table>";

    ?>

</body>

</html>