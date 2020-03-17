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
                <h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Usuários Cadastrados</h3>
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
                        while($list_all_users = mysqli_fetch_array($get_all_users)){
                            echo "
                                <tr>
                                    <td>$list_all_users[name_user]</td>
                                    <td>$list_all_users[sex_user]</td>
                                    <td><a href='info-users.php?user_id=$list_all_users[id_user]' class='btn btn-primary btn-xs'>Informações</a></td>
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