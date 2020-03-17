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
                <h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Inscritos</h3>
            </div>
            <div class="panel-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Email</th>
                        </tr>
                    </thead>
                <tbody>
                    <?php
                        while($list_subcribers = mysqli_fetch_array($get_subscribers)){
                            echo "
                                <tr>
                                    <td>$list_subcribers[email_newsletter]</td>
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