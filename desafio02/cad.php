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

            $antecessor = $numero - 1;
            $sucessor = $numero + 1;

            echo "<h1>Resultado final</h1>";
            
            echo "<p>O número escolhido foi <strong>$numero</strong></p>";

            echo "<p>O seu antecessor é $antecessor </p>";

            echo "<p>O seu sucessor é $sucessor </p>";

        ?>

        <button><a href="javascript:history.go(-1)"><- Voltar</a></button>

        

    </main>

</body>

</html>