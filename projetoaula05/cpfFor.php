<html>

<head>

    <title>Aula 06 - Automatizando o Script CPF</title>

</head>

<body>

    <a href="home.php">VOLTAR</a>

    <form method="post" action="validar.php">

        CPF: <input type="text" placeholder="000.000.000-00" name="cpf" size=12 maxlength=14>

        <input type="submit" value="Validar">

    </form>

    <form method="post" action="gerar.php">

        <input type="submit" value="Gerar">

    </form>

</body>

</html>