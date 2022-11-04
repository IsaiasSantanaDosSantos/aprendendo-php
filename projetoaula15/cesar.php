<?php include 'home . php'; ?>

<form action="cesar.php" method="post">

    <input type="text" name="mensagem" placeholder="Mensagem">

    <input type="number" name="chave" placeholder="Chave">

    <input type="radio" name="metodo" value=1 checked>Criptografa

    <input type="radio" name="metodo" value=2>Decriptografa

    <input type="submit" value="Enviar">

</form>

<?php

if (isset($_POST['chave'])) {

    $chave = $_POST['chave'];

    $mensagem = $_POST['mensagem'];

    $metodo = $_POST['metodo'];

    if ($metodo == 1) {

        criptografa($mensagem, $chave);
    } else {

        decriptografa($mensagem, $chave);
    }
}

function criptografa($mensagem, $chave)
{

    echo "<br> $mensagem <br>";

    $criptografia = "";

    for ($i = 0; $i < strlen($mensagem); $i++) {

        $cripto[$i] = substr($mensagem, $i, 1);

        for ($j = 0; $j < $chave; $j++) {

            if ($cripto[$i] == 'z')

                $cripto[$i] = 'a';

            else

                $cripto[$i]++;
        }

        $criptografia .= $cripto[$i];
    }

    echo " < br > $criptografia < br > ";
}

function decriptografa($mensagem, $chave)
{

    echo "<br> $mensagem <br>";

    $criptografia = "";

    for ($i = 0; $i < strlen($mensagem); $i++) {

        $cripto[$i] = substr($mensagem, $i, 1);

        for ($j = 0; $j < 26 - $chave; $j++) {

            if ($cripto[$i] == 'z')

                $cripto[$i] = 'a';

            else

                $cripto[$i]++;
        }

        $criptografia .= $cripto[$i];
    }

    echo " < br > $criptografia < br > ";
}

?>