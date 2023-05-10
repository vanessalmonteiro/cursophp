<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Desafio 09: Médias Aritméticas</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

    <?php 
        // Capturando os dados do Formulário Retroalimentado
        $valor1 = $_GET['valor1'] ?? 0;
        $peso1 = $_GET['peso1'] ?? 0;

        $valor2 = $_GET['valor2'] ?? 0;
        $peso2 = $_GET['peso2'] ?? 0;
    
    ?>

    <main>

        <h1>Médias Aritméticas</h1>

        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get" >

            <label for="valor1">1° Valor</label>
            <input type="number" attern="[0-9]+([,\.][0-9]+)?" min="0" step="any" name="valor1" id="valor1" value="<?= $valor1?>">

            <label for="peso1">1° Peso</label>
            <input type="number" attern="[0-9]+([,\.][0-9]+)?" min="0" step="any" name="peso1" id="peso1" value="<?= $peso1?>">

            <label for="valor2">2° Valor</label>
            <input type="number" attern="[0-9]+([,\.][0-9]+)?" min="0" step="any" name="valor2" id="valor2" value="<?= $valor2?>">

            <label for="peso2">2° Peso</label>
            <input type="number" attern="[0-9]+([,\.][0-9]+)?" min="0" step="any" name="peso2" id="peso2" value="<?= $peso2?>">

            <input type="submit" value="Calcular Médias">

        </form>
    </main>

    <section id="resultado" >
        <h2>Cálculo das Médias</h2>
        <?php 

            $mediaSimples = ($valor1 + $valor2) / 2;

            $calculoMediaPonderada = ($valor1 * $peso1) + ($valor2 * $peso2);

            $mediaPonderada = $calculoMediaPonderada / ($peso1 + $peso2);
        
            echo "<p>Analisando os valores $valor1 e $valor2:</p>";

            echo "<ul>
                <li>A <strong>Média Aritmética Simples</strong> entre os valores é igual " . number_format($mediaSimples, 2, ',', '.') . "</li>
                <li>A <strong>Média Aritmética Ponderada</strong> com pesos $peso1 e $peso2 é igual " . number_format($mediaPonderada, 2, ',', '.') . "</li>
            </ul>"
        
        ?>
    </section>

</body>

</html>