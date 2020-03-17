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
                <form method="post" action="">
                        <div class="page-header">
                            <h4 class="text-success">Dados Pessoais</h4>
                            <?php
                                if($list_get_user_info[type_user] == 0){
                                    echo "<span class='label label-success'>Conta Gratuita</span>";
                                }else{
                                    echo "<span class='label label-danger'>Conta VIP</span>";
                                }
                            ?>
                        </div>
                        <div class="form-group col-md-12">
                            <label>Nome Completo</label>
                            <input type="text" name="" class="form-control" placeholder="Digite seu nome" required disabled value="<?php echo $list_get_user_info[name_user]; ?>">
                        </div> 
                        <div class="form-group col-md-6">
                            <label>RG</label>
                            <input type="text" name="" class="form-control" placeholder="00.000.000-0" disabled value="<?php echo $list_get_user_info[rg_user]; ?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label>CPF</label>
                            <input type="text" name="" class="form-control" placeholder="000.000.000-00" required disabled value="<?php echo $list_get_user_info[cpf_user]; ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <label>Sexo</label>
                            <select name="" class="form-control" disabled>
                                <option><?php echo $list_get_user_info[sex_user]; ?></option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Telefone</label>
                            <input type="tel" name="" class="form-control" placeholder="(00)0000-0000" disabled value="<?php echo $list_get_user_info[tel_user]; ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <label>Celular</label>
                            <input type="tel" name="" class="form-control" placeholder="(00)00000-0000" required disabled value="<?php echo $list_get_user_info[cel_user]; ?>">
                        </div>
                    
                        <div class="page-header">
                            <h4 class="text-success">Endereço</h4>
                        </div>
                        <div class="form-group col-md-12">
                            <label>Endereço</label>
                            <input type="text" name="" class="form-control" placeholder="Digite seu endereço" required disabled value="<?php echo $list_get_user_info[address_user]; ?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Número</label>
                            <input type="number" name="" class="form-control" placeholder="0000" required disabled value="<?php echo $list_get_user_info[number_user]; ?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label>CEP</label>
                            <input type="text" name="" class="form-control" placeholder="00000-000" required disabled value="<?php echo $list_get_user_info[cep_user]; ?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Cidade</label>
                            <input type="text" name="" class="form-control" placeholder="Digite sua cidade" required disabled value="<?php echo $list_get_user_info[city_user]; ?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Estado</label>
                            <input type="text" name="" class="form-control" placeholder="Digite seu estado" required disabled value="<?php echo $list_get_user_info[state_user]; ?>">
                        </div>
                        
                        <div class="page-header">
                            <h4 class="text-success">Informações de Login</h4>
                        </div>
                        <div class="form-group col-md-6">
                            <label>E-mail</label>
                            <input type="email" name="" class="form-control" placeholder="Digite seu e-mail" required disabled value="<?php echo $list_get_user_info[email_user]; ?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Senha</label>
                            <input type="password" name="" class="form-control" placeholder="Digite sua senha" required disabled value="<?php echo $list_get_user_info[password_user]; ?>">
                        </div>
                        <div class="col-xs-12">
                            <button type="submit" class="btn btn-danger btn-block" name="btn_ban_user">
                            <span class="glyphicon glyphicon-ok"></span> Excluir/Banir usuário
                        </button>
                        <a href="all-users.php" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-circle-arrow-left"></span> Voltar</a>    
                        </div>
                    </form>
            </div>
        </div>
    </div>
  </body>
</html>