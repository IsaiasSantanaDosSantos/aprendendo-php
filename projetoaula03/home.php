<html>

<head>

    <title>Aula 03 - Calculadora</title>

</head>

<body>

    <form method="post" action="resultado.php">

        <input type="number" name="primeiro" value="0">

        <select name="sinal">

            <option value="+" selected>+</option>

            <option value="-">-</option>

            <option value="*">*</option>

            <option value="/">/</option>

        </select>

        <input type="number" name="segundo" value="0">

        <input type="submit" name="sub" value="=">

    </form>
    <br>
    <hr style="height:4px; background:red;"> <br>

    <form method="post" action="constantes.php">

        <input type="number" name="valor" value="0">

        <select name="teorema">

            <option value="area" selected>Área da Circunferência</option>

            <option value="massa">Peso para Massa</option>

            <option value="ftc">Fahrenheit para Celsius</option>

            <option value="ctf">Celsius para Fahrenheit</option>

            <option value="ctk">Celsius para Kelvin</option>

            <option value="ktc">Kelvin para Celsius</option>

        </select>

        <input type="submit" name="submitconstantes" value="=">

    </form>

</body>

</html>