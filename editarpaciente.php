<?php  		//arquivo editarpaciente.php
	include('conexao/conexao.php');
	include('menu.php'); 

	$idcon	=	$_GET['idcon'];

	$sql = "select * from tblconsultas where idcon='$idcon'";  

	$qry = mysqli_query($con,$sql);
	$linha = mysqli_fetch_array($qry);
	?>
	 
<html>  <!--cadconsulta.php--> 
	<head>
		<title>---SISTEMA CONSULTA---</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	</head>
	<body>
		<div class="container">
                    <form action="updateconsulta.php" method="POST">       
				<div class="container mt-4">
					<div class="row">
						<div class="col-md-12 col-12">
               <div class="form-group">
									<label><b>ID: <?php  echo "Número da consulta: {$idcon}</b>";?></label>

                    <input type="text" class="form-control" name="idcon" value="<?php echo $linha['idcon'];?>" style="display:none">
								  </div>
								<div class="form-group">
									   <label>Paciente:</label>
						
                                                                           <input type="text" class="form-control" name="paciente" value="<?php echo $linha['paciente'];?>">
								  </div>
						</div>
						<div class="col-md-4 col-12">
								<div class="form-group">
									<label>Data:</label>
									<input type="date" class="form-control" name="dtcon" value="<?php echo $linha['dtcon'];?>">
								</div>
						</div>
						<div class="col-md-4 col-12">
								<div class="form-group">
									<label>Hora:</label>
									<input type="time" class="form-control" name="hora" value="<?php echo $linha['hora'];?>">
								</div>
						</div>
						<div class="col-md-4 col-12">
								<div class="form-group">
								    <label>Especialidade</label>  
									<input type="text" class="form-control" name="especial" value="<?php echo $linha['especial'];?>">
  								</div>
						</div>
						<div class="col-md-4 col-12">
							<div class="form-group">
								<label>Pagamento:</label>
								<input type="text" class="form-control" name="forma" value="<?php echo $linha['forma'];?>">
								<small id="help" class="form-text text-muted">Digite se é convênio ou particular. Abrevie "conv" para convênio e "part" para particular.</small>
								</div>
						</div>
						<div class="col-md-4 col-12">
								<div class="form-group">
									<label>Valor:</label>
									<input type="text" class="form-control" name="valor" value="<?php echo $linha['valor'];?>">
								</div>
						</div>
						<div class="col-md-4 col-12">
								<div class="form-group">
									<label>Unidade:</label>
									<input type="text" class="form-control" name="unidade" value="<?php echo $linha['unidade'];?>">
								</div>
						</div>
						<div class="col-md-12 col-12 text-center">
								<button type="submit" class="btn btn-success">Salvar Alterações</button>
						</div>
					</div>
				</div>
			</form>
		</div>		
	</body>
</html>