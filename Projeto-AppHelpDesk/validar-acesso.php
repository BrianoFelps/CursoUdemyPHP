<?php
  session_start();

  if(!isset($_SESSION['autenticacao']) or $_SESSION['autenticacao'] == 'falha'){
    header('Location: index.php?login=erro2');
  }
?>