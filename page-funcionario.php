<title>Pagina - Gerenciamento</title>
<?php

session_start();
include 'bd.php';
include 'header.php';
include 'navbar.php';
$result = mysqli_query($link,"SELECT * FROM usuarios");

if(isset($_SESSION['login'])){
?>
<div class="container">
    <div class="row" style="margin-top: 5%">
        <div class="col s10">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">cargo</th>
                        <th scope="col">Editar</th>
                    </tr>
                </thead>
                <?php
                    while(@$dados = mysqli_fetch_array(@$result)){
                ?>
                <tbody>
                    <tr>
                    <td><?php echo $dados['nome']?></td>
                    <td><?php echo $dados['cargo']?></td>
                    <td><a class='btn btn-danger btn-sm' href='page-editar-func.php?idusuario=<?=$dados['idusuario']?>'>Editar</td>
                </tbody>
                <?php
                    }
                ?>
            </table>
            <p class="card-text"></p>
        </div>
    </div>
</div>

<?php

}else{
  header('location:func-logout.php');
}
include 'footer.php';
?>