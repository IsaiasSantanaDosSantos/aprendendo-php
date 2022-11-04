<html>

<head>

    <title> Aula 16 - Ordenação </title>

</head>

<body>

    <a href="bubble.php"><button>Bubble Sort</button></a>

    <a href="insertion.php"><button>Insertion Sort</button></a>

    <a href="selection.php"><button>Selection Sort</button></a>

    <a href="quick.php"><button>Quick Sort</button></a>

    <a href="shell.php"><button>Shell Sort</button></a>

    <br>
    <hr><br>

</body>

</html>

<?php

for ($i = 0; $i < 10; $i++) {

    $desordenado[$i] = rand(1, 500);

    echo "$desordenado[$i] ";
}

?>

<br>
<hr><br>