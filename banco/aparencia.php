<html>

<head>
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">

    <link type="text/css" rel="stylesheet" href="css/mycss.css">

    <title>Aula 11 - Banco Dinheirix</title>

</head>

<body>

    <h1> Bem Vindo a Central de Gerencia do Banco </h1><br /><br />

    <h3> Escolha uma das opções abaixo: </h3> <br />

    <form method="post" action="execucao.php">

        <h4><input type="radio" name="opcao" value="1"> 1 - Listar Clientes <br /> </h4>

        <h4><input type="radio" name="opcao" value="2"> 2 - Atualizar Clientes <br /></h4>

        <h4><input type="radio" name="opcao" value="3"> 3 - Creditar/Debitar Clientes <br /></h4>

        <h4><input type="radio" name="opcao" value="4"> 4 - Eliminar Clientes <br /><br /></h4>

        <input type="submit" value="IR">

    </form>

    <hr>
    <hr>
    <hr>

    <div class="container">

        <div class="row lista">

            <div class="col-md-12">

                <form method="post" action="funcoes.php">

                    <select name="opcao">

                        <option value="1">Ordenar por ID</option>

                        <option value="2">Ordenar por Nome</option>

                        <option value="3">Ordenar por Idade</option>

                        <option value="4">Ordenar por Sexo</option>

                        <option value="5">Ordenar por Saldo</option>

                    </select>

                    <input class="button" type="submit" value="IR">

                </form>

            </div>

        </div>

    </div>
</body>

</html>