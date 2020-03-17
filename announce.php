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
      <?php include("connect.class.php"); ?> 
      <?php include("functions.class.php"); ?> 
      
      <?php
        session_start();
        if(!isset($_SESSION["email_user"]) || !isset($_SESSION["password_user"])){
            header("Location: login.php");
            
        }else{ // RESGATANDO INFORMACOES DO USUARIO PELA SESSION
            $email = $_SESSION["email_user"];
            $query_list_user = mysqli_query($connect,"SELECT * FROM user WHERE email_user = '$email'");
            if($query_list_user){
                $list_query_user = mysqli_fetch_array($query_list_user);
            } 
        }  
      
      ?>
      
    <div class="container-fliud">
        <div class="row">
            <div class="container-tabs-login container-default-white col-xs-10 col-xs-offset-1 col-md-4 col-md-offset-4 mt-15">
                <div class="row">
                    <div class="col-xs-12 col-md-12">
                        <img src="imgs/logo-transparent.png" class="img-resposive col-xs-12 col-md-6 col-md-offset-3">
                    </div>
                    <div class="col-xs-12">
                        <div class="page-header text-center">
                            <h3 class="text-success">Criar Anúncio</h3>
                            <p class="text-danger">Preencha <strong>Todos</strong> os campos corretamente.</p>
                        </div>
                        
                        <form method="post" action="announce-success.php" enctype="multipart/form-data">
                            <div class="form-group col-xs-12 col-md-6">
                                <label>Nome Completo</label>
                                <input type="text" name="name_announce" class="form-control" autofocus required>
                            </div>
                            <div class="form-group col-xs-12 col-md-6">
                                <label>Idade</label>
                                <input type="number" name="age_announce" class="form-control" required>
                            </div>
                            <div class="form-group col-xs-12 col-md-6">
                                <label>Telefone <small class="text-info">Fixo ou Celular</small></label>
                                <input type="tel" name="tel_announce" class="form-control tel" required placeholder="(00)00000-0000">
                            </div>
                            <div class="form-group col-xs-12 col-md-6">
                                <label>E-mail</label>
                                <input type="email" name="email_announce" class="form-control" required placeholder="email@email.com.br">
                            </div>
                            <div class="form-group col-xs-12 col-md-6">
                                <label>Cidade</label>
                                <input type="text" name="city_announce" class="form-control" required>
                            </div>
                            <div class="form-group col-xs-12 col-md-6">
                                <label>Estado</label>
                                <input type="text" name="state_announce" class="form-control" required>
                            </div>
                            <div class="form-group col-xs-6 col-md-6">
                                <label>Sexo</label>
                                <select class="form-control" name="sex_announce">
                                    <option selected>Escolha</option>
                                    <option>Masculino</option>
                                    <option>Feminino</option>
                                    <option>Outros</option>
                                </select>
                            </div>
                            <div class="form-group col-xs-6 col-md-6">
                                <label>Etinia</label>
                                <select class="form-control" name="color_announce">
                                    <option selected>Escolha</option>
                                    <option>Branco</option>
                                    <option>Negro</option>
                                    <option>Outros</option>
                                </select>
                            </div>
                            <div class="page-header col-xs-12 col-md-12">
                                <h3>Presta serviços &agrave;</h3>
                                <p class="text-info">Escolha até <strong>2 (dois)</strong> tipos</p>
                            </div>
                            <div class="form-group col-xs-6 col-md-6">
                                <label>Serviços</label>
                                <select class="form-control" name="service1_announce">
                                    <option selected>Escolha</option>
                                    <?php
                                        while($list_get_service = mysqli_fetch_array($get_service)){
                                            echo "<option value='$list_get_service[name_service]'>$list_get_service[name_service]</option>";
                                        }
                                        
                                    ?>
                                </select>
                            </div>
                            <div class="form-group col-xs-6 col-md-6">
                                <label>Serviços</label>
                                <select class="form-control" name="service2_announce">
                                    <option selected>Escolha</option>
                                    <?php
                                        while($list_get_service2 = mysqli_fetch_array($get_service2)){
                                            echo "<option value='$list_get_service2[name_service]'>$list_get_service2[name_service]</option>";
                                        }
                                        
                                    ?>
                                </select>
                            </div>
                            <div class="page-header col-xs-12 col-md-12">
                                <h3>Locais de encontro</h3>
                                <p class="text-info">Escolha até <strong>3 (tres)</strong> locais</p>
                            </div>
                            <div class="form-group col-xs-6 col-md-4">
                                <label>Locais</label>
                                <select class="form-control" name="place1_announce">
                                    <option selected>Escolha</option>
                                    <?php
                                        while($list_get_place = mysqli_fetch_array($get_place)){
                                            echo "<option value='$list_get_place[name_place]'>$list_get_place[name_place]</option>";
                                        }
                                        
                                    ?>
                                </select>
                            </div>
                            <div class="form-group col-xs-6 col-md-4">
                                <label>Locais</label>
                                <select class="form-control" name="place2_announce">
                                    <option selected>Escolha</option>
                                    <?php
                                        while($list_get_place2 = mysqli_fetch_array($get_place2)){
                                            echo "<option value='$list_get_place2[name_place]'>$list_get_place2[name_place]</option>";
                                        }
                                        
                                    ?>
                                </select>
                            </div>
                            <div class="form-group col-xs-12 col-md-4">
                                <label>Locais</label>
                                <select class="form-control" name="place3_announce">
                                    <option selected>Escolha</option>
                                    <?php
                                        while($list_get_place3 = mysqli_fetch_array($get_place3)){
                                            echo "<option value='$list_get_place3[name_place]'>$list_get_place3[name_place]</option>";
                                        }
                                        
                                    ?>
                                </select>
                            </div>
                            <div class="page-header col-xs-12 col-md-12">
                                <h3>Serviços prestados</h3>
                                <p class="text-info">Escolha até <strong>5 (cinco)</strong> serviços</p>
                            </div>
                            <div class="form-group col-xs-6 col-md-4">
                                <label>Serviços</label>
                                <select class="form-control" name="wish1_announce">
                                    <option selected>Escolha</option>
                                    <?php
                                        while($list_get_wish1 = mysqli_fetch_array($get_wish)){
                                            echo "<option value='$list_get_wish1[name_wish]'>$list_get_wish1[name_wish]</option>";
                                        }  
                                    ?>
                                </select>    
                            </div>
                            <div class="form-group col-xs-6 col-md-4">
                                <label>Serviços</label>
                                <select class="form-control" name="wish2_announce">
                                    <option selected>Escolha</option>
                                    <?php
                                        while($list_get_wish2 = mysqli_fetch_array($get_wish2)){
                                            echo "<option value='$list_get_wish2[name_wish]'>$list_get_wish2[name_wish]</option>";
                                        }  
                                    ?>
                                </select>
                            </div>
                            <div class="form-group col-xs-12 col-md-4">
                                <label>Serviços</label>
                                <select class="form-control" name="wish3_announce">
                                    <option selected>Escolha</option>
                                    <?php
                                    while($list_get_wish3 = mysqli_fetch_array($get_wish3)){
                                        echo "<option value='$list_get_wish3[name_wish]'>$list_get_wish3[name_wish]</option>";
                                    }  
                                ?>
                                </select>
                            </div>
                            <div class="form-group col-xs-6 col-md-6">
                                <label>Serviços</label>
                                <select class="form-control" name="wish4_announce">
                                    <option selected>Escolha</option>
                                    <?php
                                        while($list_get_wish4 = mysqli_fetch_array($get_wish4)){
                                            echo "<option value='$list_get_wish4[name_wish]'>$list_get_wish4[name_wish]</option>";
                                        }  
                                    ?>
                                </select>
                            </div>
                            <div class="form-group col-xs-6 col-md-6">
                                <label>Serviços</label>
                                <select class="form-control" name="wish5_announce">
                                    <option selected>Escolha</option>
                                    <?php
                                        while($list_get_wish5 = mysqli_fetch_array($get_wish5)){
                                            echo "<option value='$list_get_wish5[name_wish]'>$list_get_wish5[name_wish]</option>";
                                        }  
                                    ?>
                                </select>
                            </div>
                            <div class="page-header col-xs-12 col-md-12">
                                <h3>Idiomas</h3>
                                <p class="text-info">Escolha até <strong>3 (tres)</strong> idiomas</p>
                            </div>
                            <div class="form-group col-xs-6 col-md-4">
                                <label>Idioma</label>
                                <select class="form-control" name="language1_announce">
                                    <option selected>Escolha</option>
                                    <?php
                                        while($list_get_language = mysqli_fetch_array($get_language)){
                                            echo "<option value='$list_get_language[name_language]'>$list_get_language[name_language]</option>";
                                        }  
                                    ?>
                                </select>
                            </div>
                            <div class="form-group col-xs-6 col-md-4">
                                <label>Idioma</label>
                                <select class="form-control" name="language2_announce">
                                    <option selected>Escolha</option>
                                    <?php
                                        while($list_get_language1 = mysqli_fetch_array($get_language1)){
                                            echo "<option value='$list_get_language1[name_language]'>$list_get_language1[name_language]</option>";
                                        }  
                                    ?>
                                </select>
                            </div>
                            <div class="form-group col-xs-12 col-md-4">
                                <label>Idioma</label>
                                <select class="form-control" name="language3_announce">
                                    <option selected>Escolha</option>
                                    <?php
                                        while($list_get_language2 = mysqli_fetch_array($get_language2)){
                                            echo "<option value='$list_get_language2[name_language]'>$list_get_language2[name_language]</option>";
                                        }  
                                    ?>
                                </select>
                            </div>
                            
                            
                            <div class="page-header col-xs-12 col-md-12">
                                <h3>Fotos</h3>
                                <p class="text-info">Você pode inserir até <strong>10 (dez)</strong> fotos e <strong>1 (um)</strong> vídeo</p>
                            </div>
                            <div class="form-group col-xs-6 col-md-4">
                                <label>Foto</label>
                                <input type="file" class="form-control" name="photo1_announce[]">
                            </div>
                            <div class="form-group col-xs-6 col-md-4">
                                <label>Foto</label>
                                <input type="file" class="form-control" name="photo2_announce[]">
                            </div>
                            <div class="form-group col-xs-6 col-md-4">
                                <label>Foto</label>
                                <input type="file" class="form-control" name="photo3_announce[]">
                            </div>
                            <div class="form-group col-xs-6 col-md-4">
                                <label>Foto</label>
                                <input type="file" class="form-control" name="photo4_announce[]">
                            </div>
                            <div class="form-group col-xs-6 col-md-4">
                                <label>Foto</label>
                                <input type="file" class="form-control" name="photo5_announce[]">
                            </div>
                            <div class="form-group col-xs-6 col-md-4">
                                <label>Foto</label>
                                <input type="file" class="form-control" name="photo6_announce[]">
                            </div>
                            <div class="form-group col-xs-6 col-md-4">
                                <label>Foto</label>
                                <input type="file" class="form-control" name="photo7_announce[]">
                            </div>
                            <div class="form-group col-xs-6 col-md-4">
                                <label>Foto</label>
                                <input type="file" class="form-control" name="photo8_announce[]">
                            </div>
                            <div class="form-group col-xs-6 col-md-4">
                                <label>Foto</label>
                                <input type="file" class="form-control" name="photo9_announce[]">
                            </div>
                            <div class="form-group col-xs-6 col-md-4">
                                <label>Foto</label>
                                <input type="file" class="form-control" name="photo10_announce[]">
                            </div>
                            <div class="form-group col-xs-6 col-md-8">
                                <label>Link do vídeo</label>
                                <input type="text" class="form-control" name="video_announce">
                            </div>
                            
                            <div class="page-header col-xs-12 col-md-12">
                                <h3 class="text-success">Cache</h3>
                                <p class="text-warning text-center"><strong>Atenção:</strong> Se você não presta serviço em determinada duração, <strong>deixe o campo em branco !!!</strong></p>
                            </div>
                            <div class="form-group col-xs-6 col-md-4">
                                <label>30 minutos</label>
                                <div class="input-group">
                                    <div class="input-group-addon">R$</div>
                                    <input type="text" class="form-control money" id="exampleInputAmount" placeholder="00,00" name="money1_announce">
                                </div>
                            </div>
                            <div class="form-group col-xs-6 col-md-4">
                                <label>1 hora</label>
                                <div class="input-group">
                                    <div class="input-group-addon">R$</div>
                                    <input type="text" class="form-control money" id="exampleInputAmount" placeholder="00,00" name="money2_announce">
                                </div>
                            </div>
                            <div class="form-group col-xs-6 col-md-4">
                                <label>2 horas</label>
                                <div class="input-group">
                                    <div class="input-group-addon">R$</div>
                                    <input type="text" class="form-control money" id="exampleInputAmount" placeholder="00,00" name="money3_announce">
                                </div>
                            </div>
                            <div class="form-group col-xs-6 col-md-6">
                                <label>3 horas</label>
                                <div class="input-group">
                                    <div class="input-group-addon">R$</div>
                                    <input type="text" class="form-control money" id="exampleInputAmount" placeholder="00,00" name="money4_announce">
                                </div>
                            </div>
                            <div class="form-group col-xs-12 col-md-6">
                                <label>4 horas</label>
                                <div class="input-group">
                                    <div class="input-group-addon">R$</div>
                                    <input type="text" class="form-control money" id="exampleInputAmount" placeholder="00,00" name="money5_announce">
                                </div>
                            </div>
                            <div class="form-group col-xs-12 col-md-12">
                                <label>Per noite</label>
                                <div class="input-group">
                                    <div class="input-group-addon">R$</div>
                                    <input type="text" class="form-control money" id="exampleInputAmount" placeholder="00,00" name="money6_announce">
                                </div>
                            </div>
                            <input type="hidden" name="user_announce" value="<?php echo $list_query_user[name_user]; ?>">
                            <div class="form-group col-xs-12 col-md-12">
                                <label>Tipo do Anúncio</label>
                                <select name="type_announce" class="form-control">
                                    <option selected>Escolha</option>
                                    <option value="0">Premium</option>
                                    <option value="1">VIP</option>
                                </select>
                            </div>
                            <div class="form-group col-xs-12 col-md-12">
                                <label>Pequena Descrição</label>
                                <p class="text-danger"><strong>Atenção: Limite máximo de 200 caracteres</strong></p>
                                <textarea name="desc_announce" class="form-control" rows="10" maxlength="200"></textarea>
                            </div>
                            <div class="col-xs-12 col-md-12">
                                <button type="submit" class="btn btn-success btn-block btn-md" name="btn_send_announce"><span class="glyphicon glyphicon-ok"> </span> Finalizar Anúncio</button>
                            </div>
                        </form>
                    </div>
                    
                    
                    
                </div>
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
            $('.tel').mask('(00)00000-0000');
            $('.money').mask('#.##0,00', {reverse: true});
        });    
    </script>
  </body>
</html>