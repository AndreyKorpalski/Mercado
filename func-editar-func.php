<?php
session_start();
    include ("bd.php");
    $idusuario = $_POST['idusuario'];      
    $nome = $_POST['nome'];
    $cargo = $_POST['cargo'];  
	$insert = "UPDATE usuarios SET nome='$nome',cargo='$cargo' where idusuario=$idusuario";
	if ($link->query($insert) === TRUE) {
        //mensagem para o usuario 
		echo  ("<SCRIPT LANGUAGE='JavaScript'>
    				window.alert('Informações do funcionário atualizado com sucesso !')
                    window.location.href='page-index.php';
                </SCRIPT>");
                $_SESSION['nome']=$nome;
                $_SESSION['cargo']=$cargo;

	} else {
		include ("header.php");
		include ("navbar.php");
		echo "Error updating record:".$link->error;
		include ("footer.php");
	}
?>