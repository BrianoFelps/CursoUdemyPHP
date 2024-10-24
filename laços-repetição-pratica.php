<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Laços de repetição -> do, dowhile, for, foreach</title>
    </head>
    <body>
        <?php
            $noticias = [];

            /*$i = 1;
            $j = 0;

            do{
                $noticias[] = ['titulo' => "Título $i", 'conteudo' => "Conteúdo $i"];
                $i++;
            }while($i <= 200);
            do{
                echo '<h1>' . $noticias[$j]['titulo'] . '</h1>';
                echo '<p>' . $noticias[$j]['conteudo'] . '</p>';
                $j++;
            }while($j < count($noticias));
            */


            /*while($i <= 200){
                $noticias[] = ['titulo' => "Título $i", 'conteudo' => "Conteúdo $i"];
                $i++;
            }
            while($j < count($noticias)){
                echo '<h1>' . $noticias[$j]['titulo'] . '</h1>';
                echo '<p>' . $noticias[$j]['conteudo'] . '</p>';
                $j++;
            }*/

            for($i= 1; $i <= 200; $i++){
                $noticias[] = ['titulo' => "Título $i", 'conteudo' => "Conteúdo $i"];
            }
            for($j=0; $j<count($noticias); $j++){
                echo '<h1>' . $noticias[$j]['titulo'] . '</h1>';
                echo '<p>' . $noticias[$j]['conteudo'] . '</p>';
            }

            echo '<pre>';
                print_r($noticias);
            echo '</pre>';
        ?>
    </body>
</html>