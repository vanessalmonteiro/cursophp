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
    
    <header>
        <h1>Resultado do processamento</h1>
    </header>

    <main>

        <?php 

            // $nome = $_GET["nome"] ?? "sem nome";
            // $sobrenome = $_GET["sobrenome"] ?? "desconhecido";
            // echo "<p>É um prazer te conhecer <strong>$nome $sobrenome</strong>! Este é meu site!</p>";

            // $nome = $_POST["nome"] ?? "sem nome";
            // $sobrenome = $_POST["sobrenome"] ?? "desconhecido";
            // echo "<p>É um prazer te conhecer <strong>$nome $sobrenome</strong>! Este é meu site!</p>";

            $nome = $_REQUEST["nome"] ?? "sem nome";
            $sobrenome = $_REQUEST["sobrenome"] ?? "desconhecido";
            echo "<p>É um prazer te conhecer <strong>$nome $sobrenome</strong>! Este é meu site!</p>";

        ?>

        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>

    </main>

</body>

</html>