<?php

$LOGIN=$_ENV["MYSQL_USER"];
$SENHA=$_ENV["MYSQL_PASSWORD"];
$DATABASE=$_ENV["MYSQL_DATABASE"];
$IP="BD";

$conexao=mysqli_connect($IP,$LOGIN,$SENHA,$DATABASE) or die("Falhou");

echo "Funfo a conexão";

$sql="create table cliente(
    idcliente int not null auto_increment,
    nome varchar(120),
    primary key(idcliente) )";

mysqli_query($conexao,$sql);

?>
