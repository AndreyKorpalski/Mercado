<?php
    include ("bd.php");
    $idproduto = $_POST['idproduto'];
	$nome = $_POST['nome'];
	$valor = $_POST['valor'];
	$estoque = $_POST['estoque'];
	$insert = "UPDATE produtos SET nome='$nome',valor='$valor',estoque='$estoque' where idproduto=$idproduto";
	if ($link->query($insert) === TRUE) {
        //mensagem para o usuario 
		header("Location:index.php");
	} else {
		include ("header.php");
		include ("navbar.php");
		echo "Error updating record:".$link->error;
		include ("footer.php");
	}
?>