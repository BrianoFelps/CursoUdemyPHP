<?php

    session_start();

    $usuarios = [
        ['email' => 'brian@gmail.com', 'senha' => '123'],
        ['email' => 'a@a.a', 'senha' => 'a'],
    ];

    $usuario_autenticado = false;

    // echo '<pre>';
    // print_r($usuarios);
    // echo '</pre>';

    // print_r($_POST);
 
    echo '<br />';
     
    // echo $_POST["email"];
    // echo '<br />';
    // echo '<br />';
    // echo $_POST['senha'];

    foreach($usuarios as $user){
        // echo"<pre>";
        // print_r($user);
        // echo"</pre>";

        // echo $user["email"] . "<br>";
        // echo $user["senha"] . "</br></br></br>";
        if(($user['email'] === $_POST['email']) && ( $user['senha'] === $_POST['senha'])){
            $usuario_autenticado = true;
        }
    }

    if($usuario_autenticado){
        $_SESSION['autenticacao'] = 'sucesso';
        header('Location: home.php');
    }else {
        $_SESSION['autenticacao'] = 'falha';
        header('Location: index.php?login=erro');
    }
?>