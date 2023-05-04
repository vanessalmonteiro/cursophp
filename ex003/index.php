<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tipos primitivos em PHP</title>

</head>

<body>

    <h1>Teste de tipos primitivos</h1>

    <?php 

        // 0x = hexadecimal,  0b = binário,  0 = Octal
        // $num = 010;
        // echo "O valor da variável é $num";

        // $v = "Gustavo";
        // var_dump($v); // Mostra o tipo da variável

        // $num = 3e2; // 3 x 10(2)
        // echo "O valor é $num";

        // $num = (int) "950"; // (int) -> força conversão de um tipo
        // var_dump($num);

        // $casado = false;
        // var_dump($casado);
        // print "O valor para casado é $casado";

        $vetor = [6, 2.5, 9, "vanessa", 5];
        echo "O vetor é " . serialize($vetor);
        var_dump($vetor);

        // class Pessoa {
        //     private string $nome;
        // }
        // $p = new Pessoa;
        // var_dump($p);
    ?>

</body>

</html>