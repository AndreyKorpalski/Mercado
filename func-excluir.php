<?php
	include("bd.php");
	$dados = $_GET['idproduto'];
	mysqli_query($link,"DELETE FROM produtos where idproduto=$dados");

if($dados){
    //mensagem 
    header("Location:../mercado/page-index.php");
}else{
    //mensagem
    Exit("Ocorreu um erro ao tentar inserir o produto");
}

?>