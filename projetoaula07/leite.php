<br><a href="leite.php">Voltar</a>
<?php 
function leite ($ovo=false){
    if($ovo){
        echo"Tinham ovos, então trouse 5 itros de leite";
    } else {
        echo " Não tinha ovos, então trouxe 2 litros de leite";
    }
}
leite();
echo "<br>";
leite(true);
?>