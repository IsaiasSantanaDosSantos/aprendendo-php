<?php

include "recursividade.php";

function fatorial($num=0) {

if ($num == 0 or $num == 1) {

return 1;

}else {

return $num*fatorial($num-1);

}

}

$numero = $_POST["numero"];

echo fatorial($numero);

?>