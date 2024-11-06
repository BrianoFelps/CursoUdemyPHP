<html>
	<head>
		<meta charset="utf-8" />
    	<title>App Mail Send</title>

    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	</head>

	<body>

		<div class="container">  

			<div class="py-3 text-center">
				<img class="d-block mx-auto mb-2" src="logo.png" alt="" width="72" height="72">
				<h2>Send Mail</h2>
				<p class="lead">Seu app de envio de e-mails particular!</p>
			</div>

      		<div class="row">
      			<div class="col-md-12">
  				
					<div class="card-body font-weight-bold">
						<form action="validar_envio.php" method="post">
							<div class="form-group">
								<label for="para">Para</label>
								<input name="destinatario" type="text" class="form-control" id="para" placeholder="joao@dominio.com.br">

								<?php
									if(isset($_GET['envio']) && $_GET['envio'] == 'erro1'){
								?>

								<div style="color: red;">E-mail inválido! tente novamente.</div>

								<?php
									}
								?>

							</div>

							<div class="form-group">
								<label for="assunto">Assunto</label>
								<input name="assunto" type="text" class="form-control" id="assunto" placeholder="Assunto do e-mail">
							</div>

							<div class="form-group">
								<label for="mensagem">Mensagem</label>
								<textarea name="mensagem" class="form-control" id="mensagem"></textarea>
							</div>

							
							<?php
								if(isset($_GET['envio']) && $_GET['envio'] == 'erro2'){
							?>
							<div style="color: red;">Campos incompletos!! digite tudo antes de proceder.</div>
							<?php
								}
							?>
							
							<?php
								if(isset($_GET['envio']) && $_GET['envio'] == 'erro3'){
							?>
							<div style="color: red;">Erro no envio do e-mail. Tente novamente mais tarde.</div>
							<?php
								}
							?>

							<?php
								if(isset($_GET['envio']) && $_GET['envio'] == 'sucesso'){
							?>
							<div style="color: green;">E-mail enviado com sucesso!</div>
							<?php
								}
							?>

							<button type="submit" class="btn btn-primary btn-lg">Enviar Mensagem</button>
						</form>
					</div>
				</div>
      		</div>
      	</div>

	</body>
</html>