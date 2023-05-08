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

            $inicio = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");

            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

            $dados = json_decode(file_get_contents($url), true);

            $cotacao = $dados["value"][0]["cotacaoCompra"];

            var_dump($cotacao);

            $calculoNumeroConvertido = (double) $numero / $cotacao;

            // Formatando número para 2 casas decimais
            $numeroConvertido = number_format($calculoNumeroConvertido, 2, '.', '');

            echo "<h1>Conversor de Moedas v2.0</h1>";
            
            echo "<p>Seus R$ $numero equivalem a <strong>US$ $numeroConvertido</strong></p>";  

            echo "<p>* Cotação obtida diretamente do site do <strong>Banco Central do Brasil</strong>.</p>";

        ?>

        <button onclick="javascript:history.go(-1)">Voltar</button>

        

    </main>

</body>

</html>