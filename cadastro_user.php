<?php

//Acessa a conexão e retorna para a proxima linha.
include "conectar.php";

$usuario = $_POST ['usuario'];
$senha = $_POST ['senha'];
//$senha2 = md5 ($senha);


$sql_cadastro = mysql_query("INSERT INTO cadastro_tb (usuario, senha) values ('$usuario','$senha')");

if ($sql_cadastro) {
	
	echo "Cadastrou com sucesso.";
	}else{

	echo "Houve um erro no cadastro.";
	}

?>