<?php
    echo '<pre>';
    print_r($_POST);
    echo '</pre> <br>';

    $textoSemHash = str_replace('#' , 'º', implode('*', $_POST)); 
    $texto = implode('#' ,explode('*' , $textoSemHash)) . PHP_EOL;

    echo $textoConvertido . '<br>';
    echo $texto;

    $arquivo = fopen('arquivo.hd', 'a');

    fwrite($arquivo, $texto);

    fclose($arquivo);

    header("Location: abrir_chamado.php")
?>

