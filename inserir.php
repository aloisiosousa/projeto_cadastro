
<?php

// INICIA LIGAÇÃO À BASE DE DADOS
$con=mysqli_connect("$hostname, $usuario, $senha, $bancodedados");

// VERIFICA A LIGAÇÃO NÃO TEM ERROS
if (mysqli_connect_errno())
{
    // CASO TENHA ERROS MOSTRA O ERRO DE LIGAÇÃO À BASE DE DADOS
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// CASO TUDO ESTEJA OK INSERE DADOS NA BASE DE DADOS
$sql="INSERT INTO cadastro_tb (usuario, senha) VALUES ('$_POST[usuario]','$_POST[senha]','$_POST')";


// CASO ESTEJA TUDO OK ADICIONA OS DADOS, SENÃO MOSTRA O ERRO
if (!mysqli_query($con,$sql))
{
    die('Error: ' . mysqli_error($con));
}

// MOSTRA A MENSAGEM DE SUCESSO
echo "1 record added";

mysqli_close($con);

?>