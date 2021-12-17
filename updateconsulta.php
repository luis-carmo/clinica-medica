<?php //updateconsulta.php
include('conexao/conexao.php');

//Devemos pegar os dados da url atraves da variavel global $_POST ['nodocampoformulario']
$idcon = $_POST['idcon'];
$paciente = $_POST['paciente'];
$especial = $_POST['especial'];
$dtcon = $_POST['dtcon'];
$hora = $_POST['hora'];
$unidade = $_POST['unidade'];
$forma = $_POST['forma'];
$valor = $_POST['valor'];

// insert into tabelalogin (login, senha, dtcad, ativo) value ('$login', '$senha', '$dtcad', $ativo')";
$update = "update tblconsultas set paciente='$paciente',especial='$especial',dtcon='$dtcon',hora='$hora',unidade='$unidade',forma='$forma',valor='$valor' where idcon='$idcon'";

if ($update) {
	echo "<script>alert('alteração realizada com sucesso!');</script>";
}

header("location: pesquisarconsulta.php");
	
	

//comando de execução da query

$qry = mysqli_query($con, $update);