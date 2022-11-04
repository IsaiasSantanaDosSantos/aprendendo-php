<?php

$servidor = "localhost";

$usuario = "mysql";

$senha = "mysql";

$banco = "agenda";

$connect = mysqli_connect($servidor, $usuario, $senha, $banco);

$sql = mysqli_query($connect, "SELECT id, name, nascimento, sexo, FLOOR(DATEDIFF(NOW(), nascimento) / 365) AS idade FROM contatos WHERE id=" . $_GET['id'] . ";");

$dado = mysqli_fetch_array($sql);

$sql2 = mysqli_query($connect, "SELECT * from endereco WHERE contatos_id = " . $dado['id'] . ";");

$sql3 = mysqli_query($connect, "SELECT * from telefone WHERE contatos_id = " . $dado['id'] . ";");

?>

<html>

<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">

    <link type="text/css" rel="stylesheet" href="css/mycss.css">

    <title>Aula 14 - Agenda Telefonica</title>

</head>

<body>

    <script src="js/jquery.js"></script>

    <script src="js/bootstrap.min.js"></script>

    <div class="container">

        <div class="row">

            <div class="col-md-12">

                <h1> Agenda Telefônica </h1><br /><br />

            </div>

        </div>

        <div class="row">

            <div class="col-md-6">

                <a href="home.php"><button class="voltar">Voltar</button></a>

            </div>

        </div>

        <div class="row">

            <div class="col-md-12">

                <h2>Nome: <?php echo $dado['name']; ?></h2>

            </div>

        </div>

        <div class="row">

            <div class="col-md-4">

                <h4>Data de Nascimento: <?php echo $dado['nascimento']; ?></h2>

            </div>

            <div class="col-md-4">

                <h4>Idade: <?php echo $dado['idade'] ?> </hr>

            </div>

            <div class="col-md-4">

                <h4>Sexo: <?php echo $dado['sexo'] == 'M' ? "Masculino" : "Feminino" ?> </hr>

            </div>

        </div>

        <br>
        <hr><br>

        <div class="row">

            <div class="col-md-12">

                <h3>Endereços</h3>

            </div>

        </div>

        <div class="row">

            <div class="col-md-12">

                <?php

                $i = 1;

                while ($endereco = mysqli_fetch_array($sql2)) {

                    echo "

<div class='row'>

<div class='col-md-6'> <h4>Endereço 1:</h4> </div>

</div>

<div class='row'>

<div class='col-md-4'> " . $endereco['rua'] . " Nº" . $endereco['numero'] . " </div>

<div class='col-md-4'> Bairro: " . $endereco['bairro'] . " </div>

</div>";

                    $i++;
                }

                ?>

            </div>

        </div>

        <br>
        <hr><br>

        <div class="row">

            <div class="col-md-12">

                <h3>Telefones</h3>

            </div>

        </div>

        <div class="row">

            <div class="col-md-12">

                <?php

                $i = 1;

                while ($telefone = mysqli_fetch_array($sql3)) {

                    echo "

<div class='row'>

<div class='col-md-6'> <h4>Telefone 1:</h4> </div>

</div>

<div class='row'>

<div class='col-md-4'> Tipo: " . ($telefone['tipo'] == 'F' ? "Fixo" : "Celular") . " </div>

<div class='col-md-4'> Número: (" . $telefone['ddd'] . ") " . $telefone['telefone'] . " </div>

</div>";

                    $i++;
                }

                ?>

            </div>

        </div>

        <br><br>

    </div>

</body>

</html>