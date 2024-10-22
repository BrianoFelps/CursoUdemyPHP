<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        
        <?php
            // Sequenciais (numéricos)
                $listaFrt = ['Tangerina', 'maçã', 'uva', 'banana'];
                $listaFrt[] = 'Melão';

                //ordenar por ordem alfabética e ignorar diferenças de caixa alta
                sort($listaFrt, SORT_STRING | SORT_FLAG_CASE);

                // Formatar arrays na tela
                echo '<pre>';
                    var_dump($listaFrt);
                echo '</pre><br/>';
                echo '<pre>';
                    print_r($listaFrt);
                echo '</pre><hr/>';


            // Associativos
                // Nos associativos, basicamente se coloca qual o índice na 
                //declaração da array, ou na posterior adição de itens
                $listaCarro = ['a' => 'Chevette', 13 => 'Golf','d' => 'Montana'];

                $listaCarro['t'] = 'Jeep Renegade';

                echo '<pre>';
                    print_r($listaCarro);
                echo '</pre>';
        ?>

    </body>
</html>