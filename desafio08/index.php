<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Desafio 08: Raízes de um número</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

    <?php 
        // Capturando os dados do Formulário Retroalimentado
        $numero = $_GET['numero'] ?? 0;
    
    ?>

    <main>

        <h1>Informe um número</h1>

        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get" >

            <label for="numero">Número</label>
            <input type="number" attern="[0-9]+([,\.][0-9]+)?" min="0" step="any" name="numero" id="idNumero" value="<?= $numero?>">

            <input type="submit" value="Calcular Raízes">

        </form>
    </main>

    <section id="resultado" >
        <h2>Resultado Final</h2>
        <?php 
        
            $raizQuadrada = sqrt($numero);
            $raizCubica = $raizQuadrada / 2;

            echo "<p>Analisando o <strong>número $numero</strong>, temos:</p>";

            echo "<ul>
            <li>A sua raiz quadrada é " . number_format($raizQuadrada, 3, ',', '.') . "</li>
            <li>A sua raiz cúbica é " . number_format($raizCubica, 3, ',', '.') . "</li>
            </ul>";
        
        ?>
    </section>

</body>

</html>