<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            // Principais funções matemáticas nativas, hão outras.

            $num = 213.43;

            echo ceil($num) . '</br>';
            echo floor($num) . '</br>';

            // Arredonda com base nas casas decimais
            echo round($num) . '</br>';
            
            echo (rand() * $num) . '</br>';

            // Raíz quadrada
            echo sqrt($num) . '</br>';

        ?>
    </body>
</html>