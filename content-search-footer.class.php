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
    <?php include("functions.class.php"); ?>      
  </head>
  <body>
    <div class="container-fliud">
        <div class="row">
            <div class="container-home">
                <?php 
               
                    if($get_search_footer){
                        while($list_get_search_footer = mysqli_fetch_array($get_search_footer)){
                        echo "
                            <div class='container-gilrs col-xs-12 col-md-8 col-md-offset-2'>
                                <div class='col-xs-4 col-md-3'>
                                    <a href='girls.php?announce=$list_get_search_footer[id_announce]'>
                                        <img src='$list_get_search_footer[photo1_announce]' class='img-responsive'>
                                    </a>    
                                </div>
                                <div class='col-xs-8 col-md-9 container-girls-info'>
                                    <div class='col-md-6'>
                                    <a href='girls.php?announce=$list_get_search_footer[id_announce]'>
                                    ";
                                        if($list_get_search_footer[type_announce] == 1){
                                            echo "
                                                <span class='label label-success'>Premium</span>
                                                <span class='label label-danger'>VIP</span>
                                            ";
                                        }
                                        echo "    
                                        <p class='vip'><big><strong>$list_get_search_footer[name_announce]</strong></big></p>
                                        <p class='help-block detail-smal'>
                                            <small>$list_get_search_footer[age_announce] Anos | </small>
                                            <small> $list_get_search_footer[city_announce], $list_get_search_footer[state_announce] | </small>
                                            <small><span class='text-success'><strong>Cache $list_get_search_footer[money2_announce]</strong></span></small>
                                        </p>
                                    </a>  
                                    </div>
                                    <div class='col-md-6 hidden-xs hidden-sm'>";
                                       echo mb_substr($list_get_search_footer[desc_announce], 0, 200);
                                        echo "
                                    </div>
                                </div>
                            </div>   
                        ";
                    }
                    }else{
                        echo "
                            <div class='container-fliud'>
        <div class='row'>
            <div class='container-tabs-login col-xs-10 col-xs-offset-1 col-md-4 col-md-offset-4 text-center'>
                <div class='row'>
                    <img src='imgs/error-icon.png' class='img-responsive col-xs-5 col-md-3 ok-icon' alt='Certo'>
                </div>
                <div class='row'>
                    <h1 class='text-danger text-center'>Desculpe</h1>
                    <p class='text-danger text-center'>Não conseguimos encontrar o que você procura. Tente novamente!</p>
                </div>
            </div>
        </div>  
    </div>
                        ";
                    }
                    
                ?>
            </div>
        </div> 
        
        <!--<div class="row">
            <div class="container-pagination text-center col-xs-12">
                <nav aria-label="Page navigation">
                    <ul class="pagination">
                        <li>
                            <a href="#" aria-label="Previous">
                            <span aria-hidden="true">Anterior</span>
                            </a>
                        </li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li>
                            <a href="#" aria-label="Next">
                            <span aria-hidden="true">Proximo</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>-->
        
        <div class="row">
            <div class="container-subscribe col-xs-12 col-sm-12 col-md-12">
                <h5 class="text-center hidden-md hidden-lg">Receba um e-mail com alertas sempre que um novo anúncio de seu interesse for publicado !</h5>
                <h4 class="text-center hidden-xs hidden-sm">Receba um e-mail com alertas sempre que um novo anúncio de seu interesse for publicado !</h4>
                <div class="container-subscribe-form col-xs-12 col-sm-12 col-md-4 col-md-offset-4">
                    <form method="post" action="">
                        <div class="input-group col-xs-12 col-md-12">
                            <input type="email" class="form-control" placeholder="Seu e-mail" name="">
                            <span class="input-group-btn">
                            <button class="btn btn-danger col-xs-12 col-md-12" type="submit" name="btn_search" value="true">
                            Criar um alerta
                            </button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
    </div>
  </body>
</html>