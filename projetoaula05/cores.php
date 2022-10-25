<html>

<head>

    <title>Aula 06 - Cores</title>

</head>

<body>

    <a href="home.php">VOLTAR</a>

    <br> <br>

</body>

<?php

$cores = array(

    "Primárias" => array("Azul", "Vermelho", "Amarelo"),

    "Secundárias" => array("Verde", "Laranja", "Roxo"),

    "Terciárias" => array("Azul-Esverdeado", "Vermelho-Alaranjado", "Amarelo-Arroxeado")

);

foreach ($cores as $bases => $coresbase) {

    echo "A Base é: $bases<br>";

    foreach ($coresbase as $cor) {

        echo "Cor: $cor<br>";
    }

    echo "<br>";
}

?>

</html>