<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Desafio 05: Analisando um número Real</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

    <section>

        <h1>Analisador de Número Real</h1>

        <form action="cad.php" method="request">

            <label for="numero">Número Real:</label>
            <input type="number" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any" name="numero" id="idnumero">

            <input type="submit" value="Analisar">

        </form>

    </section>

</body>

</html>