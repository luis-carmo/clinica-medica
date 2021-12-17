<!DOCTYPE html>
<html>
	<head>
		<title>Casdastrar Consulta</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	  		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	  		<link rel="stylesheet" type="text/css" href="css/estilo.css">	
	</head>
	<body>
		<?php include('menu.php'); ?>
		<div class="container">	
			<form action="inserirconsulta.php" method="POST">
			<span><h3 class="text-center text-dark"><b>Cadastrar Consulta</b></h3></span>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label><span>Paciente</span></label>
							<select class="form-control" name="paciente">
								<option>Escolha</option>
								<?php
							include("conexao/conexao.php");
							$sql = "select * from tblpaciente";
							$qry = mysqli_query($con, $sql);
							while ($linha = mysqli_fetch_array($qry)) {
								?>	
								   	 <option value="<?php echo $linha['nome'] ?>">
								   		<?php echo $linha['nome'] ?>
								      	 <?php

										}
										?>
								     </option>
							</select>
						</div>
					</div>
					<div class="col-md-6">
							<div class="form-group">
								<label><span>Médico</span></label>
								<select class="form-control" name="medico">
									<option>Escolha</option>
									<?php
								include("conexao/conexao.php");
								$sql = "select * from tblmedico";
								$qry = mysqli_query($con, $sql);
								while ($linha = mysqli_fetch_array($qry)) {
									?>	
										<option value="<?php echo $linha['medico'] ?>">
											<?php echo $linha['medico'] ?>
											<?php

											}
											?>
										</option>
								</select>
							</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<div class="form-group">
							<label><span>Especialidade</span></label>
							<select class="form-control" name="especial">
								<option>Escolha</option>
								<?php
							include("conexao/conexao.php");
							$sql = "select * from tblespecialidades order by especial";
							$qry = mysqli_query($con, $sql);
							while ($linha = mysqli_fetch_array($qry)) {
								?>	
								   	 <option value="<?php echo $linha['especial']; ?>">
								   		<?php echo $linha['especial']; ?>
								      	 <?php

														}
														?>
								     </option>
							</select>
							<small id="ajuda" class="form-text text-muted">Informe a especialidade da consulta</small>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label><span>Data da Consulta</span></label>
							<input type="date" class="form-control" name="dtcon" required="">
							<small id="ajuda" class="form-text text-muted">Informe a data da consulta neste campo.</small>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label><span>Hora da Consulta</span></label>
								<input type="time"  class="form-control" name="hora" placeholder="Horário da consulta" required="">
								
							<small id="ajuda" class="form-text text-muted">Informe o horário da consulta</small>
						</div>
					</div>
					
					<div class="col-md-3">
						<div class="form-group">
							<label><span>Unidade</span></label>
							<select class="form-control" name="unidade">
								<option>Escolher</option>
								<option>Belford Roxo</option>
								<option>Nova Iguaçu</option>
								<option>Duque de Caxias</option>
								<option>Nilopolis</option>
							</select>

							<small id="ajuda" class="form-text text-muted">Escolha a unidade.</small>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label><span>Forma de Pagamento</span></label>
							<select class="form-control" name="forma">
								<option>Escolher</option>
								<option>Dinheiro</option>
								<option>Plano Amil</option>
								<option>Plano Unimed</option>
								<option>Plano Golden Cross</option>
							</select>
							<small id="ajuda" class="form-text text-muted">Informe a o meio de pagamento da consulta</small>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label><span>Valor da Consulta</span></label>
							<input type="text" class="form-control" name="valor" placeholder="Digite o valor da consulta em reais" required="">
							<small id="ajuda" class="form-text text-muted">Informe o valor da consulta. Ex: R$100.00</small>
						</div>
					</div>
				</div>
				<div class="container-fluid">
					<div class="row">
						<span style="margin: auto;"><button type="submit" class="btn btn-primary btn-lg">Cadastrar</button>
						&nbsp;&nbsp;&nbsp;&nbsp;
						<button type="reset" class="btn btn-danger btn-lg">Resetar</button></span>
					</div>
				</div>
			</form>
			<br>
		</div>
	</body>
</html> 