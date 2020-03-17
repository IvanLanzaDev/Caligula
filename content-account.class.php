<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- HTML5 shim e Respond.js para suporte no IE8 de elementos HTML5 e media queries -->
    <!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container-fliud">
        <div class="row">
            <div class="container-no-header col-xs-12 col-sm-12">
                <div class="cover-account">
                    <div class="row">
                      <div class="col-xs-6 col-xs-offset-3 container-profile-picture col-md-3 col-md-offset-4">
                        <a href="#" class="thumbnail">
                          <img src="<?php echo $list_get_user_profile[photo_user]; ?>" alt="Foto de Perfil do usuário">
                        </a>
                      </div>
                    </div>
                </div>
                <div class="container-profile col-xs-12 col-md-3 col-md-offset-4">
                    <div class="row">
                        <h3 class="text-center profile-name"><?php echo $list_get_user_profile[name_user]; ?></h3>
                        <p class="help-block text-center"><small>
                        <span class="glyphicon glyphicon-phone"></span> <?php echo $list_get_user_profile[cel_user]; ?> | <span class="glyphicon glyphicon-phone-alt"></span> <?php echo $list_get_user_profile[tel_user]; ?></small>
                        </p>
                        <p class="help-block text-center">
                            <span class="glyphicon glyphicon-map-marker"></span> <?php echo $list_get_user_profile[city_user]; ?> - <?php echo $list_get_user_profile[state_user]; ?>
                        </p>
                        <p class="help-block text-center">
                           <?php 
                            if($list_get_user_profile[type_user] == 1 && $list_get_user_profile[adm_user] == 1){
                               echo "Conta <span class='label label-success'>Premium</span> <span class='label label-primary'>ADM</span>";
                            }elseif($list_get_user_profile[type_user]){ 
                                echo "Conta <span class='label label-success'>Premium</span>";
                            }
                            else{
                               echo "Conta <span class='label label-danger'>VIP</span>"; 
                            }
                           ?>
                            
                        </p>
                        <div class="col-xs-12">
                            <a href="edit-account.php?profile=<?php echo $list_get_user_profile[id_user]; ?>" class="btn btn-warning btn-block btn-lg">Editar Perfil</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </body>
</html>