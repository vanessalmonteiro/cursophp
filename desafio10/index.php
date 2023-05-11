<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Desafio 10: Cálculo de Idade</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

    <?php 
        // Capturando os dados do Formulário Retroalimentado
        $ano = $_GET['ano'] ?? 0;
        $anoCalculo = $_GET['anoCalculo'] ?? 0;
    
    ?>

    <main>

        <h1>Calculando sua idade</h1>

        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get" >

            <label for="ano">Em que ano você nasceu?</label>
            <input type="number" name="ano" id="idAno"  min="1900" max="<?= $anoAtual = date("Y") - 1?>" value="<?= $ano?>">

            <label for="anoCalculo">Quer saber sua idade em que ano? (atualmente estamos em <?= $anoAtual = date("Y")?>)</label>
            <input type="number" name="anoCalculo" id="idAnoCalculo" min="1901" value="<?= $anoCalculo?>">

            <input type="submit" value="Qual será minha idade?">

        </form>
    </main>

    <section id="resultado" >
        <h2>Resultado Final</h2>
        <?php 

            $anoAtual = date("Y");
        
            $resultado = $anoCalculo - $ano;

            echo "<p>Quem nasceu em $ano vai ter <strong>$resultado anos</strong> em $anoAtual!</p>"
            
        ?>
    </section>

</body>

</html>