<html>

<head>

    <title> Aula 04 - Exercício de Resto </title>

</head>

<body>

    <form method="post" action="resto.php">

        <input type="number" name="num1"> / <input type="number" name="num2">

        <input type="submit" value="=">

    </form>
    <hr>
    <form method="post" action="ternario.php">

        <input type="number" name="val1">

        <select name="operador">

            <option value="==">==</option>

            <option value=">=">=</option>

            <option value="<=">
                <=< /option>

            <option value=">">></option>

            <option value="<">
                << /option>

        </select>

        <input type="number" name="val2">

        <input type="submit" value="?">

    </form>
</body>

</html>