

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

  <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalLabel">Exclusão do produto:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="func-verifica.php">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Email</label>
            <input name="email" id="email" type="text" class="form-username form-control">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Senha</label>
            <input name="senha" id="senha" type="password" class="form-password form-control" >
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Sair</button>
        <button type="submit" class="btn btn-danger"><strong>Confirmar</strong></button>  
      </div>
    </form>
    </div>
  </div>
</div>
  
<?php
}
include 'footer.php';
?>