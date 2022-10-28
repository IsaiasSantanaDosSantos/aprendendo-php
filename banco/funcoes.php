<?php

include 'home.php';

$opcao = $_POST['opcao'];

switch ($opcao) {

    case 1:

    case 2:

    case 3:

    case 4:

    case 5:

        listadados($connect, $opcao);

        break;

    case 6:

        $id = $_POST['id'];

        atualizar($connect, $id);

        break;

    case 7:

        $id = $_POST['id'];

        $nome = $_POST['nome'];

        $idade = $_POST['idade'];

        $sexo = $_POST['sexo'];

        $saldo = $_POST['saldo'];

        atualizadado($connect, $id, $nome, $idade, $sexo, $saldo);

        break;
        // case 8:

        // case 9:

        //     controla($connect);

        //     break;

        // case 10:

        //     $valor = $_POST['saldo'] - $_POST['debito'];

        //     $id = $_POST['id'];

        //     saldar($connect, $id, $valor);

        //     break;
    case 8:

        eliminadados($connect);

        break;

    case 9:

        eliminatudo($connect);

        break;

    case 10:

        $id = $_POST['id'];

        eliminar($connect, $id);

        break;
}

function listadados($connect, $ordem)
{

    include 'lista.php';

    switch ($ordem) {

        case 1:

            $ord = "ORDER BY id ASC";

            break;

        case 2:

            $ord = "ORDER BY nome";

            break;

        case 3:

            $ord = "ORDER BY idade";

            break;

        case 4:

            $ord = "ORDER BY sexo";

            break;

        case 5:

            $ord = "ORDER BY saldo";

            break;
    }

    $sql = mysqli_query($connect, "SELECT * FROM usuarios " . $ord . ";");

    echo "
    
    <div class='container'>
    
        <table class='lista'>
    
            <tr>
    
                <th>ID</th>
    
                <th>Nome</th>
    
                <th>Idade</th>
    
                <th>Sexo</th>
    
                <th>Saldo</th>
    
            </tr>
    
            ";

    $i = 0;

    while ($escrever = mysqli_fetch_array($sql)) {

        $background = $i % 2 == 0 ? "cinza" : "cinzaclaro";

        echo "
    
            <tr>
    
                <td class='" . $background . "'>" . $escrever['id'] . " </td>
    
                <td class='" . $background . "'>" . $escrever['nome'] . " </td>
    
                <td class='" . $background . "'>" . $escrever['idade'] . " </td>
    
                <td class='" . $background . "'>" . $escrever['sexo'] . " </td>
    
                <td class='" . $background . "'>" . $escrever['saldo'] . " </td>
    
            </tr>
    
            ";
        $i++;
    }
    echo "
        </table>
    </div>";
}
function atualizar($connect, $id)
{

    include 'atualiza . php';

    $sql = mysqli_query($connect, "SELECT * FROM usuarios WHERE id=" . $id . ";");

    $escrever = mysqli_fetch_array($sql);

    echo "
    
    <div class='container'>
    
    <div class='row'>
    
    <form method='post' action='funcoes.php'>
    
    <input readonly type='number' name='opcao' value='7' style='display:none'>
    
    <div class='col-md-2'>
    
    <label>ID</label>
    
    <input readonly class='formulario' type='number' name='id' value=" . $escrever['id'] . ">
    
    </div>
    
    <div class='col-md-2'>
    
    <label>Nome</label>
    
    <input class='formulario' type='text' name='nome' value=" . $escrever['nome'] . ">
    
    </div>
    
    <div class='col-md-2'>
    
    <label>Idade</label>
    
    <input class='formulario' type='number' name='idade' value=" . $escrever['idade'] . " min=21 max=65>
    
    </div>
    
    <div class='col-md-2'>
    
    <label>Sexo</label>
    
    <input class='formulario' type='text' name='sexo' value=" . $escrever['sexo'] . ">
    
    </div>
    
    <div class='col-md-2'>
    
    <label>Saldo</label>
    
    <input class='formulario' type='text' name='saldo' value=" . $escrever['saldo'] . ">
    
    </div>
    
    <div class='col-md-2'>
    
    <input class='formulario button' type='submit' value='Alterar'>
    
    </div>
    
    </form>
    
    </div>
    
    </div>
    
    ";
}

function atualizadado($connect, $id, $nome, $idade, $sexo, $saldo)
{

    $sql = mysqli_query($connect, "UPDATE usuarios SET nome='" . $nome . "', idade=" . $idade . ", sexo='" . $sexo . "', saldo=" . $saldo . " WHERE id=" . $id . ";");

    header("Location:home.php");
}

function controla($connect)
{

    include 'creddeb.php';

    $sql = mysqli_query($connect, "SELECT * FROM usuarios ORDER BY id;");

    echo "
    
    <div class='container'>
    
    <table class='elimina'>
    
    <tr>
    
    <th class='saldth'>ID</th>
    
    <th class='saldth'>Nome</th>
    
    <th class='saldth'>Idade</th>
    
    <th class='saldth'>Sexo</th>
    
    <th class='saldth'>Saldo</th>
    
    <th class='saldth'></th>
    
    <th class='saldth'></th>
    
    <th class='saldth'></th>
    
    </tr>
    
    ";

    $i = 0;

    while ($escrever = mysqli_fetch_array($sql)) {

        $background = $i % 2 == 0 ? "cinza" : "cinzaclaro";

        echo "
    
    <tr>
    
    <form method='post' action='funcoes.php'>
    
    <td class='" . $background . " saldtd'>" . $escrever['id'] . "</td>
    
    <td class='" . $background . " saldtd'>" . $escrever['nome'] . "</td>
    
    <td class='" . $background . " saldtd'>" . $escrever['idade'] . "</td>
    
    <td class='" . $background . " saldtd'>" . $escrever['sexo'] . "</td>
    
    <td class='" . $background . " saldtd'>" . $escrever['saldo'] . "</td>
    
    <td class='" . $background . " saldtd'><input type='number' name='saldo' placeholder='credito'></td>
    
    <td class='" . $background . " saldtd'><input type='number' name='debito' placeholder='debito'></td>
    
    <input readonly type='number' name='opcao' value='13' style='display:none'>
    
    <input readonly type='number' name='id' value='" . $escrever['id'] . "' style='display:none'>
    
    <td class='" . $background . " saldtd'><input class='ativa button' value='OK' type='submit'></td>
    
    </form>
    
    </tr>
    
    ";

        $i++;
    }

    echo "</table> </div>";

    function saldar($connect, $id, $valor)
    {

        $sql = mysqli_query($connect, "SELECT * FROM usuarios WHERE id=" . $id . ";");

        $escrever = mysqli_fetch_array($sql);

        $escrever['saldo'] += $valor;

        $sql = mysqli_query($connect, "UPDATE usuarios SET saldo=" . $escrever['saldo'] . " WHERE id=" . $id . ";");

        header("Location:home.php");
    }
};


function eliminadados($connect)
{

    include 'elimina.php';

    $sql = mysqli_query($connect, "SELECT * FROM usuarios ORDER BY id;");

    echo "
    
    <div class='container'>
    
    <table class='elimina'>
    
    <tr>
    
    <th class='elith'>ID</th>
    
    <th class='elith'>Nome</th>
    
    <th class='elith'>Idade</th>
    
    <th class='elith'>Sexo</th>
    
    <th class='elith'>Saldo</th>
    
    <th class='elith'>Elimina?</th>
    
    </tr>
    
    ";

    $i = 0;

    while ($escrever = mysqli_fetch_array($sql)) {

        $background = $i % 2 == 0 ? "cinza" : "cinzaclaro";

        echo "
    
    <tr>
    
    <form method='post' action='funcoes.php'>
    
    <td class='" . $background . " elitd'>" . $escrever['id'] . "</td>
    
    <td class='" . $background . " elitd'>" . $escrever['nome'] . "</td>
    
    <td class='" . $background . " elitd'>" . $escrever['idade'] . "</td>
    
    <td class='" . $background . " elitd'>" . $escrever['sexo'] . "</td>
    
    <td class='" . $background . " elitd'>" . $escrever['saldo'] . "</td>
    
    <input readonly type='number' name='opcao' value='10' style='display:none'>
    
    <input readonly type='number' name='id' value='" . $escrever['id'] . "' style='display:none'>
    
    <td class='" . $background . " elitd'><input class='delete button' value='X' type='submit'></td>
    
    </form>
    
    </tr>
    
    ";

        $i++;
    }

    echo "</table> </div>";
}

function eliminar($connect, $id)
{

    $sql = mysqli_query($connect, "DELETE FROM usuarios WHERE id=" . $id . ";");

    header("Location:home.php");
}

function eliminatudo($connect)
{

    $sql = mysqli_query($connect, "DELETE FROM usuarios WHERE id>0;");

    header("Location:home.php");
}
