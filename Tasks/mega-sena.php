<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Imposto a ser pago</title>
    </head>
    <body>

        <?php
            $numeros = [];

            while(count($numeros) <= 5){

                $numero = rand(1, 60);

                if(!in_array($numero ,$numeros)){
                    $numeros[] = $numero; //critério de parada
                }
            }
            
            echo'<pre>';
            print_r($numeros);
            echo'</pre>';
        ?>
    </body>
</html>