<?php
  require_once "validar-acesso.php";

  $arquivo = fopen('../../AppHelpDeskRestrict/arquivo.hd', 'r');

  // verifica se é o fim do arquivo (feof => file: end of file)
  while (!feof($arquivo)) {
    //Pega os registros do arquivo anteriormente aberto linha a linha, transforma os registros em arrays utilizáveis para verificações diretas separando pela #, 
    $registroChamados = explode('#' ,fgets($arquivo));

    //Verifica se é um usuário ou um administrador, e mantém somente as informações que correspondem ao usuário, caso seja um.
    if($_SESSION['role_id'] == 2){
      if($_SESSION['id'] != $registroChamados[0]){
        continue;
      }
    }
    //Elimina registros vazios (a linha deixada pelo PHP_EOL)
    if(count($registroChamados) < 3){
      continue;
    }

    //Registra os chamados que passaram pelas condições certas numa array
    $chamados[] = $registroChamados;
  }

  fclose($arquivo);
?>

<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-consultar-chamado {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

    <?php
      require_once "topBar.php";
    ?>

    <div class="container">    
      <div class="row">

        <div class="card-consultar-chamado">
          <div class="card">
            <div class="card-header">
              Consulta de chamado
            </div>
            
            <div class="card-body">
              
            <?php 
            //Pela array, se passa nos registros para converter os textos com hashtag digitada pelo usuário, e depois fazer o HTML dos elementos de forma correspondente.
              foreach($chamados as $i => $chamado){

                $converterHashT = str_replace('|', '#', $chamado[1]);
                $converterHashC = str_replace('|', '#', $chamado[2]);
                $converterHashD = str_replace('|', '#', $chamado[3]);
            ?>

              <div class="card mb-3 bg-light">
                <div class="card-body">
                  <h5 class="card-title"><?= $converterHashT ?></h5>
                  <h6 class="card-subtitle mb-2 text-muted"><?= $converterHashC ?></h6>
                  <p class="card-text"><?= $converterHashD ?></p>
                </div>
              </div>

            <?php }?>
              <div class="row mt-5">
                <div class="col-6">
                  <a href="home.php" class="btn btn-lg btn-warning btn-block">Voltar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>