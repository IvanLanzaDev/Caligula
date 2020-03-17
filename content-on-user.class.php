<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Meninas</title>
  </head>
  <body class="">
  <?php include("functions.class.php"); ?> 
    <div class="col-xs-12 col-md-4 col-md-offset-4">
        <div class="panel panel-danger">
            <div class="panel-heading">
                <h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Usuário Banido</h3>
            </div>
            <div class="panel-body">
                <form method="post" action="">
                        <div class="form-group col-md-12">
                            <label>Nome Completo</label>
                            <input type="text" name="" class="form-control" value="<?php echo $list_ban_users_url[name_user]; ?>" required disabled>
                        </div> 
                        <div class="col-xs-12">
                            <button type="submit" class="btn btn-success btn-block" name="on_user_btn">
                            <span class="glyphicon glyphicon-ok"></span> Desbanir Usuário
                        </button>
                        </div>
                    </form>
            </div>
        </div>
    </div>
  </body>
</html>