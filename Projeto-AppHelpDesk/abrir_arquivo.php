<?php

    session_start();

    $textoSemHash = str_replace('#' , '|', implode('*', $_POST)); 
    $texto =  $_SESSION['id'] . '#' . implode('#' ,explode('*' , $textoSemHash)) . PHP_EOL;

    // echo $texto . '<br>';
    // echo $texto;

    $arquivo = fopen('arquivo.hd', 'a');

    fwrite($arquivo, $texto);

    fclose($arquivo);

    header("Location: abrir_chamado.php");
?>

