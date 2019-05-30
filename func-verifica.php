<?php
include 'bd.php';

$email = addslashes($_POST['email']);
$senha = md5($_POST['senha']);
$idproduto = $_GET['id'];
$query = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";

$consulta = mysqli_query($link, $query);
 
if(mysqli_num_rows($consulta) == 1){
    mysqli_query($link,"DELETE FROM produtos where idproduto=$idproduto");
    header('location:page-index.php?msg1');
}
else{
	header('location:page-consultar.php?msg2');
}
?>