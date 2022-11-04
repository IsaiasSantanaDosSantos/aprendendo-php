<?php

$servidor = "localhost";

$usuario = "mysql";

$senha = "mysql";

$banco = "agenda";

$connect = mysqli_connect($servidor, $usuario, $senha, $banco);

for ($i = 0; $i < 100; $i++) {

    preenche();
}

function preenche()
{

    global $connect;

    $nome = array(
        "Alice", "Miguel", "Sophia", "Arthur", "Helena", "Bernardo",

        "Valentina", "Heitor", "Laura", "Davi", "Isabella", "Lorenzo",

        "Manuela", "Théo", "Júlia", "Pedro", "Heloísa", "Gabriel",

        "Luiza", "Enzo", "Maria Luiza", "Matheus", "Lorena", "Lucas",

        "Lívia", "Benjamin", "Giovanna", "Nicolas", "Maria Eduarda",

        "Guilherme", "Beatriz", "Rafael", "Maria Clara", "Joaquim",

        "Cecília", "Samuel", "Eloá", "Lara", "João Miguel"
    );

    $sobrenome = array(
        "Xavier", "Ximenes", "Vargas", "Vasconcelos", "Vasques",

        "Veiga", "Veloso", "Vidal", "Tavares", "Teixeira", "Teles",

        "Torres", "Trindade", "Sampaio", "Siqueira", "Soares",

        "Ramos", "Rabelo", "Ribeiro", "Queiroz", "Paiva", "Peixoto",

        "Pimenta", "Pinheiro", "Oliveira", "Nogueira", "Magalhães",

        "Marques", "Martins", "Medeiros", "Meireles", "Gouveia",

        "Guedes", "Galvão", "Farias", "Dias", "Dantas", "Albuquerque",

        "Araújo", "Boaventura", "Botelho"
    );

    $logradouro = array("rua ", "travessa", "avenida", "alameda", "largo");

    $end = array(
        "Rio Branco", "Maceio", "Macapá", "Manaus", "Salvador", "Fortaleza",

        "Brasilia", "Vitória", "Goiania", "São Luís", "Cuiabá", "Campo Grande",

        "Belo Horizonte", "Belém", "João Pessoa", "Curitiba", "Recife", "Teresina",

        "Rio de Janeiro", "Natal", "Porto Alegre", "Porto Velho", "Boa Vista",

        "Florianópolis", "São Paulo", "Aracaju", "Palmas"
    );

    $bairro = array("Arenoso", "Águas Claras", "Barra", "Barbalho", "Bonfim", "Cabula", "Liberdade", "Itapuã", "Ribeira");

    $telefone = array("F", "C");

    $sexo = rand(0, count($nome) - 1);

    $nomecompleto = $nome[$sexo] . " " . $sobrenome[rand(0, count($sobrenome) - 1)];

    $osexo = $sexo % 2 == 0 ? "F" : "M";

    $endfinal = $logradouro[rand(0, count($logradouro) - 1)] . " " . $end[rand(0, count($end) - 1)];

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

    mysqli_query($connect, "INSERT INTO contatos (name, sexo) VALUES ('" . $nomecompleto . "', '" . $osexo . "');");

    $ultimo_valor_inserido = mysqli_insert_id($connect);

    echo "INSERT INTO contatos (name, sexo) VALUES ('" . $nomecompleto . "', '" . $osexo . "');<br>";

    echo "INSERT INTO endereco (bairro, contatos_id, numero, rua) VALUES ('" . $bairro[rand(0, count($bairro) - 1)] . "', '" . $ultimo_valor_inserido . "', '" . rand(1, 1500) . "', '" . $endfinal . "');<br>";

    echo "INSERT INTO telefone (ddd, contatos_id, telefone, tipo) VALUES ('" . $ddd . "', '" . $ultimo_valor_inserido . "', '" . $tel . "', '" . $tipo . "');<br>";

    mysqli_query($connect, "INSERT INTO endereco (bairro, contatos_id, numero, rua) VALUES ('" . $bairro[rand(0, count($bairro) - 1)] . "', '" . $ultimo_valor_inserido . "', '" . rand(1, 1500) . "', '" . $endfinal . "');");

    mysqli_query($connect, "INSERT INTO telefone (ddd, contatos_id, telefone, tipo) VALUES ('" . $ddd . "', '" . $ultimo_valor_inserido . "', '" . $tel . "', '" . $tipo . "');");
}
?>