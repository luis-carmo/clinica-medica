<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">     
		<link rel="stylesheet" href="css/estilo.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  		<link rel="stylesheet" type="text/css" href="css/estilo.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                $("#myInput").on("keyup", function() {
                    var value = $(this).val().toLowerCase();
                    $("#myTable tr").filter(function() {
                         $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                     });
                 });
            });
        </script>
        
    </head> 
    <body>
       
    <header class="p-3 container">	
	<a href="index.php"> <img id="logo" src="img/logo.png" style="float: right;"></a>
	<ul class="nav nav-tabs lead">
		<div class="dropdown container-fluid">
			<div class="row">
				<div class="col-md-12">
	  				<li class="nav-item dropdown">
    					<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">CADASTRAR</a>
    					<div class="dropdown-menu">
						      <a class="dropdown-item" href="cadconsulta.php"><img src="img/new.png">&nbsp;CADASTRAR CONSULTA</a>
							  <a class="dropdown-item" href="cadpaciente.php"><img src="img/pacient.png">&nbsp;CADASTRAR PACIENTE</a>
						      <a class="dropdown-item" href="cadmedico.php"><img src="img/medico.png"> CADASTRAR MÉDICO</a>
						      <a class="dropdown-item" href="cadespecial.php"><img src="img/espec.png">&nbsp;CADASTRAR ESPECIALIDADE</a>
    					</div>
  					</li>
  				</div>
  			</div>
  		</div>	
  		<div class="dropdown container-fluid">
			<div class="row">
				<div class="col-md-12">
	  				<li class="nav-item dropdown">
    					<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">PESQUISAR</a>
    					<div class="dropdown-menu">
						     <a class="dropdown-item" href="pesquisarconsulta.php"><img src="img/pesq.png">&nbsp;PESQUISAR CONSULTAS</a>
    					</div>
  					</li>
  				</div>
  			</div>
  		</div>
  	</ul>		
</header>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>
      
    </body>
</html>