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
  </head>
  <body>
    <div class="container-fliud">
        <div class="row">
            <div class="container-home">
                <!--
                <div class="vip col-xs-12">
                    <h3 class="vip-label"><span class="label label-warning"><span class="glyphicon glyphicon-star"></span> VIP</span></h3>
                    <div class="row"> 
                        <div id="myCarousel" class="carousel fdi-Carousel slide">
                         
                            <div class="carousel fdi-Carousel slide" id="eventCarousel" data-interval="0">
                                <div class="carousel-inner onebyone-carosel">
                                    <div class="item active">
                                        <div class="">
                                            <a href="#"><img src="imgs/vip/girl3.jpg" class="img-responsive center-block"></a>
                                            <div class="text-center">1</div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="">
                                            <a href="#"><img src="imgs/vip/girl2.jpg" class="img-responsive center-block"></a>
                                            <div class="text-center">2</div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="">
                                            <a href="#"><img src="imgs/vip/girl4.jpg" class="img-responsive center-block"></a>
                                            <div class="text-center">3</div>
                                        </div>
                                    </div>
                                </div>
                                <a class="left carousel-control" href="#eventCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                                <a class="right carousel-control" href="#eventCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
                            </div>
                        </div>
                    </div> 
                </div>
                -->
                <div class="container-gilrs col-xs-12 col-md-8 col-md-offset-2">
                    <div class="col-xs-4 col-md-3">
                        <a href="#">
                            <img src="imgs/vip/girl2.jpg" class="img-responsive">
                        </a>    
                    </div>
                    <div class="col-xs-8 col-md-9 container-girls-info">
                        <div class="col-md-6">
                        <a href="#">
                            <span class="label label-success">Premium</span>
                            <p class="vip"><big><strong>Nome Completo</strong></big></p>
                            <p class="help-block detail-small">
                                <small>00 Anos | Cidade, Estado | <span class="text-success">Cache R$150</span></small>
                            </p>
                        </a>  
                        </div>
                        <div class="col-md-6">
                            desc desc desc desc desc desc desc desc desc desc desc desc desc desc
                        </div>
                    </div>
                </div>
                
                <div class="container-gilrs col-xs-12 col-md-8 col-md-offset-2">
                    <div class="col-xs-4 col-md-3">
                        <a href="#">
                            <img src="imgs/vip/girl3.jpg" class="img-responsive">
                        </a>    
                    </div>
                    <div class="col-xs-8 col-md-6 container-girls-info">
                        <a href="#">
                            <span class="label label-success">Premium</span>
                            <p><big>Nome Completo</big></p>
                            <p class="help-block detail-small">
                                <small>00 Anos | Cidade, Estado | <span class="text-success">Cache R$150</span></small>
                            </p>
                        </a>    
                    </div>
                </div>
                
                <div class="container-gilrs col-xs-12 col-md-8 col-md-offset-2">
                    <div class="col-xs-4 col-md-3">
                        <a href="#">
                            <img src="imgs/vip/girl4.jpg" class="img-responsive">
                        </a>    
                    </div>
                    <div class="col-xs-8 col-md-6 container-girls-info">
                        <a href="#">
                            <span class="label label-success">Premium</span>
                            <p><big>Nome Completo</big></p>
                            <p class="help-block detail-small">
                                <small>00 Anos | Cidade, Estado | <span class="text-success">Cache R$150</span></small>
                            </p>
                        </a>    
                    </div>
                </div>
                
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