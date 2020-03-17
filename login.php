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
    
    <!-- PHP INCLUDES -->
    <?php 
      include("functions.class.php");
    ?>
    
  </head>
  <body class="bg-default">
      
      
    <div class="container-fliud">
        <div class="row">
            <div class="container-tabs-login col-xs-10 col-xs-offset-1 col-md-4 col-md-offset-4">
                <ul class="nav nav-tabs">
                  <li class="active"><a data-toggle="tab" href="#home">Login</a></li>
                  <li><a data-toggle="tab" href="#menu1">Cadastre-se</a></li>
                </ul>

                <div class="tab-content">
                  <div id="home" class="tab-pane fade in active col-md-8 col-md-offset-2">
                    <div class="row">
                        <img src="imgs/logo-transparent.png" class="img-responsive col-xs-6 col-xs-offset-3 mt-5">  
                    </div>
                    <br>
                    <form method="post" action="singup.php">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">@</div>
                                <input type="email" class="form-control" id="exampleInputAmount" placeholder="email@email.com.br" name="email_user">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
                                <input type="password" class="form-control" id="exampleInputAmount" placeholder="Senha" name="password_user">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success btn-block" name="btn_test">Entrar</button>
                        <div class="col-xs-12 col-md-12 text-center"><br>
                            <a href="home.php" class="text-center">Voltar ao site</a>
                        </div>
                    </form>
                  </div>
                  
                  <div id="menu1" class="tab-pane fade">
                    <h3>Criar Conta</h3>
                    <p class="help-block">Preencha corretamente os campos abaixo</p>
                    
                    <form method="post" action="" enctype="multipart/form-data">
                        <div class="page-header">
                            <h4 class="text-success">Dados Pessoais</h4>
                        </div>
                        <div class="form-group col-md-12">
                            <label>Nome Completo</label>
                            <input type="text" name="name_user" class="form-control" placeholder="Digite seu nome" required maxlength="100">
                        </div> 
                        
                        <div class="form-group col-md-6">
                            <label>RG</label>
                            <input type="text" name="rg_user" class="form-control rg" placeholder="00.000.000-0" maxlength="12">
                        </div>
                        <div class="form-group col-md-6">
                            <label>CPF</label>
                            <input type="text" name="cpf_user" class="form-control cpf" placeholder="000.000.000-00" required maxlength="14">
                        </div>
                        <div class="form-group col-md-4">
                            <label>Sexo</label>
                            <select name="sex_user" class="form-control">
                                <option selected>Escolha</option>
                                <option>Masculino</option>
                                <option>Feminino</option>
                                <option>Outros</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Telefone</label>
                            <input type="tel" name="tel_user" class="form-control tel" placeholder="(00)0000-0000" maxlength="13">
                        </div>
                        <div class="form-group col-md-4">
                            <label>Celular</label>
                            <input type="tel" name="cel_user" class="form-control cel" placeholder="(00)00000-0000" required maxlength="14">
                        </div>
                        
                        <div class="form-group col-md-12">
                            <label>Foto de Perfil</label>
                            <input type="file" name="photo_user" class="form-control">
                        </div>
                        
                        
                        
                        <div class="page-header">
                            <h4 class="text-success">Endereço</h4>
                        </div>
                        <div class="form-group col-md-12">
                            <label>Endereço</label>
                            <input type="text" name="address_user" class="form-control" placeholder="Digite seu endereço" required maxlength="255">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Número</label>
                            <input type="number" name="number_user" class="form-control" placeholder="0000" required maxlength="5">
                        </div>
                        <div class="form-group col-md-6">
                            <label>CEP</label>
                            <input type="text" name="zipcode_user" class="form-control cep" placeholder="00000-000" required maxlength="9">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Cidade</label>
                            <input type="text" name="city_user" class="form-control" placeholder="Digite sua cidade" required maxlength="100">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Estado</label>
                            <input type="text" name="state_user" class="form-control" placeholder="Digite seu estado" required maxlength="100">
                        </div>
                        
                        <div class="page-header">
                            <h4 class="text-success">Informações de Login</h4>
                        </div>
                        <div class="form-group col-md-6">
                            <label>E-mail</label>
                            <input type="email" name="email_user" class="form-control" placeholder="Digite seu e-mail" required maxlength="100">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Senha</label>
                            <input type="password" name="password_user" class="form-control" placeholder="Digite sua senha" required maxlength="20">
                        </div>
                        <div class="col-xs-12">
                            <button type="submit" class="btn btn-success btn-block" name="btn_new_user">
                            <span class="glyphicon glyphicon-ok"></span> Criar Conta
                        </button>
                        </div>
                    </form>  
                  </div>
                </div>
            </div>
        </div>  
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/jquery.mask.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/less.min.js"></script>
    
    <script>
        $(document).ready(function(){
          $('.rg').mask('00.000.000-0');
          $('.cpf').mask('000.000.000-00');
          $('.tel').mask('(00)0000-0000');
          $('.cel').mask('(00)00000-0000');
          $('.cep').mask('00000-000');
        });    
    </script>
  </body>
</html>