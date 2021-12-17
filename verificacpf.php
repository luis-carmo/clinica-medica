<?php/* arquivo verificacpf.php

function verificaCPF($cpf)
{
	include("conexao/conexao.php");

	$cpf = $_POST['cpf'];

	$sql = "select idcon,cpf from tblpaciente where  cpf ='$cpf'";
	$qry = mysqli_query($con, $sql);

	$result = mysqli_fetch_array($qry);

	if (mysqli_num_rows($qry)) {   //retorna o número de linhas se existir
		echo "CPF já cadastrado!!!<br>";
		echo '<a href="cadpaciente.php">Novo Cadastro</a> | ';
		echo "<a href='exibircliente.php?idcli={$result['idcon']}'>Exiba Cliente</a> | ";
		die();
	}


}
*/