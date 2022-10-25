


<?php
$num = $_POST["valor"];
$nome = $_POST["nome"];
if ($num > 10)
    echo "$nome, o $num e maior que 10";
else if ($num == 10)
    echo "$nome, o $num e igua a 10";
else
    echo "$nome, o $num é menor que 10";

include "home.php";
?> 
