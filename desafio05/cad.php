<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <main>

        <?php 

            $numero = $_REQUEST["numero"] ?? "Sem número";

            $numeroInteiro = number_format($numero, 0, '.', '');

            echo "<h1>Analisador de Número Real</h1>";
            
            echo "<p>Analisando o número <strong>$numero</strong> informado pelo usuário:</p>";  

            echo "
            <ul>
                <li>A parte inteira do número é <strong>$numeroInteiro</strong></li>
                <li>A partir fracionária do número é <strong>numeroFracionado</strong></li>
            </ul>
            ";

        ?>

        <button onclick="javascript:history.go(-1)">Voltar</button>

        

    </main>

</body>

</html>