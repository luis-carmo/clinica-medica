<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Cadastrar Médico</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/estilo.css">
	</head>
	<body>
		<?php include('menu.php'); ?>
		
		<div class="container">
			<form action="inserirespecial.php" method="POST">
				<div class="row">
					<div class="col-md-12">
						<span><h3 class="text-center text-dark"><b>Cadastrar Especialidade</b></h3></span>
						<div class="form-group">
							<label><span>Especialidade</span></label>
							<input type="text" class="form-control" name="especial" placeholder="Digite o nome da especialidade" required=""> <small  class="form-text text-muted">Informe a especialidade a ser adicionada.</small>
						</div>
					</div>
				</div>
				<div class="container-fluid">
					<div class="row">
						<span style="margin: auto;">
							<button type="submit" class="btn btn-primary btn-lg">Cadastrar</button>	&nbsp;&nbsp;&nbsp;&nbsp;
							<button type="reset" class="btn btn-danger btn-lg">Resetar</button>
						</span>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>