

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
      <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <div class="form-group" style="margin-top: 5%">

          <label for="produto">Pesquisar produto</label>
          <div class="input-group mb-3" >
            <input type="text" name="produto" class="form-control">
            <div class="input-group-append">
              <button type="submit" class="btn btn-outline-secondary" name="pesquisar" >Pesquisar</button>
            </div>
          </div>
      </form>
        <?php
            @$nome=$_POST['produto'];
            $result = mysqli_query($link,"SELECT * FROM produtos WHERE nome='".$nome."'");
        ?>
      <table class="table">
        <?php
        // fazer metodo para ver o numero de resultado,
        // para fazer if, se nao retornar resultado informar usuario.
            while($dados = mysqli_fetch_array($result)){
        ?>
  <thead>
    <tr>
      <th class="text-center" scope="col">Nome</th>
      <th class="text-center" scope="col">Valor</th>
      <th class="text-center" scope="col">Quantidade</th>
      <th class="text-center" scope="col">Editar</th>
      <th class="text-center" scope="col">Excluir</th>
    </tr>
  </thead>
  
  <tbody>
    <tr>
      <td class="text-center"><?php echo $dados['nome']?></td>
      <td class="text-center">R$<?php echo $dados['valor']?></td>
      <td class="text-center"><?php echo $dados['estoque']?></td>
      <td class="text-center"><a class="btn btn-primary btn-sm " href="page-editar.php?idproduto=<?=$dados['idproduto']?>">Editar</td>
      <?php
      if($_SESSION['cargo'] == 1){?>
      <td class="text-center"><a class="btn btn-primary btn-sm disabled" href="func-excluir.php?idproduto=<?=$dados['idproduto']?>">Excluir</td>
      <?php }?>
      
    </tr>
  </tbody>
    <?php  
        }  
        mysqli_free_result($result);
    ?>
</table>
      </div>
    </div>
  </div>

  
<?php
}
include 'footer.php';
?>