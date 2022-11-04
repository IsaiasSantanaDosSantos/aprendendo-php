<?php

$servidor = "localhost";

$usuario = "mysql";

$senha = "mysql";

$banco = "agenda";

$connect = mysqli_connect($servidor,$usuario,$senha, $banco);

if(isset($_GET)) {

listacontatos($_GET['busca']);

}else {

listacontatos();

}

function listacontatos($busca="") {

global $connect;

if ($busca != "") {

$sql = mysqli_query($connect, "SELECT * FROM contatos WHERE name LIKE '%" . $busca . "%';");

}else {

$sql = mysqli_query($connect, "SELECT * FROM contatos;");

}

echo "

<table>

<tr>

<th class='head'>ID</th>

<th class='head'>NOME</th>

<th class='head'></th>

<th class='head'></th>

</tr>";

$i=0;

while($dado=mysqli_fetch_array($sql)) {

$classe = $i%2==0 ? "par" : "impar";

echo "

<tr>

<td class='" . $classe . "'> " . $dado['id'] . " </td>

<td class='" . $classe . "'> " . $dado['name'] . " </td>

<td class='" . $classe . "'> <a href='vercontato.php?id=" . $dado['id'] . "' ><button class='pesquisa'><span class='glyphicon glyphicon-search'></span></button></a></td>

<td class='" . $classe . "'> <a href='eliminacontato.php?id=" . $dado['id'] . "' ><button class='elimina'><span class='glyphicon glyphicon-remove-sign'></span></button></a></td>

</tr>";

$i++;

}



echo "</table>";

}
?>
