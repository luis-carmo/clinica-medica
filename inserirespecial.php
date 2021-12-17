<?php //inserirespecial.php
include('conexao/conexao.php');

//Devemos pegar os dados da url atraves da variavel global $_POST ['nodocampoformulario']
$especial = $_POST['especial'];

$sql = "insert into tblespecialidades(especial) values('$especial')";

$qry = mysqli_query($con, $sql);

if ($sql){
	echo "<script>alert('Especialidade cadastrada com sucesso!');</script>";
	$var = "<script>javascript:history.back(-1)</script>";
	echo $var;
}
