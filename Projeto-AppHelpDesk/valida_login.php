<?php

    session_start();

    $usuarios = [
        ['id' => 1,'email' => 'brian@gmail.com', 'senha' => '123', 'role_id' => 1],
        ['id' => 2,'email' => 'a@a.a', 'senha' => 'a', 'role_id' => 1],
        ['id' => 3,'email' => 'jose@a.a', 'senha' => '123', 'role_id' => 2],
        ['id' => 4,'email' => 'maria@a.a', 'senha' => '123', 'role_id' => 2],
    ];

    $usuario_autenticado = false;
    $usuario_id = null;
    $usuario_role = null;

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
            $usuario_id = $user['id'];
            $usuario_role = $user['role_id'];
        }
    }

    if($usuario_autenticado){
        $_SESSION['autenticacao'] = 'sucesso';
        $_SESSION['id'] = $usuario_id;
        $_SESSION['role_id'] = $usuario_role;
        header('Location: home.php');
    }else {
        $_SESSION['autenticacao'] = 'falha';
        header('Location: index.php?login=erro');
    }
?>