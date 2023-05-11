<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Desafio 11: Calculadora de tempo</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

    <?php 
        // Capturando os dados do Formulário Retroalimentado
        $segundos = $_GET['segundos'] ?? 0;
    
    ?>

    <main>

        <h1>Calculadora de Tempo</h1>

        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get" >

            <label for="segundos">Qual é o total de segundos?</label>
            <input type="number" name="segundos" id="idSegundos" value="<?= $segundos?>">

            <input type="submit" value="Calcular">

        </form>
    </main>

    <section id="resultado" >
        <h2>Totalizando tudo</h2>
        <?php 
        
            

            echo "<p></p>";

            echo "<ul>
                <li> </li>
                <li> </li>
            </ul>"
        
        ?>
    </section>

</body>

</html>