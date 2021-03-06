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
  <body class="bg-default bg-gray">
     <?php include("menu.class.php"); ?>   
     <?php include("functions.class.php"); ?>   
      
    <div class="container-fliud">
        <div class="row">
            <div class="container-tabs-login mt-10 col-xs-10 col-xs-offset-1 col-md-4 col-md-offset-4">
                    <form method="post" action="" enctype="multipart/form-data">
                        <div class="page-header">
                            <h4 class="text-warning">Editar Perfil</h4>
                        </div>
                        <div class="form-group col-md-12">
                            <label>Nome Completo</label>
                            <input type="text" name="name_user" class="form-control" placeholder="Digite seu nome" required value="<?php echo $list_get_user_profile[name_user]; ?>">
                        </div> 
                        <div class="form-group col-md-6">
                            <label>RG</label>
                            <input type="text" name="rg_user" class="form-control rg" placeholder="00.000.000-0" value="<?php echo $list_get_user_profile[rg_user]; ?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label>CPF</label>
                            <input type="text" name="cpf_user" class="form-control cpf" placeholder="000.000.000-00" required value="<?php echo $list_get_user_profile[cpf_user]; ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <label>Sexo</label>
                            <select name="sex_user" class="form-control">
                                <option selected>Escolha</option>
                                <option value="">Masculino</option>
                                <option value="">Feminino</option>
                                <option value="">Outros</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Telefone</label>
                            <input type="tel" name="tel_user" class="form-control tel" placeholder="(00)0000-0000" value="<?php echo $list_get_user_profile[tel_user]; ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <label>Celular</label>
                            <input type="tel" name="cel_user" class="form-control cel" placeholder="(00)00000-0000" required value="<?php echo $list_get_user_profile[cel_user]; ?>">
                        </div>
                        
                        <div class="form-group col-md-12">
                            <label>Foto de Perfil</label>
                            <input type="file" name="photo_user" class="form-control" required>
                        </div>
                        
                        
                        
                        <div class="page-header">
                            <h4 class="text-success">Endereço</h4>
                        </div>
                        <div class="form-group col-md-12">
                            <label>Endereço</label>
                            <input type="text" name="address_user" class="form-control" placeholder="Digite seu endereço" required value="<?php echo $list_get_user_profile[address_user]; ?>"> 
                        </div>
                        <div class="form-group col-md-6">
                            <label>Número</label>
                            <input type="number" name="number_user" class="form-control" placeholder="0000" required value="<?php echo $list_get_user_profile[number_user]; ?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label>CEP</label>
                            <input type="text" name="zipcode_user" class="form-control cep" placeholder="00000-000" required value="<?php echo $list_get_user_profile[zipcode_user]; ?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Cidade</label>
                            <input type="text" name="city_user" class="form-control" placeholder="Digite sua cidade" required value="<?php echo $list_get_user_profile[city_user]; ?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Estado</label>
                            <input type="text" name="state_user" class="form-control" placeholder="Digite seu estado" required value="<?php echo $list_get_user_profile[state_user]; ?>">
                        </div>
                        
                        <div class="page-header">
                            <h4 class="text-success">Informações de Login</h4>
                        </div>
                        <div class="form-group col-md-6">
                            <label>E-mail</label>
                            <input type="email" name="email_user" class="form-control" placeholder="Digite seu e-mail" required value="<?php echo $list_get_user_profile[email_user]; ?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Senha</label>
                            <input type="password" name="password_user" class="form-control" placeholder="Digite sua senha" required value="<?php echo $list_get_user_profile[password_user]; ?>">
                        </div>
                        <div class="col-xs-12">
                            <button type="submit" class="btn btn-success btn-block" name="btn_edit_user">
                            <span class="glyphicon glyphicon-ok"></span> Salvar alterações
                        </button>   
                        </div>
                    </form>  
            </div>
        </div>  
    </div>
      <?php include("footer.class.php"); ?>  
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