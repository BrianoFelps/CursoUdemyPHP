<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        
        <?php
            /* 
            in_array() retorna true ou false 
            array_search() retorna o índice, caso exista
            */
            $listaFrt = ['Tangerina', 'Maçã', 'Uva', 'Banana'];    
            
            $existe = in_array(ucfirst('uva') , $listaFrt);

            echo ($existe ? 'Existe!' : 'Não existe'); 

            echo '<hr>';

            $listaNm = ["Não listado",'Brian', 'Penelope', 'Carlos', 'Fábio'];

            $indice = array_search('', $listaNm);

            echo $listaNm[$indice];

            // echo ($indice === 0 ?  'Não listado' : $listaNm[$indice]);
        ?>

    </body>
</html>