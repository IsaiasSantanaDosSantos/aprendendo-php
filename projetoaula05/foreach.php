<html>

<head>

    <title>Aula 06 - Foreach</title>

</head>

<body>

    <a href="home.php">VOLTAR</a>

    <br> <br>

</body>

<?php

$cores = array("azul", "amarelo", "verde", "vermelho", "lilás", "roxo");

foreach ($cores as $cor) {

    echo "Cor: <b>$cor</b><br>";
}

?>

</html>