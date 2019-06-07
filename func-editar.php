<?php
    include ("bd.php");
    $idproduto = $_POST['idproduto'];
	$nome = $_POST['nome'];
	$valor = $_POST['valor'];
	$estoque = $_POST['estoque'];
	$insert = "UPDATE produtos SET nome='$nome',valor='$valor',estoque='$estoque' where idproduto=$idproduto";
	if ($link->query($insert) === TRUE) {
        //mensagem para o usuario 
		echo  ("<SCRIPT LANGUAGE='JavaScript'>
    				window.alert('Produto atualizado com sucesso !')
    				window.location.href='page-index.php';
    			</SCRIPT>");

	} else {
		include ("header.php");
		include ("navbar.php");
		echo "Error updating record:".$link->error;
		include ("footer.php");
	}
?>