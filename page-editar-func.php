

<title>Pagina Editar</title>
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
        <form style="margin-top: 5%" method="POST" action="func-editar-func.php">
        <?php
                if(@$_GET['idusuario']){
                    $edita = mysqli_query($link,"SELECT * FROM usuarios WHERE idusuario=".$_GET['idusuario']);
                    $dados = mysqli_fetch_array($edita);
                    $idusuario = $dados['idusuario'];       
                    $nome = $dados['nome'];
                    $cargo = $dados['cargo'];     
                }
                ?>
                <div class="form-group">
                <input value="<?=$idusuario?>" name="idusuario" type="hidden">
            </div>
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" value="<?=$nome?>" name="nome" id="nome" placeholder="Nome do funcionário">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="cargo">Cargo</label>
                <select name="cargo" id="cargo" class="custom-select">
                    <?php 
                    if($cargo == "Administrador"){

                       echo "<option selected value='Administrador'>Administrador</option>";
                       echo "<option  value='Operador'>Operador</option>";
                    }else if($cargo == "Operador"){
                        echo "<option value='Administrador'>Administrador</option>";
                        echo "<option selected value='Operador'>Operador</option>";
                    }?>
                </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Atualizar</button>
        </form>
      </div>
    </div>
  </div>

<?php
}else{
  header('location:func-logout.php');
}
include 'footer.php';
