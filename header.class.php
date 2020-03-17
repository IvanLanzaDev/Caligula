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
  </head>
  <body>
   <?php include("functions.class.php");?>
    <div class="container-fliud">
        <div class="row">
            <div class="container-header col-xs-12 col-md-12">
                <div class="container-search col-xs-12 col-md-12">
                   
                        <?php echo "<form method='get' class='hidden-md hidden-lg' action='search.php?name=$name_casting&sex=$sex_casting&age=$minage_casting&birth2_model=$maxage_casting'>"; ?>

                        <div class="form-group">
                            <input type="text" class="form-control" name="state_announce" placeholder="Digite o Estado">
                        </div>
                        <div class="form-group ">
                            <div class="input-group col-xs-12">
                                <input type="search" class="form-control col-xs12" placeholder="Palavra Chave" name="name_announce">
                                <span class="input-group-btn">
                                    <a class="btn btn-default btn-default col-xs-12" type="submit" data-toggle="modal" data-target="#adv_search" name="btn_simple_search" value="true">
                                    <span class="glyphicon glyphicon-search"></span>
                                    </a>
                                </span>
                            </div>
                        </div>
                    </form>
                    <div class="btn-group btn-group-justified hidden-md hidden-lg" role="group" aria-label="...">
                      <div class="btn-group" role="group">
                        <a href="#" class="btn btn-link white" data-toggle="modal" data-target="#adv_search"><span class="glyphicon glyphicon-zoom-in"></span> Busca Avançada</a>
                      </div>
                      
                    </div>
                    
                    <?php //echo "<form method='get' class='hidden-xs hidden-sm' action='search.php?name_announce=$name_search&age_announce=$maxage_search&sex_announce=$sex_search&color_announce=$color_search&minmoney=$minmoney_search&maxmoney=$maxmoney_search&wish=$wish_search&state=$state_search&city=$city_search'>"; ?>
                    
                    <?php 
                        echo "<form method='get' class='hidden-xs hidden-sm' action='search.php'>";
                    ?>
                    
                        <div class="col-md-6">
                            <div class="form-group col-md-12">
                                <input type="text" name="name_announce" class="form-control" placeholder="Palavra Chave" autofocus required>
                            </div>
                            <div class="form-group col-md-3">
                                <label>Faixa Etária</label>
                                <select name="min_age" class="form-control">
                                    <option selected>18</option>
                                    <option>19</option>
                                    <option>20</option>
                                    <option>21</option>
                                    <option>22</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label>&nbsp;</label>
                                <select name="age_announce" class="form-control">
                                    <option selected>18</option>
                                    <option>19</option>
                                    <option>20</option>
                                    <option>21</option>
                                    <option>22</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label>Procurando Por</label>
                                <select name="sex_announce" class="form-control">
                                    <option>Mulher</option>
                                    <option>Homem</option>
                                    <option>Outro</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label>Tipo</label>
                                <select name="color_announce" class="form-control">
                                    <option>Branco</option>
                                    <option>Negro</option>
                                    <option>Outro</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label>Cachê</label>
                                <select name="" class="form-control">
                                    <option selected>Min</option>
                                    <option value="100,00">R$100</option>
                                    <option value="200,00">R$200</option>
                                    <option value="300,00">R$300</option>
                                    <option value="400,00">R$400</option>
                                    <option value="500,00">R$500</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label>&nbsp;</label>
                                <select name="money2_announce" class="form-control">
                                    <option selected>Max</option>
                                    <option value="600,00">R$200</option>
                                    <option value="700,00">R$700</option>
                                    <option value="800,00">R$800</option>
                                    <option value="900,00">R$900</option>
                                    <option value="1.000,00">R$1000</option>
                                </select>
                            </div>
                     
                               <div class="form-group col-md-2">
                                <div class="checkbox">
                                <label><br>
                                    <input type="checkbox" name=""> Com fotos
                                </label>
                            </div>
                            </div>
                            <div class="form-group col-md-2">
                                <div class="checkbox">
                                    <label><br>
                                        <input type="checkbox" name=""> Com vídeos
                                    </label>
                                </div>
                            </div>
                            <div class="form-group col-md-2">
                                <div class="checkbox">
                                    <label><br>
                                        <input type="checkbox" name=""> Foto original
                                    </label>
                                </div>
                            </div>    
                            
                        </div>
                     
                        <div class="col-md-6">
                            <div class="form-group col-md-4">
                                <select name="wish1_announce" class="form-control">
                                    
                                    <?php
                                        while($list_get_wish1 = mysqli_fetch_array($get_wish)){
                                            echo "<option value='$list_get_wish1[name_wish]'>$list_get_wish1[name_wish]</option>";
                                        }  
                                    ?>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <input type="text" class="form-control" name="state_announce" placeholder="Estado">  <br><br>
                                <input type="text" class="form-control" name="city_announce" placeholder="Cidade">  
                            </div>
                            <div class="form-group col-md-4">
                                 <button type="submit" class="btn btn-primary btn-block" name="btn_search" value="true">Procurar</button>
                            </div>
                        </div>
                    </form>
                    
                    
                </div>
            </div>
            <div class="content-count col-xs-12 hidden-md hidden-lg">
                <div class="count col-xs-12 text-center">
                    <p class="white"><strong><?php echo $count_announce; ?></strong> Acompanhantes Encontradas</p>
                </div>
            </div>
        </div>  
    </div>
    
    <!-- ADV SEARCH -->
            <div class="modal fade col-xs-12 col-md-12" id="adv_search" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Busca Avançada</h4>
                  </div>
                  <div class="modal-body text-justify">
                     <form method="get" action="search.php?">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name_announce" placeholder="Palavra Chave" required>
                        </div>
                        <div class="form-group">
                            <label>Faixa Etaria</label>
                            <select class="form-control" name="">
                                <option selected>18</option>
                                <option>19</option>
                                <option>20</option>
                                <option>21</option>
                                <option>22</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="age_announce">
                                <option selected>18</option>
                                <option>19</option>
                                <option>20</option>
                                <option>21</option>
                                <option>22</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Procurando Por</label>
                            <select name="sex_announce" class="form-control">
                                <option>Mulher</option>
                                <option>Homem</option>
                                <option>Outro</option>
                            </select>
                        </div>
                        <div class="form-group">
                                <label>Tipo</label>
                                <select name="color_announce" class="form-control">
                                    <option>Branco</option>
                                    <option>Negro</option>
                                    <option>Outro</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Cachê</label>
                                <select name="" class="form-control">
                                    <option selected>Min</option>
                                    <option value="100,00">R$100</option>
                                    <option value="200,00">R$200</option>
                                    <option value="300,00">R$300</option>
                                    <option value="400,00">R$400</option>
                                    <option value="500,00">R$500</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>&nbsp;</label>
                                <select name="money2_announce" class="form-control">
                                    <option selected>Max</option>
                                    <option value="600,00">R$200</option>
                                    <option value="700,00">R$700</option>
                                    <option value="800,00">R$800</option>
                                    <option value="900,00">R$900</option>
                                    <option value="1.000,00">R$1000</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-success btn-block" name="btn_adv_search" value="true">Buscar</button>
                     </form>

                  </div>
                  <div class="modal-footer">
                    
                  </div>
                </div>
              </div>
            </div>
         <!-- END ADV SEARCH -->
         
  </body>
</html>