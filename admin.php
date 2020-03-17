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
    
    <?php
        include("connect.class.php");
        session_start();
        if(!isset($_SESSION["email_user"]) || !isset($_SESSION["password_user"])){
            header("Location: login.php");
            echo "erro Session";
            exit;
        }else{ // RESGATANDO INFORMACOES DO USUARIO PELA SESSION
            $email = $_SESSION["email_user"];
            $query_list_user = mysqli_query($connect,"SELECT * FROM user WHERE email_user = '$email'");
            if($query_list_user){
                $list_query_user = mysqli_fetch_array($query_list_user);
            }
        }  
      
      ?>
    
  </head>
  <body class="bg-default bg-gray">
    <?php include("nav-admin.php"); ?> 
    <?php include("content-admin.php"); ?> 
      
      
    <div class="container-fliud">
        <div class="row">
            <div class="col-xs-12">
                
            </div>
        </div>  
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/less.min.js"></script>
  </body>
</html>