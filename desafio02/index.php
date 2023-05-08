<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Desafio 02: Trabalhando com números aleatórios</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

    <header>
        <h1>Trabalhando com números aleatórios</h1>
    </header>

    <section>


        <?php 

            $valorMinimo = 0;
            $valorMaximo = 100;

            $valorAleatorio = rand($valorMinimo,$valorMaximo);

            echo "<h1>Trabalhando com números aleatórios</h1>";
            
            echo "<p>Gerando um número aleatório entre $valorMinimo e $valorMaximo...</p>";

            echo "<p>O valor gerado foi <strong>$valorAleatorio</strong></p>";

        ?>

        <button onclick="javascript:document.location.reload()">Gerar </button>

    </section>

</body>

</html>