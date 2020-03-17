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
    <link href="css/bootstrap.min.css" rel="stylesheet">
<style>
        .hide-bullets {
    list-style:none;
    margin-left: -40px;
    margin-top:20px;
}

.thumbnail {
    padding: 0;
}

.carousel-inner>.item>img, .carousel-inner>.item>a>img {
    width: 100%;
}
    </style>
      <?php include("functions.class.php"); ?>
  </head>
  <body>
    <div class="container-fliud">
        <div class="row">
            <div class="container-girls-details col-xs-12 col-md-12">
                <div class="content-count col-xs-12 col-md-12">
                    <div class="count col-xs-12 text-center col-md-12">
                        <p class="white"><strong><?php echo $list_get_url_announce[name_announce]; ?></strong> </p>
                    </div>
                </div>
                
                
                <?php
                    
                    session_start();
                
                // VERIFICAÇÃO SE USUARIO ESTA LOGADO
                
                   /* if(!isset($_SESSION["email_user"]) || !isset($_SESSION["password_user"])){
                        echo "
                        <div class='col-xs-12 col-md-6 col-md-offset-3'>
                            <div class='alert alert-danger alert-dismissible no-vip-alert text-center' role='alert'>
                                <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                                <strong>Atenção</strong><br> Você precisa <strong>ter uma conta ou estar logado</strong> para ver o anúncio completo!
                                <br><br>
                                
                                <a href='login.php' class='btn btn-success btn-block hidden-md hidden-lg'>Criar Conta / Fazer Login</a>
                                <p>
                                    <a href='login.php' class='btn btn-success hidden-xs hidden-sm'>Criar Conta / Fazer Login</a>
                                </p>
                            </div> 
                        </div>
                        ";
                        
                        ** VERIFICAÇÃO SE USUÁRIO É MEMBRO PREMIUM OU NAO
                    }else{
                        $email = $_SESSION["email_user"];
                        $query_list_user = mysqli_query($connect,"SELECT * FROM user WHERE email_user = '$email'");
                        if($query_list_user){
                            $list_query_user = mysqli_fetch_array($query_list_user);
                        } 
                        $name = $list_query_user['name_user'];
                        $type_user = $list_query_user['type_user'];
                        if($type_user == 0){
                            echo "
                                <div class='col-xs-12 col-md-6 col-md-offset-3'>
                                    <div class='alert alert-danger alert-dismissible no-vip-alert text-center' role='alert'>
                                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                                        <strong>Atenção</strong><br> Para ver todas as fotos, é necessário ser usuário <strong>Premium</strong>.<br><br>

                                        <a href='require-vip.php' class='btn btn-success btn-block'><span class='glyphicon glyphicon-star'></span> Mudar plano para Premium</a>
                                    </div> 
                                </div>
                            ";
                        }
                        
                    }*/
                ?>
                <div class="col-xs-12 hidden-md hidden-lg">
                    <?php include('content-girls-gallery.class.php'); ?>
                </div>    

                <div class="container hidden-xs hidden-sm">
                    <div id="main_area"> 
                        <!-- Slider -->
                        <?php
                        
                         echo "
                        <div class='row'>
                           
                            <div class='col-sm-6' id='slider-thumbs'>
                                <!-- Bottom switcher of slider -->
                                <ul class='hide-bullets'>
                                    <li class='col-sm-3'>
                                        <a class='thumbnail' id='carousel-selector-0'>
                                            <img src='$list_get_url_announce[photo1_announce]'>
                                        </a>
                                    </li>

                                    <li class='col-sm-3'>
                                        <a class='thumbnail' id='carousel-selector-1'>
                                            <img src='$list_get_url_announce[photo2_announce]'>
                                        </a>
                                    </li>

                                    <li class='col-sm-3'>
                                        <a class='thumbnail' id='carousel-selector-2'>
                                            <img src='$list_get_url_announce[photo3_announce]'>
                                        </a>
                                    </li>

                                    <li class='col-sm-3'>
                                        <a class='thumbnail' id='carousel-selector-3'>
                                            <img src='$list_get_url_announce[photo4_announce]'>
                                        </a>
                                    </li>

                                    <li class='col-sm-3'>
                                        <a class='thumbnail' id='carousel-selector-4'>
                                            <img src='$list_get_url_announce[photo5_announce]'>
                                        </a>
                                    </li>

                                    <li class='col-sm-3'>
                                        <a class='thumbnail' id='carousel-selector-5'>
                                            <img src='$list_get_url_announce[photo6_announce]'>
                                        </a>
                                    </li>
                                    <li class='col-sm-3'>
                                        <a class='thumbnail' id='carousel-selector-6'>
                                            <img src='$list_get_url_announce[photo7_announce]'>
                                        </a>
                                    </li>
                                    <li class='col-sm-3'>
                                        <a class='thumbnail' id='carousel-selector-7'>
                                            <img src='$list_get_url_announce[photo8_announce]'>
                                        </a>
                                    </li>
                                    <li class='col-sm-3'>
                                        <a class='thumbnail' id='carousel-selector-8'>
                                            <img src='$list_get_url_announce[photo9_announce]'>
                                        </a>
                                    </li>
                                    <li class='col-sm-3'>
                                        <a class='thumbnail' id='carousel-selector-9'>
                                            <img src='$list_get_url_announce[photo10_announce]'>
                                        </a>
                                    </li>


                                </ul>
                            </div>
                            <div class='col-sm-6'>
                                <div class='col-xs-12' id='slider'>
                                    <!-- Top part of the slider -->
                                    <div class='row'>
                                        <div class='col-sm-12' id='carousel-bounding-box'>
                                            <div class='carousel slide' id='myCarousel1'>
                                                <!-- Carousel items -->
                                                <div class='carousel-inner'>
                                                    <div class='active item' data-slide-number='0'>
                                                        <img src='$list_get_url_announce[photo1_announce]'>
                                                    </div>

                                                    <div class='item' data-slide-number='1'>
                                                        <img src='$list_get_url_announce[photo2_announce]'>
                                                    </div>

                                                    <div class='item' data-slide-number='2'>
                                                        <img src='$list_get_url_announce[photo3_announce]'>
                                                    </div>

                                                    <div class='item' data-slide-number='3'>
                                                        <img src='$list_get_url_announce[photo4_announce]'>
                                                    </div>

                                                    <div class='item' data-slide-number='4'>
                                                        <img src='$list_get_url_announce[photo5_announce]'>
                                                    </div>

                                                    <div class='item' data-slide-number='5'>
                                                        <img src='$list_get_url_announce[photo6_announce]'>
                                                    </div>

                                                    <div class='item' data-slide-number='6'>
                                                        <img src='$list_get_url_announce[photo7_announce]'>
                                                    </div>
                                                    <div class='item' data-slide-number='7'>
                                                        <img src='$list_get_url_announce[photo8_announce]'>
                                                    </div>
                                                    <div class='item' data-slide-number='8'>
                                                        <img src='$list_get_url_announce[photo9_announce]'>
                                                    </div>
                                                    <div class='item' data-slide-number='9'>
                                                        <img src='$list_get_url_announce[photo10_announce]'>
                                                    </div>

                                                </div>
                                                <!-- Carousel nav -->
                                                <a class='left carousel-control' href='#myCarousel1' role='button' data-slide='prev'>
                                                    <span class='glyphicon glyphicon-chevron-left'></span>
                                                </a>
                                                <a class='right carousel-control' href='#myCarousel1' role='button' data-slide='next'>
                                                    <span class='glyphicon glyphicon-chevron-right'></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/Slider-->
                        </div>";
                        
                            /*
                                ** GALERIA DINAMICA VIA TIPO DE USUARIO
                            if($type_user == 0){
                                //NO VIP USER
                                echo "
                        <div class='row'>
                           
                            <div class='col-sm-6' id='slider-thumbs'>
                                <!-- Bottom switcher of slider -->
                                <ul class='hide-bullets'>
                                    <li class='col-sm-3'>
                                        <a class='thumbnail' id='carousel-selector-0'>
                                            <img src='$list_get_url_announce[photo1_announce]'>
                                        </a>
                                    </li>

                                    <li class='col-sm-3'>
                                        <a class='thumbnail' id='carousel-selector-1'><img src='$list_get_url_announce[photo2_announce]'></a>
                                    </li>

                                    <li class='col-sm-3'>
                                        <a class='thumbnail' id='carousel-selector-2'><img src='$list_get_url_announce[photo3_announce]'></a>
                                    </li>
                                </ul>
                            </div>
                            <div class='col-sm-6'>
                                <div class='col-xs-12' id='slider'>
                                    <!-- Top part of the slider -->
                                    <div class='row'>
                                        <div class='col-sm-12' id='carousel-bounding-box'>
                                            <div class='carousel slide' id='myCarousel1'>
                                                <!-- Carousel items -->
                                                <div class='carousel-inner'>
                                                    <div class='active item' data-slide-number='0'>
                                                        <img src='$list_get_url_announce[photo1_announce]'></div>

                                                    <div class='item' data-slide-number='1'>
                                                        <img src='$list_get_url_announce[photo2_announce]'></div>

                                                    <div class='item' data-slide-number='2'>
                                                        <img src='$list_get_url_announce[photo3_announce]'></div>
                                                </div>
                                                <!-- Carousel nav -->
                                                <a class='left carousel-control' href='#myCarousel1' role='button' data-slide='prev'>
                                                    <span class='glyphicon glyphicon-chevron-left'></span>
                                                </a>
                                                <a class='right carousel-control' href='#myCarousel1' role='button' data-slide='next'>
                                                    <span class='glyphicon glyphicon-chevron-right'></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/Slider-->
                        </div>
                                ";
                            }else{ // VIP USER
                                echo "
                        <div class='row'>
                           
                            <div class='col-sm-6' id='slider-thumbs'>
                                <!-- Bottom switcher of slider -->
                                <ul class='hide-bullets'>
                                    <li class='col-sm-3'>
                                        <a class='thumbnail' id='carousel-selector-0'>
                                            <img src='$list_get_url_announce[photo1_announce]'>
                                        </a>
                                    </li>

                                    <li class='col-sm-3'>
                                        <a class='thumbnail' id='carousel-selector-1'>
                                            <img src='$list_get_url_announce[photo2_announce]'>
                                        </a>
                                    </li>

                                    <li class='col-sm-3'>
                                        <a class='thumbnail' id='carousel-selector-2'>
                                            <img src='$list_get_url_announce[photo3_announce]'>
                                        </a>
                                    </li>

                                    <li class='col-sm-3'>
                                        <a class='thumbnail' id='carousel-selector-3'>
                                            <img src='$list_get_url_announce[photo4_announce]'>
                                        </a>
                                    </li>

                                    <li class='col-sm-3'>
                                        <a class='thumbnail' id='carousel-selector-4'>
                                            <img src='$list_get_url_announce[photo5_announce]'>
                                        </a>
                                    </li>

                                    <li class='col-sm-3'>
                                        <a class='thumbnail' id='carousel-selector-5'>
                                            <img src='$list_get_url_announce[photo6_announce]'>
                                        </a>
                                    </li>
                                    <li class='col-sm-3'>
                                        <a class='thumbnail' id='carousel-selector-6'>
                                            <img src='$list_get_url_announce[photo7_announce]'>
                                        </a>
                                    </li>
                                    <li class='col-sm-3'>
                                        <a class='thumbnail' id='carousel-selector-7'>
                                            <img src='$list_get_url_announce[photo8_announce]'>
                                        </a>
                                    </li>
                                    <li class='col-sm-3'>
                                        <a class='thumbnail' id='carousel-selector-8'>
                                            <img src='$list_get_url_announce[photo9_announce]'>
                                        </a>
                                    </li>
                                    <li class='col-sm-3'>
                                        <a class='thumbnail' id='carousel-selector-9'>
                                            <img src='$list_get_url_announce[photo10_announce]'>
                                        </a>
                                    </li>


                                </ul>
                            </div>
                            <div class='col-sm-6'>
                                <div class='col-xs-12' id='slider'>
                                    <!-- Top part of the slider -->
                                    <div class='row'>
                                        <div class='col-sm-12' id='carousel-bounding-box'>
                                            <div class='carousel slide' id='myCarousel1'>
                                                <!-- Carousel items -->
                                                <div class='carousel-inner'>
                                                    <div class='active item' data-slide-number='0'>
                                                        <img src='$list_get_url_announce[photo1_announce]'>
                                                    </div>

                                                    <div class='item' data-slide-number='1'>
                                                        <img src='$list_get_url_announce[photo2_announce]'>
                                                    </div>

                                                    <div class='item' data-slide-number='2'>
                                                        <img src='$list_get_url_announce[photo3_announce]'>
                                                    </div>

                                                    <div class='item' data-slide-number='3'>
                                                        <img src='$list_get_url_announce[photo4_announce]'>
                                                    </div>

                                                    <div class='item' data-slide-number='4'>
                                                        <img src='$list_get_url_announce[photo5_announce]'>
                                                    </div>

                                                    <div class='item' data-slide-number='5'>
                                                        <img src='$list_get_url_announce[photo6_announce]'>
                                                    </div>

                                                    <div class='item' data-slide-number='6'>
                                                        <img src='$list_get_url_announce[photo7_announce]'>
                                                    </div>
                                                    <div class='item' data-slide-number='7'>
                                                        <img src='$list_get_url_announce[photo8_announce]'>
                                                    </div>
                                                    <div class='item' data-slide-number='8'>
                                                        <img src='$list_get_url_announce[photo9_announce]'>
                                                    </div>
                                                    <div class='item' data-slide-number='9'>
                                                        <img src='$list_get_url_announce[photo10_announce]'>
                                                    </div>

                                                </div>
                                                <!-- Carousel nav -->
                                                <a class='left carousel-control' href='#myCarousel1' role='button' data-slide='prev'>
                                                    <span class='glyphicon glyphicon-chevron-left'></span>
                                                </a>
                                                <a class='right carousel-control' href='#myCarousel1' role='button' data-slide='next'>
                                                    <span class='glyphicon glyphicon-chevron-right'></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/Slider-->
                        </div>
                                ";   
                            }*/
                        ?>
                    </div>
                </div>
                
                <div class="container-girls-info-btns">
                    <div class="col-xs-12 col-md-2 col-md-offset-4">
                        <a href="#" class="btn btn-success btn-block">
                            <?php
                                echo "<span class='glyphicon glyphicon-phone'></span> $list_get_url_announce[tel_announce]"; 
                            ?>
                        </a>
                    </div>
                    <div class="col-xs-12 col-md-2">
                        <a href="#" class="btn btn-success btn-block">
                            <?php
                                echo "<span class='glyphicon glyphicon-phone'></span> $list_get_url_announce[email_announce]"; 
                            ?>
                        </a>
                    </div>
                </div>
                
                
                <div class="container-table-girls-info col-xs-12 col-md-6 col-md-offset-3">
                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                <th>Local</th>
                                <td><?php echo "$list_get_url_announce[city_announce], $list_get_url_announce[state_announce]"; ?></td>
                            </tr>
                            <tr>
                                <th>Eu sou</th>
                                <td><?php echo $list_get_url_announce[sex_announce]; ?></td>
                            </tr>
                            <tr>
                                <th>Idade</th>
                                <td><?php echo $list_get_url_announce[age_announce]; ?> Anos</td>
                            </tr>
                            <tr>
                                <th>Etinia</th>
                                <td><?php echo $list_get_url_announce[color_announce]; ?></td>
                            </tr>
                            <tr>
                                <th>Atende</th>
                                <td><?php echo "$list_get_url_announce[service1_announce], $list_get_url_announce[service2_announce]"; ?></td>
                            </tr>
                            <tr>
                                <th>Locais</th>
                                <td><?php echo "$list_get_url_announce[place1_announce], $list_get_url_announce[place2_announce], $list_get_url_announce[place3_announce]"; ?></td>
                            </tr>
                            <tr>
                                <th>Serviços</th>
                                <td><?php echo "$list_get_url_announce[wish1_announce], $list_get_url_announce[wish2_announce], $list_get_url_announce[wish3_announce], $list_get_url_announce[wish4_announce], $list_get_url_announce[wish5_announce]"; ?></td>
                            </tr>
                            <tr>
                                <th>Idiomas</th>
                                <td><?php echo "$list_get_url_announce[language1_announce], $list_get_url_announce[language2_announce], $list_get_url_announce[language3_announce]"; ?></td>
                            </tr>
                            <tr>
                                <th>Publicado por</th>
                                <td><?php echo $list_get_url_announce[user_announce]; ?></td>
                            </tr>
                        </tbody>
                    </table>  
                    
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h3 class="panel-title">Cache</h3>
                        </div>
                        <div class="panel-body">
                            <table class="table table-hover">
                                <tbody>
                                    <tr>
                                        <td>30 Minutos</td>
                                        <td class="text-success"><strong>R$ <?php echo $list_get_url_announce[money1_announce]; ?></strong></td>
                                    </tr>
                                    <tr>
                                        <td>1 Hora</td>
                                        <td class="text-success"><strong>R$ <?php echo $list_get_url_announce[money2_announce]; ?></strong></td>
                                    </tr>
                                    <tr>
                                        <td>2 Horas</td>
                                        <td class="text-success"><strong>R$ <?php echo $list_get_url_announce[money3_announce]; ?></strong></td>
                                    </tr>
                                    <tr>
                                        <td>3 Horas</td>
                                        <td class="text-success"><strong>R$ <?php echo $list_get_url_announce[money4_announce]; ?></strong></td>
                                    </tr>
                                    <tr>
                                        <td>4 Horas</td>
                                        <td class="text-success"><strong>R$ <?php echo $list_get_url_announce[money5_announce]; ?></strong></td>
                                    </tr>
                                    <tr>
                                        <td>Per Noite</td>
                                        <td class="text-success"><strong>R$ <?php echo $list_get_url_announce[money6_announce]; ?></strong></td>
                                    </tr>
                                </tbody>
                            </table>  
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </div>  
    </div>
      
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
          jQuery(document).ready(function($) {
 
        $('#myCarousel1').carousel({
                interval: 5000
        });
 
        //Handles the carousel thumbnails
        $('[id^=carousel-selector-]').click(function () {
        var id_selector = $(this).attr("id");
        try {
            var id = /-(\d+)$/.exec(id_selector)[1];
            console.log(id_selector, id);
            jQuery('#myCarousel1').carousel(parseInt(id));
        } catch (e) {
            console.log('Regex failed!', e);
        }
    });
        // When the carousel slides, auto update the text
        $('#myCarousel').on('slid.bs.carousel', function (e) {
                 var id = $('.item.active').data('slide-number');
                $('#carousel-text').html($('#slide-content-'+id).html());
        });
});
    </script>
  </body>
</html>