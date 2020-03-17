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
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Tornar usúario VIP</h3>
            </div>
            <div class="panel-body">
                <form method="post" action="">
                        <div class="form-group col-xs-12">
                            <label>Nome Completo</label>
                            <input type="text" name="" class="form-control" placeholder="Nome Completo" required disabled value="<?php echo $list_new_vip_user['name_user']; ?>">
                        </div> 
                        <div class="form-group col-xs-12">
                            <label>Tipo de Conta</label>
                            <select name="" class="form-control" disabled>
                                <option selected>VIP</option>
                            </select>
                        </div>
                        <div class="col-xs-12">
                            <button type="submit" class="btn btn-success btn-block" name="btn_new_vip">
                            <span class="glyphicon glyphicon-ok"></span> Tornar usuário VIP
                        </button>
                        </div>
                    </form>
            </div>
        </div>
    </div>
  </body>
</html>