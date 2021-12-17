<?php //arquivo: conexao.php

$servidor	= "localhost";
$user		= "root";
$senha		= "12345";
$bd 		= "bdcm";
$charset	= "utf-8";

// logando no servidor: mysqli_connect

$con 		= mysqli_connect("$servidor","$user","$senha","$bd");

if (!$con) {
	echo "<!DOCTYPE html>
				<html>
					<head>
						<title>Erro de Conexão</title>
						<style>
							body{
								font-family: arial;
								background-color: #87CEEB;
								}
							h1{
								padding: 10px;
								text-align: center;
								color: #696969;
								}

							h2{
								
								color: #696969;
								margin: 20px;
								}

							#titulo{
								height: 400px;
								border-radius: 10px;
								background-color: #fff;	
								max-width: 900px;
								margin: 100px auto auto auto;
								}
							#conteudo{
								margin: auto;
								max-width: 600px;
								}
							img{
								float: right;
								}
							ul{
								
								}

							li{
								margin: auto;
								padding: 3px;
								}
						</style>
					</head>
					<body>
						<div id='titulo'>
							<h1>Erro ao estabelecer conexão com o bando de dados</h1>
							
							<hr>
							<img src='../img/database.png'>
							<div id='conteudo'>
								<h2>Algumas ações que podem resolver seu problemas são:</h2>
								<ul>
									<li>Verefique se seu nome de usuário e senha estão corretos.</li>
									<li>Verefique se o servidor de banco de dados está funcionando.</li>
								</ul>
							</div>
						</div>
					</body>
				</html>";
	}
mysqli_set_charset($con,$charset);