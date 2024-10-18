<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // A variável php é dinamica, não precisa ter declaração explícita, como o JS. Também igual ao JS é a nomeação valida, atribuição de arrays com vários tipos, etc. UM ADENDO: A VARIÁVEL NÃO SUPORTA CARACTERES ESPECIAIS EM SEU NOME, QUE NÃO SEJA O UNDERLINE _
        $variavel_PHP;
        $variavel_PHP = ['aaaa', 1, 3.5, true, false, function(){}];
        echo $variavel_PHP[0], '<br/>';
        $variavel_PHP = 'aaaaa';
        echo $variavel_PHP, '<br/>';
        $variavel_PHP = 2;
        echo $variavel_PHP, '<br/>';
        $variavel_PHP = 2.4;
        echo $variavel_PHP, '<br/>';
        $variavel_PHP = true;
        echo $variavel_PHP, '<br/>';
    ?>

    <main>
        <h1>
            <?= $variavel_PHP ?>
        </h1>
    </main>
</body>
</html>