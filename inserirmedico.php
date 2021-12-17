<?php //inserirmedico.php
include('conexao/conexao.php');

//Devemos pegar os dados da url atraves da variavel global $_POST ['nodocampoformulario']
$medico = $_POST['medico'];
$especial = $_POST['especial'];

$sql = "insert into tblmedico(medico,especialidade) values('$medico','$especial')";

$qry = mysqli_query($con, $sql);

if ($sql) {
	echo "<script>alert('Médico(a) cadastrado com sucesso!');</script>";
	$var = "<script>javascript:history.back(-1)</script>";
	echo $var;
}

