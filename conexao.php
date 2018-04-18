<?php
//Declarando as variavщis.

$mysql_servidor = "localhost"; //127.0.0.1
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "cadastro_bd";

//Verifica se as variavщis estуo corretas se caso tiver erro a opчуo mysql_error enviarс uma mensagem de error.
mysql_connect($mysql_servidor, $mysql_user, $mysql_password) or die (mysql_error());

//Seleciona o banco de dado.
mysql_select_db($mysql_database) or die (mysql_error());

?>