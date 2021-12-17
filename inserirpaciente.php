<?php //inserirpaciente.php

include('conexao/conexao.php');


$cpf = $_POST['cpf'];
$paciente = $_POST['paciente'];
$tel = $_POST['tel'];


$sql = "insert into tblpaciente(cpf,nome,telc) values('$cpf','$paciente','$tel')";

$qry = mysqli_query($con, $sql) or trigger_error("Query Failed! SQL: $sql - Error: ".mysqli_error($con), E_USER_ERROR);

if ($sql) {

	echo "<script>alert('Paciente cadastrado com sucesso!');</script>";
	$var = "<script>javascript:history.back(-1)</script>";
	echo $var;
}
	//header('location: cadpaciente.php');
	
	