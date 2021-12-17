<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Cadastrar Paciente</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		  		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
		  		<link rel="stylesheet" type="text/css" href="css/estilo.css">
	</head>
	<body>
		<?php include('menu.php'); ?>
		<div class="container">
			<form action="inserirpaciente.php" method="POST">
				<div class="row">
					<div class="col-12">
						<span><h3 class="text-center text-dark"><b>Cadastrar Paciente</b></h3></span>
						<div class="form-group">
							<label><span>Paciente</span></label>
							<input type="text" class="form-control" name="paciente" placeholder="Digite o nome do paciente" required=""> <small class="form-text text-muted">Informe o nome completo do paciente.</small>
						</div>
					</div>
				</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label><span>CPF</span></label>
								<input type="text" class="form-control" data-mask="000.000.000-00" name="cpf" placeholder="000.000.000-00" required=""> <small class="form-text text-muted">Informe o CPF do paciente sem espaço ou ponto.</small>
							</div>						
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label><span>Telefone</span></label>
								<input  required="" type="text" class="form-control" data-mask="(00) 00000-0000" name="tel" placeholder="(00) 00000-0000" > <small class="form-text text-muted">Informe o telefone do paciente.</small>
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
				<script type="text/javascript" src="js/locastyle.js"></script>
			</div>
		
	</body>
</html>