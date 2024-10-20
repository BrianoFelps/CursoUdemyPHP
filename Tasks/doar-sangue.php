<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Doadores de sangue</title>
    </head>
    <body>
        <?php
            $idade = 82;
            $peso = 102;

            ?>
            <?= ($idade >= 16 && $idade <= 69 && $peso >= 50) ? 'Atende aos requisitos' : "Não atende aos requisitos" ?>
    </body>
</html>