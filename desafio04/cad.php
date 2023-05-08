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

            $calculoNumeroConvertido = (double) $numero / 5.22;

            // Formatando número para 2 casas decimais
            $numeroConvertido = number_format($calculoNumeroConvertido, 2, '.', '');

            echo "<h1>Conversor de Moedas v2.0</h1>";
            
            echo "<p>Seus R$ $numero equivalem a <strong>US$ $numeroConvertido</strong></p>";  

            echo "<p>* Cotação obtida diretamente do site do <strong>Banco Central do Brasil</strong>.</p>";

        ?>

        <a href="javascript:history.go(-1)"><button>Voltar</button></a>

        

    </main>

</body>

</html>