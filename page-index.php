<title>Pagina index</title>
<?php

session_start();
include 'bd.php';
include 'header.php';
include 'navbar.php';

if(isset($_SESSION['login'])){
?>
  <div class="card text-center">
    <div class="card-header">
      Olá, <?php echo $_SESSION['nome'];?> Seja bem vindo !
    </div>
  <div class="card-body">
    <h5 class="card-title">Atualmente você é <?php echo $_SESSION['cargo'];?>. </h5>
    <p class="card-text"></p>
  </div>
</div>
<?php

}else{
  header('location:func-logout.php');
}
include 'footer.php';
?>