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

        

            $valorAleatorio = rand(1,100);

            

            echo "<h1>Trabalhando com números aleatórios</h1>";
            
            echo "<p>Gerando um número aleatório entre 0 e 100...</p>";

            echo "<p>O valor gerado foi $valorAleatorio </p>";

          
            

        ?>

        <button><a href="index.php"><i></i> Gerar outro</a></button>

    </section>

</body>

</html>