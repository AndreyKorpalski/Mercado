<?php
	$servidor = 'localhost';
	$banco = 'mercado';
	$usuario = 'root';
	$senha = '';
	$link = mysqli_connect($servidor, $usuario, $senha, $banco);
	if(!$link)
	{
    	echo "erro ao conectar ao banco de dados!";
    exit();
	}
?>