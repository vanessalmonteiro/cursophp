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

            $numero = $_GET["numero"] ?? "Sem número";

            $cotacao = 5.22;

            $calculoNumeroConvertido = (double) $numero / $cotacao;

            // Formatando número para 2 casas decimais
            $numeroConvertido = number_format($calculoNumeroConvertido, 2, '.', '');

            echo "<h1>Conversor de Moedas v1.0</h1>";
            
            echo "<p>Seus R$ $numero equivalem a <strong>US$ $numeroConvertido</strong></p>";  

            echo "<p><strong>* Cotação fixa de R$5,22</strong> informada diretamente no código.</p>";

        ?>

        <button onclick="javascript:history.go(-1)">Voltar</button>

        

    </main>

</body>

</html>