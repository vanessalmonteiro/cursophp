<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Desafio 07: Informe seu salário</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

    <?php 
        // Capturando os dados do Formulário Retroalimentado
        $salario = $_GET['salario'] ?? 0;
    
    ?>

    <main>

        <h1>Informe seu salário</h1>

        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get" >

            <label for="salario">Salário (R$)</label>
            <input type="number" name="salario" id="idSalario" value="<?= $salario?>">

            <p>Considerando o slário mínimo de <strong>R$1.380,00</strong></p>

            <input type="submit" value="Calcular">

        </form>
    </main>

    <section id="resultado" >
        <h2>Resultado Final</h2>
        <?php 
        
            $salarioMinimoAtual = 1380;

            $salariosMinimos = $salario / $salarioMinimoAtual;

            $restoSalario = $salario % $salarioMinimoAtual;

            echo "<p>Quem recebe um salário de R$ $salario ganha <strong>" . number_format($salariosMinimos, 0, ',', '.') . " salários mínimos</strong> + R$ $restoSalario</p>";
        
        ?>
    </section>

</body>

</html>