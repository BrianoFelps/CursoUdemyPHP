<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Imposto a ser pago</title>
    </head>
    <body>

        <?php
            function calcularImpostoDeRenda ($salario){
                if($salario <= 2259.20){
                    $aliquota = 0;
                } else if ($salario >= 2259.21 and $salario <= 2826.65){
                    $aliquota = 0.075;
                } else if ($salario >= 2826.66 and $salario <= 3751.05){
                    $aliquota = 0.15;
                } else if ($salario >= 3751.06 and $salario <= 4664.68){
                    $aliquota = 0.225;
                } else {
                    $aliquota = 0.275;
                }

                $impostoDeRenda = $aliquota * $salario;
                return $impostoDeRenda;
            }
            ?>

            <h1>Imposto de renda</h1>
            <?= calcularImpostoDeRenda(8456.66) ?>
    </body>
</html>