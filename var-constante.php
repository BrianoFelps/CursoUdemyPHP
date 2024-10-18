<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>

        <?php

            define('CONSTANTE', 'coloque o valor da const aqui');
            define('CONSTANTE2', 'coloque o valor da const aqui');
            define('CONSTANTE3', 'coloque o valor da const aqui');

            echo CONSTANTE . "<br/>";
            echo CONSTANTE2 . "<br/>";
            echo CONSTANTE3 . "<br/><br/>";

            if(2 === 2.0){
                echo 'Verdade';
            } else {
                echo 'Mentira';
            }

            // Retorno simples
            if(true)
                echo 'aaaa'

        ?>

    </body>
</html>