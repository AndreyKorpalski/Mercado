

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
        <form style="margin-top: 5%" method="POST" action="func-editar.php">
        <?php
                if(@$_GET['idproduto']){
                    $edita = mysqli_query($link,"SELECT * FROM produtos WHERE idproduto=".$_GET['idproduto']);
                    $dados = mysqli_fetch_array($edita);   
                    $idproduto = $dados['idproduto'];       
                    $nome = $dados['nome'];
                    $valor = $dados['valor'];  
                    $estoque = $dados['estoque'];   
                }
                ?>
                <div class="form-group">
                <input value="<?=$idproduto?>" name="idproduto" type="hidden">
            </div>
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" value="<?=$nome?>" name="nome" id="nome" placeholder="Nome do produto">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="valor">Valor</label>
                <input type="text" class="form-control" value="<?=$valor?>" name="valor" id="valor" placeholder="R$00.00">
                </div>
                <div class="form-group col-md-6">
                <label for="estoque">Quantidade</label>
                <input type="text" class="form-control" value="<?=$estoque?>" name="estoque" id="estoque" placeholder="Quantidade de produto">
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