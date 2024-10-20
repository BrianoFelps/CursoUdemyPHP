<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            //(casting)

            $valor = '10.52';

            echo "$valor " . gettype($valor). ' <br/>' ;

            $valor = (float) $valor;
            
            echo "$valor " . gettype($valor). ' <br/>' ;

            $valor = (double) $valor;

            echo "$valor " . gettype($valor). ' <br/>' ;

            $valor = (int) $valor;

            echo "$valor " . gettype($valor). ' <br/>' ;

            $valor = (boolean) $valor;

            echo "$valor " . gettype($valor). ' <br/>' ;

        ?>
    </body>
</html>