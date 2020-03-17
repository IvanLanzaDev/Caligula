<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Meninas</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="less/style.less" rel="stylesheet/less">  

    <!-- HTML5 shim e Respond.js para suporte no IE8 de elementos HTML5 e media queries -->
    <!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="">
      <?php include("menu.class.php"); ?> 
      
    <div class="container-fliud">
        <div class="row">
            <div class="container-tabs-login container-default-white col-xs-10 col-xs-offset-1 col-md-4 col-md-offset-4">
                <div class="row">
                    <div class="col-xs-12">
                        <img src="imgs/preimun_user.png" class="col-xs-6 col-xs-offset-3 col-md-4 col-md-offset-4">
                    </div>
                    <div class="col-xs-12">
                        <div class="page-header">
                            <h3 class="text-center text-success">Usuário Premium</h3>
                        </div>
                    </div>
                    <div class="col-xs-12 text-center">
                        <h4>Vantagens de ser usuário <span class="label label-success">Premium</span></h4>
                        <p class="text-muted">
                            <span class="text-success glyphicon glyphicon-ok"></span> Ter acesso a anúncios exclusivos.<br>
                            <span class="text-success glyphicon glyphicon-ok"></span> Visualizar todas as fotos do anúncio.<br>
                        </p>
                    </div>
                    <div class="col-xs-12">
                        <div class="page-header">
                            <h3 class="text-success text-center">Tornar-se usuário <span class="label label-success">Premium</span></h3>
                        </div>
                        <div class="text-center">
                            <small>R$ </small><span class="text-success"><big>99,00 </big></span>
                        </div>
                        
                        <div class="text-center">
                            <!-- INICIO FORMULARIO BOTAO PAGSEGURO -->
<form action="https://pagseguro.uol.com.br/checkout/v2/payment.html" method="post">
<!-- NÃO EDITE OS COMANDOS DAS LINHAS ABAIXO -->
<input type="hidden" name="code" value="54A338450C0CF1E004DDAF9A4E3DCEF6" />
<input type="hidden" name="iot" value="button" />
<input type="image" src="https://stc.pagseguro.uol.com.br/public/img/botoes/pagamentos/209x48-pagar-assina.gif" name="submit" alt="Pague com PagSeguro - é rápido, grátis e seguro!" />
</form>
<!-- FINAL FORMULARIO BOTAO PAGSEGURO -->
                        </div>
                        
                        
                    </div>
                </div>
            </div>
        </div>  
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/less.min.js"></script>
  </body>
</html>