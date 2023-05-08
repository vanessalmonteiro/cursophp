<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Desafio 03: Conversor de Moedas v1.0</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

    <section>

        <h1>Conversor de Moedas v1.0</h1>

        <form action="cad.php" method="get">

            <label for="numero">Quantos R$ você tem na carteira?</label>
            <input type="number" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any" name="numero" id="idnumero">

            <input type="submit" value="Converter">

        </form>

    </section>

</body>

</html>