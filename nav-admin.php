<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Meninas</title>
  </head>
  <body class="">
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
      <nav class="navbar navbar-default navbar-static-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="glyphicon glyphicon-user"></span>
      </button>
      <a class="navbar-brand" href="admin.php">Administração do Site</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="#">Seja Bem Vindo: <strong class="text-primary"><?php echo $list_query_user['name_user']; ?></strong></a></li>
      </ul>
      
      
      
      <form class="navbar-form navbar-right">
            <a href="home.php" target="_blank" class="btn btn-primary">Ver Site</a>
            <a href="logout.php" class="text-danger"><strong>Sair</strong></a>
          </form>
          
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
      
  </body>
</html>