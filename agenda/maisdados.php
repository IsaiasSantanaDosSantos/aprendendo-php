<?php

$servidor = "localhost";

$usuario = "mysql";

$senha = "mysql";

$banco = "agenda";

$connect = mysqli_connect($servidor, $usuario, $senha, $banco);

for ($i = 1; $i < 100; $i++) {

    for ($j = 1; $j < rand(1, 10); $j++) {

        maisendereco($i);
    }

    for ($j = 1; $j < rand(1, 10); $j++) {

        maistelefone($i);
    }
}

function maistelefone($id)
{

    global $connect;

    $telefone = array("F", "C");

    $tipo = $telefone[rand(0, 1)];

    $ddd = rand(0, 9) * 10 + rand(0, 9);

    $tel = 0;

    if ($tipo == "F") {

        for ($i = 7; $i >= 1; $i--) {

            $tel += $i * pow(10, $i);
        }
    } else {

        $tel = 9 * pow(10, 9);

        for ($i = 7; $i >= 1; $i--) {

            $tel += $i * pow(10, $i);
        }
    }

    mysqli_query($connect, "INSERT INTO telefone (ddd, contatos_id, telefone, tipo) VALUES ('" . $ddd . "', '" . $id . "', '" . $tel . "', '" . $tipo . "');");
}

function maisendereco($id)
{

    global $connect;

    $logradouro = array("rua ", "travessa", "avenida", "alameda", "largo");

    $end = array(
        "Rio Branco", "Maceio", "Macapá", "Manaus", "Salvador", "Fortaleza",

        "Brasilia", "Vitória", "Goiania", "São Luís", "Cuiabá", "Campo Grande",

        "Belo Horizonte", "Belém", "João Pessoa", "Curitiba", "Recife", "Teresina",

        "Rio de Janeiro", "Natal", "Porto Alegre", "Porto Velho", "Boa Vista",

        "Florianópolis", "São Paulo", "Aracaju", "Palmas"
    );

    $bairro = array("Arenoso", "Águas Claras", "Barra", "Barbalho", "Bonfim", "Cabula", "Liberdade", "Itapuã", "Ribeira");

    $endfinal = $logradouro[rand(0, count($logradouro) - 1)] . " " . $end[rand(0, count($end) - 1)];

    mysqli_query($connect, "INSERT INTO endereco (bairro, contatos_id, numero, rua) VALUES ('" . $bairro[rand(0, count($bairro) - 1)] . "', '" . $id . "', '" . rand(1, 1500) . "', '" . $endfinal . "');");
}
?>