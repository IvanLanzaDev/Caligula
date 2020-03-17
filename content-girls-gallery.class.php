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
      <style>
.carousel-inner.onebyone-carosel { margin: auto; width: 90%; }
.onebyone-carosel .active.left { left: -33.33%; }
.onebyone-carosel .active.right { left: 33.33%; }
.onebyone-carosel .next { left: 33.33%; }
.onebyone-carosel .prev { left: -33.33%; }
.carousel-control{background: transparent !important;}
      </style>
      
      <?php include("functions.class.php"); ?>
  </head>
  <body>
    <div class="container-fliud">
        <div class="row">
            <div class="container-home">
                <?php
                    if($type_user == 0){
                        echo "
                            <div class='vip col-xs-12'>
                                <h3 class='vip-label'><span class='label label-warning'><span class='glyphicon glyphicon-camera'></span></span></h3>
                                <div class='row'> 
                                    <div id='myCarousel' class='carousel fdi-Carousel slide'>

                                        <div class='carousel fdi-Carousel slide' id='eventCarousel' data-interval='0'>
                                            <div class='carousel-inner onebyone-carosel'>
                                                <div class='item active'>
                                                    <div>
                                                        <a href='#'><img src='$list_get_url_announce[photo1_announce]' class='img-responsive center-block'></a>

                                                    </div>
                                                </div>
                                                <div class='item'>
                                                    <div>
                                                        <a href='#'><img src='$list_get_url_announce[photo2_announce]' class='img-responsive center-block'></a>

                                                    </div>
                                                </div>
                                                <div class='item'>
                                                    <div>
                                                        <a href='#'><img src='$list_get_url_announce[photo3_announce]' class='img-responsive center-block'></a>

                                                    </div>
                                                </div>
                                            </div>
                                            <a class='left carousel-control' href='#eventCarousel' data-slide='prev'><span class='glyphicon glyphicon-chevron-left'></span></a>
                                            <a class='right carousel-control' href='#eventCarousel' data-slide='next'><span class='glyphicon glyphicon-chevron-right'></span></a>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        ";
                    }else{
                        echo "
                            <div class='vip col-xs-12'>
                                <h3 class='vip-label'><span class='label label-warning'><span class='glyphicon glyphicon-camera'></span></span></h3>
                                <div class='row'> 
                                    <div id='myCarousel' class='carousel fdi-Carousel slide'>

                                        <div class='carousel fdi-Carousel slide' id='eventCarousel' data-interval='0'>
                                            <div class='carousel-inner onebyone-carosel'>
                                                <div class='item active'>
                                                    <div>
                                                        <a href='#'><img src='$list_get_url_announce[photo1_announce]' class='img-responsive center-block'></a>

                                                    </div>
                                                </div>
                                                <div class='item'>
                                                    <div>
                                                        <a href='#'><img src='$list_get_url_announce[photo2_announce]' class='img-responsive center-block'></a>

                                                    </div>
                                                </div>
                                                <div class='item'>
                                                    <div>
                                                        <a href='#'><img src='$list_get_url_announce[photo3_announce]' class='img-responsive center-block'></a>

                                                    </div>
                                                </div>
                                                <div class='item'>
                                                    <div>
                                                        <a href='#'><img src='$list_get_url_announce[photo4_announce]' class='img-responsive center-block'></a>

                                                    </div>
                                                </div>
                                                <div class='item'>
                                                    <div>
                                                        <a href='#'><img src='$list_get_url_announce[photo5_announce]' class='img-responsive center-block'></a>

                                                    </div>
                                                </div>
                                                <div class='item'>
                                                    <div>
                                                        <a href='#'><img src='$list_get_url_announce[photo6_announce]' class='img-responsive center-block'></a>

                                                    </div>
                                                </div>
                                                <div class='item'>
                                                    <div>
                                                        <a href='#'><img src='$list_get_url_announce[photo7_announce]' class='img-responsive center-block'></a>

                                                    </div>
                                                </div>
                                                <div class='item'>
                                                    <div>
                                                        <a href='#'><img src='$list_get_url_announce[photo8_announce]' class='img-responsive center-block'></a>

                                                    </div>
                                                </div>
                                                <div class='item'>
                                                    <div>
                                                        <a href='#'><img src='$list_get_url_announce[photo9_announce]' class='img-responsive center-block'></a>

                                                    </div>
                                                </div>
                                                <div class='item'>
                                                    <div>
                                                        <a href='#'><img src='$list_get_url_announce[photo10_announce]' class='img-responsive center-block'></a>

                                                    </div>
                                                </div>
                                                <div class='item'>
                                                    <div>
                                                        <a href='#'>$list_get_url_announce[video_announce]</a>

                                                    </div>
                                                </div>
                                            </div>
                                            <a class='left carousel-control' href='#eventCarousel' data-slide='prev'><span class='glyphicon glyphicon-chevron-left'></span></a>
                                            <a class='right carousel-control' href='#eventCarousel' data-slide='next'><span class='glyphicon glyphicon-chevron-right'></span></a>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        ";
                    }
                ?>
            </div>
        </div>  
    </div>
      
      <script>
        $(document).ready(function () {
    $('#myCarousel').carousel({
        interval: 10000
    })
    $('.fdi-Carousel .item').each(function () {
        var next = $(this).next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));

        if (next.next().length > 0) {
            next.next().children(':first-child').clone().appendTo($(this));
        }
        else {
            $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
        }
    });
});
      </script>
  </body>
</html>