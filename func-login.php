<?php 

include 'bd.php';

$email = addslashes($_POST['email']);
$senha = md5($_POST['senha']);


$query = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";

$consulta = mysqli_query($link, $query);
 echo $email;
 echo $senha;
if(mysqli_num_rows($consulta) == 1){
	while($dados = mysqli_fetch_array($consulta)){
		$idusuario=$dados['idusuario'];
		$nome=$dados['nome'];
		$email=$dados['email'];
		$cargo=$dados['cargo'];

	}

	session_start();
	$_SESSION['login'] = true;
	$_SESSION['idusuario'] = $idusuario;
	$_SESSION['nome'] = $nome;
	$_SESSION['email'] = $email;
	$_SESSION['cargo'] = $cargo;



	header('location:page-index.php');
}
else{
	header('location:page-login.php?erro');
}