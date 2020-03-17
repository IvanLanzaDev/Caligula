<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Meninas</title>
  </head>
  <body class="">
    <div class="container-fluid">
        <div class="row">
            <div class="container-footer col-xs-12 col-md-12">
                <div class="col-xs-4 hidden-md hidden-lg">
                    <img src="imgs/logo-small-nav.png" class="img-responsive">
                </div>
                <div class="col-xs-8 white copyright hidden-md hidden-lg">
                    <strong><small>Todos os direitos reservados 2017</small></strong>
                </div>
                <div class="row hidden-xs hidden-sm">
                    <div class="col-md-2">
                        <h3>Buscas Relacionadas</h3>
                        <?php
                            $get_wish_search = mysqli_query($connect, "SELECT * FROM wish ORDER BY rand() LIMIT 5");
                            while($list_wish_search = mysqli_fetch_array($get_wish_search)){
                                echo "<p>
                                <a href='search-footer.php?wish=$list_wish_search[name_wish]' class='white'>$list_wish_search[name_wish]</a></p>";
                            }
                        ?>
                        
                    </div>
                    <div class="col-md-3">
                        <h3>&nbsp;</h3>
                        <p><a href="#" class="white" data-toggle="modal" data-target="#terms">Termos de Uso</a></p>
                        <p><a href="#" class="white" data-toggle="modal" data-target="#conduct">Conduta</a></p>
                        <p><a href="#" class="white" data-toggle="modal" data-target="#law">Regras</a></p>
                        <p><a href="#" class="white" data-toggle="modal" data-target="#contact">Contato</a></p>
                    </div>
                    
                    <div class="col-md-3 pull-right text-center">
                        <a href="home.php"><img src="imgs/logo-transparent.png" class="img-responsive"></a>
                        <?php
                            include('functions.class.php');
                            session_start();
                            if(!isset($_SESSION["email_user"]) || !isset($_SESSION["password_user"])){
                                echo "
                                    <a href='login.php' class='btn btn-danger'>Inserir Anúncio</a>
                                ";
                            }else{
                               echo "
                                    <a href='announce.php' class='btn btn-danger'>Inserir Anúncio</a>
                                "; 
                            }
                        ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    
     <!-- MODALS -->
        <!-- TERMS -->
            <div class="modal fade col-xs-12 col-md-12" id="terms" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Termos</h4>
                  </div>
                  <div class="modal-body">
                    <iframe class="col-xs-12 col-md-12" style="height: 500px;" src="pdf/Termos%20de%20Uso.pdf" frameborder="0"></iframe>
                  </div>
                  <div class="modal-footer">
                    
                  </div>
                </div>
              </div>
            </div>
         <!-- END TERMS -->
         <!-- CONDUCT -->
            <div class="modal fade col-xs-12 col-md-12" id="conduct" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Conduta</h4>
                  </div>
                  <div class="modal-body">
                     <iframe class="col-xs-12 col-md-12" style="height: 500px;" src="pdf/conduta%20e%20legal.pdf" frameborder="0"></iframe>
                  </div>
                  <div class="modal-footer">
                    
                  </div>
                </div>
              </div>
            </div>
         <!-- END CONDUCT -->
         <!-- LAW -->
            <div class="modal fade col-xs-12 col-md-12" id="law" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Regras de Anúncio</h4>
                  </div>
                  <div class="modal-body">
                     <iframe class="col-xs-12 col-md-12" style="height: 500px;" src="pdf/regras.pdf" frameborder="0"></iframe>
                  </div>
                  <div class="modal-footer">
                    
                  </div>
                </div>
              </div>
            </div>
         <!-- END LAW -->
         <!-- CONTACT -->
            <div class="modal fade col-xs-12 col-md-12" id="contact" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Contato</h4>
                  </div>
                  <div class="modal-body">
                    <address>
                        <h6>Caligula</h6>
                       
                    </address>
                  </div>
                  <div class="modal-footer">
                    
                  </div>
                </div>
              </div>
            </div>
         <!-- END CONTACT -->
    
  </body>
</html>