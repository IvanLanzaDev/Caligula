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
                <h3 class="panel-title"><span class="glyphicon glyphicon-book"></span> Anúncios Cadastrados</h3>
            </div>
            <div class="panel-body">
               <div class="page-header">
                    <h4 class="text-success">Dados do Anúncio</h4>
                    <?php
                        if($list_get_announce_info[type_announce] == 0){
                            echo "<span class='label label-success'>Anúncio Gratuito</span>";
                        }else{
                            echo "<span class='label label-danger'>Anúncio VIP</span>";
                        }
                    ?>
                </div>
                <form method="post" action="" enctype="multipart/form-data">
                            <div class="form-group col-xs-12 col-md-12">
                                <label>Titulo do Anúncio</label>
                                <input type="text" name="" class="form-control" autofocus required disabled value="<?php echo $list_get_announce_info[name_announce]; ?>">
                            </div>
                            <div class="form-group col-xs-12 col-md-6">
                                <label>Telefone <small class="text-info">Fixo ou Celular</small></label>
                                <input type="tel" name="" class="form-control" required placeholder="(00)0000-0000" disabled value="<?php echo $list_get_announce_info[tel_announce]; ?>">
                            </div>
                            <div class="form-group col-xs-12 col-md-6">
                                <label>E-mail</label>
                                <input type="email" name="" class="form-control" required placeholder="email@email.com.br" disabled value="<?php echo $list_get_announce_info[email_announce]; ?>">
                            </div>
                            <div class="form-group col-xs-12 col-md-6">
                                <label>Cidade</label>
                                <input type="text" name="" class="form-control" required disabled value="<?php echo $list_get_announce_info[city_announce]; ?>">
                            </div>
                            <div class="form-group col-xs-12 col-md-6">
                                <label>Estado</label>
                                <input type="text" name="" class="form-control" required disabled value="<?php echo $list_get_announce_info[state_announce]; ?>">
                            </div>
                            <div class="form-group col-xs-6 col-md-6">
                                <label>Sexo</label>
                                <select class="form-control" disabled>
                                    <option><?php echo $list_get_announce_info[sex_announce]; ?></option>
                                </select>
                            </div>
                            <div class="form-group col-xs-6 col-md-6">
                                <label>Etinia</label>
                                <select class="form-control" disabled>
                                    <option><?php echo $list_get_announce_info[color_announce]; ?></option>
                                </select>
                            </div>
                            <div class="page-header col-xs-12 col-md-12">
                                <h3>Presta serviços &agrave;</h3>
                            </div>
                            <div class="form-group col-xs-6 col-md-6">
                                <label>Serviços</label>
                                <select class="form-control" disabled>
                                    <option><?php echo $list_get_announce_info[service1_announce]; ?></option>
                                </select>
                            </div>
                            <div class="form-group col-xs-6 col-md-6">
                                <label>Serviços</label>
                                <select class="form-control" disabled>
                                    <option><?php echo $list_get_announce_info[service2_announce]; ?></option>
                                </select>
                            </div>
                            <div class="page-header col-xs-12 col-md-12">
                                <h3>Locais de encontro</h3>
                            </div>
                            <div class="form-group col-xs-6 col-md-4">
                                <label>Locais</label>
                                <select class="form-control" disabled>
                                    <option><?php echo $list_get_announce_info[place1_announce]; ?></option>
                                </select>
                            </div>
                            <div class="form-group col-xs-6 col-md-4">
                                <label>Locais</label>
                                <select class="form-control" disabled>
                                    <option><?php echo $list_get_announce_info[place2_announce]; ?></option>
                                </select>
                            </div>
                            <div class="form-group col-xs-12 col-md-4">
                                <label>Locais</label>
                                <select class="form-control" disabled>
                                    <option><?php echo $list_get_announce_info[place3_announce]; ?></option>
                                </select>
                            </div>
                            <div class="page-header col-xs-12 col-md-12">
                                <h3>Serviços prestados</h3>
                                <p class="text-info">Escolha até <strong>5 (cinco)</strong> serviços</p>
                            </div>
                            <div class="form-group col-xs-6 col-md-4">
                                <label>Serviços</label>
                                <select class="form-control" disabled>
                                    <option><?php echo $list_get_announce_info[wish1_announce]; ?></option>
                                </select>
                            </div>
                            <div class="form-group col-xs-6 col-md-4">
                                <label>Serviços</label>
                                <select class="form-control" disabled>
                                    <option><?php echo $list_get_announce_info[wish2_announce]; ?></option>
                                </select>
                            </div>
                            <div class="form-group col-xs-12 col-md-4">
                                <label>Serviços</label>
                                <select class="form-control" disabled>
                                    <option><?php echo $list_get_announce_info[wish3_announce]; ?></option>
                                </select>
                            </div>
                            <div class="form-group col-xs-6 col-md-6">
                                <label>Serviços</label>
                                <select class="form-control" disabled>
                                    <option><?php echo $list_get_announce_info[wish4_announce]; ?></option>
                                </select>
                            </div>
                            <div class="form-group col-xs-6 col-md-6">
                                <label>Serviços</label>
                                <select class="form-control" disabled>
                                    <option><?php echo $list_get_announce_info[wish5_announce]; ?></option>
                                </select>
                            </div>
                            <div class="page-header col-xs-12 col-md-12">
                                <h3>Idiomas</h3>
                            </div>
                            <div class="form-group col-xs-6 col-md-4">
                                <label>Idioma</label>
                                <select class="form-control" disabled>
                                    <option><?php echo $list_get_announce_info[language1_announce]; ?></option>
                                </select>
                            </div>
                            <div class="form-group col-xs-6 col-md-4">
                                <label>Idioma</label>
                                <select class="form-control" disabled>
                                    <option><?php echo $list_get_announce_info[language2_announce]; ?></option>
                                </select>
                            </div>
                            <div class="form-group col-xs-12 col-md-4">
                                <label>Idioma</label>
                                <select class="form-control" disabled>
                                    <option><?php echo $list_get_announce_info[language3_announce]; ?></option>
                                </select>
                            </div>
                            
                            
                            <div class="page-header col-xs-12 col-md-12">
                                <h3 class="text-success">Cache</h3>
                            </div>
                            <div class="form-group col-xs-6 col-md-4">
                                <label>30 minutos</label>
                                <div class="input-group">
                                    <div class="input-group-addon">R$</div>
                                    <input type="text" class="form-control" id="exampleInputAmount" placeholder="00,00" disabled value="<?php echo $list_get_announce_info[money1_announce]; ?>">
                                </div>
                            </div>
                            <div class="form-group col-xs-6 col-md-4">
                                <label>1 hora</label>
                                <div class="input-group">
                                    <div class="input-group-addon">R$</div>
                                    <input type="text" class="form-control" id="exampleInputAmount" placeholder="00,00" disabled value="<?php echo $list_get_announce_info[money2_announce]; ?>">
                                </div>
                            </div>
                            <div class="form-group col-xs-6 col-md-4">
                                <label>2 horas</label>
                                <div class="input-group">
                                    <div class="input-group-addon">R$</div>
                                    <input type="text" class="form-control" id="exampleInputAmount" placeholder="00,00" disabled value="<?php echo $list_get_announce_info[money3_announce]; ?>">
                                </div>
                            </div>
                            <div class="form-group col-xs-6 col-md-6">
                                <label>3 horas</label>
                                <div class="input-group">
                                    <div class="input-group-addon">R$</div>
                                    <input type="text" class="form-control" id="exampleInputAmount" placeholder="00,00" disabled value="<?php echo $list_get_announce_info[money4_announce]; ?>">
                                </div>
                            </div>
                            <div class="form-group col-xs-12 col-md-6">
                                <label>4 horas</label>
                                <div class="input-group">
                                    <div class="input-group-addon">R$</div>
                                    <input type="text" class="form-control" id="exampleInputAmount" placeholder="00,00" disabled value="<?php echo $list_get_announce_info[money5_announce]; ?>">
                                </div>
                            </div>
                            <div class="form-group col-xs-12 col-md-6">
                                <label>Per Noite</label>
                                <div class="input-group">
                                    <div class="input-group-addon">R$</div>
                                    <input type="text" class="form-control" id="exampleInputAmount" placeholder="00,00" disabled value="<?php echo $list_get_announce_info[money6_announce]; ?>">
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <button type="submit" class="btn btn-danger btn-block" name="btn_delete_announce">
                                    <span class="glyphicon glyphicon-ok"></span> Excluir anúncio
                                </button>
                                <a href="all-annunce.php" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-circle-arrow-left"></span> Voltar</a>    
                        </div>
                        </form>
            </div>
        </div>
    </div>
  </body>
</html>