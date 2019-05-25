

<title>Pagina index</title>
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
        <form style="margin-top: 5%" method="POST" action="func-cadastrar.php">
        <?php if(isset($_GET['sucesso'])){ ?>
          <div class="alert alert-success" role="alert">
            Produto cadastrado com sucesso !
          </div>
          <?php } ?>
          <?php if(isset($_GET['erro'])){ ?>
          <div class="alert alert-danger" role="alert">
            Não foi possivel cadastrar o produto !
          </div>
          <?php } ?>
          <?php if(isset($_GET['duplicado'])){ ?>
            <div class="alert alert-warning" role="alert">
              Produto já existente !
            </div>
          <?php } ?>
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" name="nome" id="nome" required placeholder="Nome do produto">
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inlineFormInputGroup">Valor</label>
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text">R$</div>
                  </div>
                  <input type="text" class="form-control" pattern="[0-9]+([.][0-9]+)?" min="0" required  name="valor" id="inlineFormInputGroup" placeholder="00.00">
                </div>
              </div>

            <div class="form-group col-md-6">
              <label for="estoque">Quantidade</label>
              <input type="text" class="form-control" name="estoque" id="estoque" required placeholder="Quantidade de produto">
            </div>
          </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
      </div>
    </div>
  </div>

<?php
}else{
  header('location:func-logout.php');
}
include 'footer.php';
?>