<?php include 'home . php'; ?>

<form action="forcabruta.php" method="post">

    <input type="text" name="mensagem" placeholder="Mensagem">

    <input type="submit" value="Enviar">

</form>

<?php

if (isset($_POST['mensagem'])) {

    $mensagem = $_POST['mensagem'];

    for ($i = 0; $i < 26; $i++) {

        echo "$mensagem<br>";

        $mensagem = decriptografa($mensagem);
    }
}

function decriptografa($mensagem)
{

    $criptografia = "";

    for ($i = 0; $i < strlen($mensagem); $i++) {

        $cripto[$i] = substr($mensagem, $i, 1);

        if ($cripto[$i] == 'z')

            $cripto[$i] = 'a';

        else

            $cripto[$i]++;

        $criptografia .= $cripto[$i];
    }

    return $criptografia;
}

?>