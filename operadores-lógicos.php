<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Verificação de operadores</title>
    </head>
    <body>
        <?php
        // A maioria dos operadores é a mesma que os padrões da programação. ||, &&, !. Achei um deles curioso, que é o XOR. Também, no php, existe diferença na etapa de sintaxe. No caso, pode-se escrever AND, OR, XOR.

        //No XOR, o bloco só será adentrado em caso de SOMENTE UMA das condições for verdadeira
            if(true XOR false)
                echo 'só uma é verdadeira <br/>';

            if(true AND /* && */ true)
                echo 'as duas são verdadeiras <br/>';

            if(false OR /* || */ false)
                echo 'as duas são falsas <br/>';
        ?>
    </body>
</html>