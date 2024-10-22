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
            
            /* O random pega um valor aleatório dentre o valor mínimo
            até o valor máximo possível do sistema;
            existe outra função para identificar esse valor máximo:*/
            echo getrandmax() . '</br>';
            // Pode-se definir o limite na função nativa também
            echo (rand(0, 10) * $num) . '</br>';

            // Raíz quadrada
            echo sqrt($num) . '</br>';

        ?>
    </body>
</html>