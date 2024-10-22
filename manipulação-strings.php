<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        
        <?php
        
            $textoLegal = "olá mundo! Eu sou a máquina, prazer em conhecê-lo";

            echo strtolower($textoLegal) . "</br>";
            echo strtoupper($textoLegal) . "</br>";
            echo ucfirst($textoLegal) . "</br>";
            echo strlen($textoLegal) . "</br>";
            echo str_replace("máquina", "inteligência artificial", $textoLegal) . "</br>";
            echo str_replace("´", "", $textoLegal) . "</br>";
            /* O último parametro é a quantidade de caracteres que se vai extrair.
            note que os acentos contam como 1 caractere, por isso nesse caso são
            requisitados 11, e não 10.*/
            echo substr($textoLegal, 0, 11) . "</br>";

        ?>

    </body>
</html>