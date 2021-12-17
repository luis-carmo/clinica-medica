<?php //inserirconsulta.php
include('conexao/conexao.php');

//Devemos pegar os dados da url atraves da variavel global $_POST ['nodocampoformulario']
$paciente = $_POST['paciente'];
$especial = $_POST['especial'];
$dtcon = $_POST['dtcon'];
$hora = $_POST['hora'];
$unidade = $_POST['unidade'];
$forma = $_POST['forma'];
$valor = $_POST['valor'];
$medico = $_POST['medico'];

// insert into tabelalogin (login, senha, dtcad, ativo) value ('$login', '$senha', '$dtcad', $ativo')";
$sql = "insert into tblconsultas(paciente,especial,dtcon,hora,unidade,forma,valor,medico) values('$paciente','$especial','$dtcon','$hora','$unidade','$forma','$valor','$medico')";

if ($sql) {
	echo "<script>alert('Consulta cadastrada com sucesso!');</script>";
	$var = "<script>javascript:history.back(-1)</script>";
	echo $var;
}

//comando de execução da query

$qry = mysqli_query($con, $sql);
?>