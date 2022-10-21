<html>

<head>

    <title>Aula 02</title>

</head>

<body>
    <?php

    $name = $_POST["nome"];

    $idade = $_POST["idade"];

    $profissao = $_POST["profissao"];

    $signo = $_POST["signo"];

    if ($name != "" and $idade != "" and $profissao != "" and $signo != "") {

        echo $name . " tem " . $idade . " anos, é do signo de " . $signo . " e trabalha como " . $profissao;
    }

    ?>

    <form method="post" action="processamento.php">

        Nome: <input type="text" name="nome" value="" size=10><br>

        Idade: <input type="number" name="idade" value="" size=10><br>

        Profissão: <input type="text" name="profissao" value="" size=10><br>

        Signo: <input type="text" name="signo" value="" size=10><br>

        <br>

        <input type="submit" name="sub" value="Enviar!">

    </form>

</body>

</html>