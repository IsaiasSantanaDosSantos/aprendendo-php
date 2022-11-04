<?php include 'home . php'; ?>

<form action="vermelho.php" method="post">

    <input type="text" name="mensagem" placeholder="Mensagem">

    <input type="radio" name="metodo" value=1 checked>Criptografa

    <input type="radio" name="metodo" value=2>Decriptografa

    <input type="submit" value="Enviar">

</form>

<?php

if (isset($_POST['mensagem'])) {

    $mensagem = $_POST['mensagem'];

    $metodo = $_POST['metodo'];

    if ($metodo == 1) {

        criptografa($mensagem);
    } else {

        decriptografa($mensagem);
    }
}

function criptografa($mensagem)
{

    echo "<br> Mensagem Original: $mensagem <br>";

    $criptografia = str_replace("a", "ais", $mensagem);

    $criptografia = str_replace("e", "enter", $criptografia);

    $criptografia = str_replace("i", "inis", $criptografia);

    $criptografia = str_replace("o", "omber", $criptografia);

    $criptografia = str_replace("u", "ufter", $criptografia);

    $criptografia = str_replace("A", "Ais", $criptografia);

    $criptografia = str_replace("E", "Enter", $criptografia);

    $criptografia = str_replace("I", "Inis", $criptografia);

    $criptografia = str_replace("O", "Omber", $criptografia);

    $criptografia = str_replace("U", "Ufter", $criptografia);

    echo "<br> Mensagem Criptografada: $criptografia <br>";
}

function decriptografa($mensagem)
{

    echo "<br> Mensagem Criptografada: $mensagem <br>";

    $criptografia = str_replace("ais", "a", $mensagem);

    $criptografia = str_replace("enter", "e", $criptografia);

    $criptografia = str_replace("inis", "i", $criptografia);

    $criptografia = str_replace("omber", "o", $criptografia);

    $criptografia = str_replace("ufter", "u", $criptografia);

    $criptografia = str_replace("Ais", "A", $criptografia);

    $criptografia = str_replace("Enter", "E", $criptografia);

    $criptografia = str_replace("Inis", "I", $criptografia);

    $criptografia = str_replace("Omber", "O", $criptografia);

    $criptografia = str_replace("Ufter", "U", $criptografia);

    echo "<br> Mensagem Original: $criptografia <br>";
}

?>