<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
      <a class="navbar-brand" href="page-index.php">Mercado</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="page-consultar.php">Consultar</a>
          </li>
          <?php if($_SESSION['cargo'] == 2){ ?>
          <li class="nav-item">
            <a class="nav-link disabled" href="page-cadastrar.php">Cadastrar</a>
          </li>
          <?php
          }else if($_SESSION['cargo'] == 1){?>
            <li class="nav-item">
              <a class="nav-link" href="page-cadastrar.php">Cadastrar</a>
            </li>
            <?php }?>
          
          <li class="nav-item">
            <a class="nav-link" href="func-logout.php"><?php echo $_SESSION['nome'];?>, Sair</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>