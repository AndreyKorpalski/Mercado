

<title>Pagina - Consultar</title>

<?php
session_start();
include 'bd.php';
include 'header.php';
include 'navbar.php';

if(isset($_SESSION['login'])){
?>
  <div class="container">
    <div class="row">
      <div class="col-10">
     
        <div class="form-group" style="margin-top: 5%">
        <?php if(isset($_GET['msg2'])){ ?>
            <div class="alert alert-danger" role="alert">
                Usuário e/ou senha inválidos.
            </div>
          <?php } ?>
          <label for="produto">Pesquisar produto</label>
          <div class="input-group mb-3" >
            <input type="text" name="produto" onkeyup="consultar(this.value)" class="form-control">
          </div>
          <div id="resultado"></div>
        </div>
    </div>
  </div>  
<?php
}
include 'footer.php';
?>