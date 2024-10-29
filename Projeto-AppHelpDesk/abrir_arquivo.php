<?php

    session_start();

    $textoSemHash = str_replace('#' , '|', implode('*', $_POST)); 
    $texto =  $_SESSION['id'] . '#' . implode('#' ,explode('*' , $textoSemHash)) . PHP_EOL;

    // echo $texto . '<br>';
    // echo $texto;

    /*ANTES ESTAVA EM REPOSITÓRIO PÚBLICO (HTDOCS), NO MOMENTO QUE TIRO DELE, A SEGURANÇA AUMENTA UM NÍVEL, POIS O ACESSO DIRETO PODE SER FÁCILMENTE REALIZADO*/
    $arquivo = fopen('../../AppHelpDeskRestrict/arquivo.hd', 'a');

    fwrite($arquivo, $texto);

    fclose($arquivo);

    header("Location: abrir_chamado.php");
?>

