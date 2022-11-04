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

                <a href="novocontato.php"><button class="adicionar">Adicionar Contato</button></a>

            </div>

        </div>

        <div class="row">

            <div class="col-md-12">

                <form action='home.php'>

                    <h3>Procurar: <input type="text" name="busca"></h3> <br />

                </form>

            </div>

        </div>

        <div class="row">

            <div class="col-md-12">

                <?php

                include 'lista.php';

                ?>

            </div>

        </div>

        <br><br>

    </div>

</body>

</html>