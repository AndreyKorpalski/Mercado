<?php
	include("bd.php");
		$nome = $_POST["nome"];
    	$valor = $_POST["valor"];
        $estoque = $_POST["estoque"];
        $verifica= mysqli_query( $link, "SELECT * FROM produtos WHERE nome=$nome");
        $inseredados = mysqli_query( $link, "INSERT INTO produtos (nome,valor,estoque) VALUES ('$nome','$valor','$estoque')");
    	if($inseredados){
    	header('Location:page-cadastrar.php?sucesso');
    }else{
    	header('Location:page-cadastrar.php?erro');
    }


//    $verifica="SELECT * from produtos where nome='$nome'";
//    $query1=mysqli_query($link, $verifica);
//    if (mysqli_num_rows($query1)>0){
//        $inseredados = mysqli_query( $link, "INSERT INTO produtos (nome,valor,estoque) VALUES ('$nome','$valor','$estoque')");
//        if($inseredados){
//            header('Location:page-cadastrar.php?sucesso');
//        }else{
//            header('Location:page-cadastrar.php?erro');
//        }
//    }else if(mysqli_num_rows($query1)==0){
//        header('Location:page-cadastrar.php?duplicado');
//    }

?>