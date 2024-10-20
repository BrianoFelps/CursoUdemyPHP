<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Switch case</title>
    </head>
    <body>
        
        <?php
            define('constante', 12);

            switch(constante){
                case 12:
                    echo 'Abóbora marinha';
                    // break;
                case 13:
                    echo ' com camarão da terra.';
                    // break;
                default:
                    echo ' Salve!';
                    // break;
            }
        ?>
    </body>
</html>