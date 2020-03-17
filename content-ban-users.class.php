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
                <h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Usuários Banidos</h3>
            </div>
            <div class="panel-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Sexo</th>
                            <th></th>
                        </tr>
                    </thead>
                <tbody>
                    <?php
                        while($list_ban_users = mysqli_fetch_array($get_ban_users)){
                            echo "
                                <tr>
                                    <td>$list_ban_users[name_user]</td>
                                    <td>$list_ban_users[sex_user]</td>
                                    <td><a href='on-user.php?ban_user_id=$list_ban_users[id_user]' class='btn btn-primary btn-xs'>Informações</a></td>
                                </tr>    
                            ";
                        }
                    ?>
                </tbody>
                </table>
            </div>
        </div>
    </div>
  </body>
</html>