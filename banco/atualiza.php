<div class='container'>

    <div class='row'>

        <form method="post" action="funcoes.php">

            <select name="id">

                <?php listadedados($connect) ?>

            </select>

            <input readonly type="number" name="opcao" value="6" style="display:none">

            <input type="submit" value="Alterar">

        </form>

    </div>

</div>

<?php

function listadedados($connect)
{

    $sql = mysqli_query($connect, "SELECT * FROM usuarios");

    while ($escrever = mysqli_fetch_array($sql)) {

        echo "<option value=" . $escrever['id'] . "> " . $escrever['id'] . ' - ' . $escrever['nome'] . "</option>";
    }
}

?>