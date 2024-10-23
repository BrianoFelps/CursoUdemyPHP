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
                echo 'A variável $a é nula! <br>';
            } else{
                echo 'Não é considerada nula! $a <br>';
            }
            if (is_null($b)){
                echo 'A variável $b é nula! <br>';
            } else{
                echo 'Não é considerada nula! $b <br>';
            }
            if(is_null($c)){
                echo 'A variável $c é nula! <br>';
            } else{
                echo 'Não é considerada nula! $c <br>';
            }
            echo '<hr>';
            //empty verifica tanto os falsos, quanto nulos e vazios
            if(empty($a)){
                echo 'A variável $a é empty! <br>';
            } else{
                echo 'Não é considerada empty! $a <br>';
            }
            if (empty($b)){
                echo 'A variável $b é empty! <br>';
            } else{
                echo 'Não é considerada empty! $b <br>';
            }
            if(empty($c)){
                echo 'A variável $c é empty! <br>';
            } else{
                echo 'Não é considerada empty! $c <br>';
            }
        ?>

    </body>
</html>