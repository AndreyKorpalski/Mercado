<title>Pagina index</title>
<?php

session_start();
include 'bd.php';
include 'header.php';
include 'navbar.php';

if(isset($_SESSION['login'])){


  
}else{
  header('location:func-logout.php');
}
include 'footer.php';
?>