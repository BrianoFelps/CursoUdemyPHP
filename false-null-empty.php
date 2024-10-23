<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        
        <?php
            //false -> boolean;
            //null e empty -> valores especiais;

            $a= false; 
            $b = null; 
            $c = '';

            //is_null é exclusivo para nulos
            if(is_null($a)){
                echo 'A variável $a é nula!';
            } else{
                echo 'Não é considerada nula! $a';
            }
            if (is_null($b)){
                echo 'A variável $b é nula!';
            } else{
                echo 'Não é considerada nula! $b';
            }
            if(is_null($c)){
                echo 'A variável $c é nula!';
            } else{
                echo 'Não é considerada nula! $c';
            }

            //empty verifica tanto os falsos, quanto nulos e vazios
            if(empty($a)){
                echo 'A variável $a é nula!';
            } else{
                echo 'Não é considerada nula! $a';
            }
            if (empty($b)){
                echo 'A variável $b é nula!';
            } else{
                echo 'Não é considerada nula! $b';
            }
            if(empty($c)){
                echo 'A variável $c é nula!';
            } else{
                echo 'Não é considerada nula! $c';
            }
        ?>

    </body>
</html>