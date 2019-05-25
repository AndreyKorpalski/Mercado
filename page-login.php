<?php 

include 'bd.php';
?>

<head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Pagina - Login</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/custom.css">
        <link rel="shortcut icon" href="assets/ico/favicon.png">

    </head>
    <body>
        <div class="container ">
            <div class="row">            
                <div class="login-container col-lg-8  col-xs-10" style="margin-top: 12%; margin-left: 8%;">
                    <div class="login-content">
                        <div class="login-header text-center">
                            <h3><strong>Bem vindo</strong></h3>
                            <h5>Acesso Restrito</h5>
                        </div>
                        <div class="login-body">
                        <?php if(isset($_GET['erro'])){ ?>
                            <div class="alert alert-danger" role="alert">
                                Usuário e/ou senha inválidos.
                            </div>
                        <?php } ?>
                            <form method="POST" action="func-login.php" >
                                <div class="form-group ">
                                    <div class="pos-r">                                        
                                        <input name="email" id="email" type="text"  placeholder="email" class="form-username form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="pos-r">                                    
                                        <input name="senha" id="senha" type="password" placeholder="Senha" class="form-password form-control" >                                      
                                    </div>
                                </div>
                                <div class="form-group text-right">     
                                    <a href="#" class="bold">Esqueceu sua senha ?</a>
                                </div>   

                                <div class="form-group">     
                                    <button type="submit" class="btn btn-primary form-control"><strong>Entrar</strong></button>  
                                </div>                                                           
                            </form>
                        </div>                    
                    </div>  
                </div>    
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>