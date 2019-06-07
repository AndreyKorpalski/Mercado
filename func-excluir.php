<?php
	include("bd.php");
	$dados = $_GET['idproduto'];
	mysqli_query($link,"DELETE FROM produtos where idproduto=$dados");

if($dados){
    //mensagem 
    echo  ("<SCRIPT LANGUAGE='JavaScript'>
    				window.alert('Produto excluido com sucesso !')
    				window.location.href='page-index.php';
    			</SCRIPT>");

}else{
    echo  ("<SCRIPT LANGUAGE='JavaScript'>
    				window.alert('Houve um erro ao tentar excluir o produto !')
    				window.location.href='page-index.php';
    			</SCRIPT>");

}

?>