<html>

<head>

    <title>Aula 10 - Banco de Dados</title>

</head>

<body>

    <?php

    try {

        $connect = new PDO('mysql:host=localhost;dbname=banco_dinheirix', 'mysql', 'mysql');

        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        create($connect);

        insert($connect, 20);
    } catch (PDOException $e) {

        echo 'ERROR: ' . $e->getMessage();
    }

    function insert($connect, $quantidade)
    {

        $nome = array("joão", "maria", "fernando", "fernanda", "joaquim", "gabriela", "gabriel", "jamile", "jonas", "guilhermina");

        $sobrenome = array("de sousa", "de alencar", "silva", "gomes", "farias", "brito", "alves", "de sá", "marques", "santos");

        for ($i = 0; $i < $quantidade; $i++) {

            $idade = rand(21, 65);

            $saldo = (rand(50000, 999999)) / 100;

            $randnome = rand(0, 9);

            $randsobr = rand(0, 9);

            $sexo = (($randnome % 2) == 0) ? "Masculino" : "Feminino";

            $nomecompleto = $nome[$randnome] . " " . $sobrenome[$randsobr];

            echo "$nomecompleto, $idade, $sexo, $saldo <br>";

            $connect->query("INSERT INTO usuarios (nome, idade, sexo, saldo) VALUES ('$nomecompleto', '$idade', '$sexo', '$saldo');");
        }
    }

    function create($connect)
    {

        $connect->query('

CREATE TABLE usuarios (

id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,

nome VARCHAR(50) NOT NULL,

idade INT NOT NULL,

sexo VARCHAR(10),

saldo REAL);');
    }

    ?>

</body>

</html>