<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Meninas</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="less/style.less" rel="stylesheet/less">  

    <!-- HTML5 shim e Respond.js para suporte no IE8 de elementos HTML5 e media queries -->
    <!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <!-- PHP INCLUDES -->
    <?php 
      include("functions.class.php");
    ?>
    
  </head>
  <body class="bg-default">
      
      
    <div class="container-fliud">
        <div class="row">
            <div class="container-tabs-login col-xs-10 col-xs-offset-1 col-md-4 col-md-offset-4 text-center">
                <div class="row">
                    <img src="imgs/ok-icon.png" class="img-responsive col-xs-5 col-md-3 ok-icon" alt="Certo">
                </div>
                <div class="row">
                    <h1 class="text-success text-center">Muito Bem !</h1>
                    <p class="text-success text-center">O usuário foi desbanido<br> Clique nos botões abaixo para prosseguir.</p>
                </div>
                <div class="row">
                    <a href="ban-users.php" class="btn btn-success">Desbanir outro usuário</a>
                    <a href="admin.php" class="btn btn-default">Página Inicial</a>
                </div>
            </div>
        </div>  
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/less.min.js"></script>
  </body>
</html>