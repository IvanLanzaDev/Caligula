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
      
    <div class="panel-group col-xs-12 hidden-md hidden-lg" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-primary">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            <span class="glyphicon glyphicon-cog"></span> Gerenciar Site
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in text-center" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        <div class="page-header custom-header text-left">
            <h4>Usuários</h4>  
        </div>
        <a href="pre-vip-users.php" class="btn btn-success btn-block"><strong>Tornar usuário VIP </strong><span class="glyphicon glyphicon-star"></span></a><br>
        <a href="all-users.php" class="btn btn-default btn-sm">Ver usuários cadastrados</a>
        <a href="all-users.php" class="btn btn-danger btn-sm">Banir Usuário</a><br><br>
        <a href="ban-users.php" class="btn btn-warning btn-sm">Desbanir Usuário</a>
          
        <div class="page-header custom-header mt-custom-header text-left">
            <h4>Anúncios</h4>  
        </div>
        <a href="all-annunce.php" class="btn btn-default btn-sm">Ver anúncios</a>
        <a href="all-annunce.php" class="btn btn-danger btn-sm">Excluir anúncios</a>
          
      </div>
    </div>
  </div>
        
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
         <span class="glyphicon glyphicon-signal"></span> Estatisticas 
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse text-center" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
        <div class="alert alert-info" role="alert">
            <h4><span class="glyphicon glyphicon-user"></span></h4><p>Usuários Cadastrados <strong><?php echo $count_users; ?></strong></p>
        </div>
        <div class="alert alert-info" role="alert">
            <h4><span class="glyphicon glyphicon-book"></span></h4><p>Anúncios Cadastrados <strong><?php echo $count_announce; ?></strong></p>
        </div>
        <div class="page-header custom-header mt-custom-header text-left">
            <h4>Newsletter</h4>  
        </div>
        <a href="all-newsletter.php" class="btn btn-success btn-block">Ver Inscritos</a>
      </div>
    </div>
  </div>
</div>

<!-- Desktop Panel -->
<div class="col-md-12 hidden-xs hidden-sm">
<div class="col-md-4 col-md-offset-2">
<div class="panel panel-primary">
    <div class="panel-heading" role="tab" id="">
      <h4 class="panel-title">
        <span class="glyphicon glyphicon-cog"></span> Gerenciar Site
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in text-center" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        <div class="page-header custom-header text-left">
            <h4>Usuários</h4>  
        </div>
        <a href="pre-vip-users.php" class="btn btn-success btn-block hidden-md hidden-lg"><strong>Tornar usuário VIP </strong><span class="glyphicon glyphicon-star"></span></a><br>
        <a href="pre-vip-users.php" class="btn btn-success btn-block hidden-xs hidden-sm btn-lg"><strong>Tornar usuário VIP </strong><span class="glyphicon glyphicon-star"></span></a><br>
        <a href="all-users.php" class="btn btn-default btn-sm">Ver usuários cadastrados</a>
        <a href="all-users.php" class="btn btn-danger btn-sm">Banir Usuário</a>
        <a href="ban-users.php" class="btn btn-warning btn-sm">Desbanir Usuário</a> 
          
        <div class="page-header custom-header mt-custom-header text-left">
            <h4>Anúncios</h4>  
        </div>
        <a href="all-annunce.php" class="btn btn-default btn-sm">Ver anúncios</a>
        <a href="all-annunce.php" class="btn btn-danger btn-sm">Excluir anúncios</a>
          
      </div>
    </div>
  </div>
</div>

<div class="col-md-4">
  <div class="panel panel-primary">
    <div class="panel-heading" role="tab" id="">
      <h4 class="panel-title">
        
         <span class="glyphicon glyphicon-signal"></span> Estatisticas 
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in text-center" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        
        
        <div class="alert alert-info" role="alert">
            <h4><span class="glyphicon glyphicon-user"></span></h4><p>Usuários Cadastrados <strong><?php echo $count_users; ?></strong></p>
        </div>
        <div class="alert alert-info" role="alert">
            <h4><span class="glyphicon glyphicon-book"></span></h4><p>Anúncios Cadastrados <strong><?php echo $count_announce; ?></strong></p>
        </div>
        <div class="page-header custom-header mt-custom-header text-left">
            <h4>Newsletter</h4>  
        </div>
        <a href="all-newsletter.php" class="btn btn-success btn-block">Ver Inscritos</a>          
      </div>
    </div>
  </div>      
    
</div>  
</div>
<!-- Desktop Panel -->
 <div class="col-md-12">
    <div class="col-xs-12 col-md-4 col-md-offset-2">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Novos Usuários</h3>
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
                        while($list_all_users_limited = mysqli_fetch_array($get_all_users_limited)){
                            echo "
                                <tr>
                                    <td class='col-md-6'>$list_all_users_limited[name_user]</td>
                                    <td>$list_all_users_limited[sex_user]</td>
                                    <td><a href='info-users.php?user_id=$list_all_users_limited[id_user]' class='btn btn-primary btn-xs'>Visualizar</a></td>
                                </tr>
                            ";
                        }
                    ?>
                    
                    
                </tbody>
                </table>
                <a href="all-users.php" class="btn btn-success btn-block">Ver todos os usuários</a>
            </div>
        </div>
    </div>
    
    <div class="col-xs-12 col-md-4">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Novos Anúncios</h3>
            </div>
            <div class="panel-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Titulo</th>
                            <th>Foto</th>
                            <th></th>
                        </tr>
                    </thead>
                <tbody>
                    <?php
                        while($list_all_announce_limited = mysqli_fetch_array($get_all_announce_limited)){
                            echo "
                                <tr>
                                    <td class='col-md-6'>$list_all_announce_limited[name_announce]</td>
                                    <td><img src='$list_all_announce_limited[photo1_announce]' class='img-responsive small-img'></td>
                                    <td><a href='info-annunce.php?announce_id=$list_all_announce_limited[id_announce]' class='btn btn-primary btn-xs'>Visualizar</a></td>
                                </tr>    
                            ";
                        }
                    ?>
                </tbody>
                </table>
                <a href="all-annunce.php" class="btn btn-success btn-block">Ver todos os anúcios</a>
            </div>
        </div>
    </div>
    </div>
  </body>
</html>