<?php
  require_once "validar-acesso.php";

  $arquivo = fopen('arquivo.hd', 'r');

  // verifica se é o fim do arquivo (feof => file: end of file)
  while (!feof($arquivo)) {
    $registroChamado = fgets($arquivo);

    $chamados[] = $registroChamado;
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
              foreach($chamados as $chamado){

                
                $arrayChamado = explode('#' , $chamado);

                if(count($arrayChamado) < 3){
                  continue;
                }
                
                $converterHashT = str_replace('|', '#', $arrayChamado[0]);
                $converterHashC = str_replace('|', '#', $arrayChamado[1]);
                $converterHashD = str_replace('|', '#', $arrayChamado[2]);
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