<?php 

    session_start();

    //unset()
    /*
        Função global para arrays, exclui um índice solicitado. Exemplo: unset($_SESSION['validacao'])
    */

    session_destroy();
    header("Location: index.php");

    //session_destroy();
    /*
        Função própria para manipular sessões, elimina a sessão por inteiro nos
        seus índices. Vale dizer que é possível recuperar os valores de índice do array sessão
        enquanto não houver atualização ou redirecionamento de página.
    */

?>