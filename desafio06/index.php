<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Desafio 06: Anatomia de uma Divisão</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

    <?php 
        // Capturando os dados do Formulário Retroalimentado
        $dividendo = $_GET['dividendo'] ?? 0;
        $divisor = $_GET['divisor'] ?? 0;
    
    ?>

    <main>

        <h1>Anatomia de uma Divisão</h1>

        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get" >

            <label for="dividendo">Dividendo</label>
            <input type="number" name="dividendo" id="idDividendo" value="<?= $dividendo?>">

            <label for="divisor">Divisor</label>
            <input type="number" name="divisor" id="idDivisor" value="<?= $divisor?>">
            <input type="submit" value="Analisar">

        </form>
    </main>

    <section id="resultado" >
        <h2>Resultado da Soma</h2>
        <?php 
        
            $divisao = $dividendo / $divisor;

            $restoDivisao = $dividendo % $divisor;

            echo "<p>$dividendo / $divisor é = $divisao. O resto da divisão é $restoDivisao .</p>";
        
        ?>
    </section>

</body>

</html>