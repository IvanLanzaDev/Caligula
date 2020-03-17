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
    <div class="container-full-header col-lg-12">
    <nav class="navbar navbar-default navbar-fixed-top hidden-md hidden-lg">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
        
    <?php
        include('functions.class.php');
        session_start();
        if(!isset($_SESSION["email_user"]) || !isset($_SESSION["password_user"])){
            echo "
                <a href='login.php' class='navbar-toggle collapsed btn-xs btn-annunciment' data-toggle='' aria-expanded='false'>
                    Anuncie Aqui
                </a> 
            ";
        }else{
           echo "
                <a href='announce.php' class='navbar-toggle collapsed btn-xs btn-annunciment' data-toggle='' aria-expanded='false'>
                    Anuncie Aqui
                </a> 
            "; 
        }
    ?>
      
      <a class="navbar-brand" href="home.php">
        <img src="imgs/logo-small-nav.png" alt="Brand" class="logo-menu">  
      </a>
        
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class=""><a href="#" data-toggle="modal" data-target="#terms">Termos de Uso <span class="sr-only">(current)</span></a></li>
        <li><a href="#" data-toggle="modal" data-target="#conduct">Conduta</a></li>
        <li><a href="#" data-toggle="modal" data-target="#law">Regras de Anúncios</a></li>
        <li><a href="#" data-toggle="modal" data-target="#contact">Contato</a></li>
        <?php
            if(!isset($_SESSION["email_user"]) || !isset($_SESSION["password_user"])){
                echo "<li><a href='login.php'><strong class='text-success'>Entrar</strong></a></li>";
            }else{
                $get_session_user = mysqli_query($connect, "SELECT * FROM user WHERE email_user = '$_SESSION[email_user]'");
                $list_info_session_user = mysqli_fetch_array($get_session_user);
               echo "<li><a href='account.php?profile=$list_info_session_user[id_user]'><strong class='text-success'>Minha Conta</strong></a></li>";
               echo "<li><a href='logout.php'><strong class='text-danger'>Sair</strong></a></li>";
            }
        ?>  
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
      
    <div class="container-fluid hidden-xs hidden-sm">
        <div class="row">
            <div class="col-md-2">
                <a href="home.php">
                <img src="imgs/logo-transparent.png" class="img-responsive">
                </a>        
            </div>
            <div class="navbar-desktop col-md-offset-5 col-md-5">
                <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#terms">Termos de Uso </a>
                <a href="#" class="white" class="btn btn-danger" data-toggle="modal" data-target="#conduct">Conduta </a>
                <a href="#" class="white" class="btn btn-danger" data-toggle="modal" data-target="#law">Regras de Anúncio </a>
                <a href="#" class="white" class="btn btn-danger" data-toggle="modal" data-target="#contact">Contato </a>
                <?php
                    if(!isset($_SESSION["email_user"]) || !isset($_SESSION["password_user"])){
                        echo "<a href='login.php' class='btn btn-danger'>Inserir Anúncio</a>";
                    }else{
                       echo "<a href='announce.php' class='btn btn-danger'>Inserir Anúncio</a>";
                    }
                ?>  
                
                <div class="help-navbar">
                    <?php
                        if(!isset($_SESSION["email_user"]) || !isset($_SESSION["password_user"])){
                        echo "<a href='login.php' class='white'><span class='glyphicon glyphicon-user'></span> Login / Criar Conta</a>";
                        }else{
                        echo "<a href='account.php?profile=$list_info_session_user[id_user]' class='white'><span class='glyphicon glyphicon-user'></span> Minha Conta </a>";
                            echo "<a href='logout.php' class='btn btn-danger'></span>Sair</a>";
                        }
                    ?> 
                    
                    
                </div>
            </div>
        </div>  
    </div>  
      </div>
      
    <!-- MODALS -->
        <!-- TERMS -->
            <div class="modal fade col-xs-12 col-md-12" id="terms" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Termos de Uso</h4>
                  </div>
                  <div class="modal-body text-justify">
                     <!-- TERMOS -->
                      <h4>Aceitação dos nossos Termos</h4>
                    <p>Calígula ("Calígula ou Site"), site de classificados gratuitos virtual, disponível sob a URL www.Calígula.com e pertencente a W3 Ltd., uma companhia registrada em Jersey, sob número de registro 106411, oferece uma variedade de recursos incluindo classificados grátis, forums e diversos serviços de email (estes estão definidos aqui como "Serviços"). O sítio é servido por W3 LTD, uma companhia registrada em Nova Iorque, Estados Unidos. <br><br>

                    Os Serviços estão sujeitos aos Termos de Uso ("Termos"), que poderão ser atualizados pelo Calígula sempre que necessário. O Calígula poderá informar os seus usuários de mudanças significativas nos seus Termos de Uso, colocando-as disponíveis no Site, porém cabe ao Usuário checar os Termos periodicamente. <br><br>

                    Usando www.Calígula.com, você concorda em ficar vinculado por estes Termos e Condições (“Termos"). Você também concorda com nossa Política de Privacidade, que é parte integrante destes Termos, e aceita os cookies deste site. 
                    Se você tiver alguma objeção a qualquer termo ou condição, diretriz, ou subsequentes alterações introduzidas no site www.Calígula.com, recomendamos o desuso imediato do site. </p> <br>
                    
                    <h4>Conteúdo</h4>
                    <p>O Usuário concorda e declara que todos os anúncios, mensagens, comentários, arquivos, imagens, fotos, vídeos, arquivos de som ou outros materiais (aqui definidos como "Conteúdo") publicados, transmitidos ou com links no Site, são de responsabilidade total do Usuário que inseriu o Conteúdo. Mais especificamente, o Usuário é inteiramente responsável por todo e qualquer Conteúdo que ele inserir no, ou através do, Site e/ou dos Serviços. 
                    <br><br>
                    O Usuário entende que o Calígula não controla e/ou monitora previamente qualquer Anúncio disponibilizado através do Site pelo Usuário anunciante e, portanto, não é responsável por seu conteúdo. Ao acessar e/ou usar o Site, o Usuário pode ser exposto a Conteúdo eventualmente ofensivo, indecente, incorreto, falso, infrator e/ou repreensível. Ademais, o Site e seu Conteúdo podem conter links para outros sites da Internet, que não são relacionados ao Calígula. <br><br>
        
                    O Calígula não representa ou garante a autenticidade e exatidão das informações contidas em seu Site, uma vez que o conteúdo é incluído pelo Usuário sem qualquer tipo de ingerência do Calígula. O acesso feito através de links a qualquer outro site também é de responsabilidade e risco do próprio Usuário. Sob nenhuma circunstância o Calígula será responsabilizado de forma alguma por Conteúdo ou por qualquer perda ou dano de qualquer tipo incorridos como resultado do uso de qualquer conteúdo listado, por e-mail ou outra forma disponibilizado através do Serviço. <br><br>

                    O Usuário reconhece que o Calígula não examina, monitora previamente, aprova ou desaprova o seu Conteúdo. O Calígula tem o direito de (mas não é obrigado) remover total ou parcialmente qualquer Conteúdo disponível no Site, a seu próprio critério, por violar o nossos valores, estes Termos, a legislação e/ou regulamentação aplicável, ou por qualquer outro motivo que julgar apropriado, sem que isso gere qualquer tipo de direito ao Usuário.</p><br>
                    
                    <h4>Notificação sobre Infrações</h4>
                    <p>•	Caso qualquer pessoa, seja ou não Usuário do Site, se sentir lesado em relação a qualquer Anúncio e/ou Conteúdo, poderá encaminhar ao Calígula notificação por escrito solicitando sua exclusão e retirada do Site.<br>
                    •	No entanto, para não prejudicar Usuários de boa-fé, a retirada do Anúncio e/ou Conteúdo do Site dependerá de efetiva comprovação ou forte evidência da ilegalidade ou infração à lei, direitos de terceiros e/ou a estes Termos.<br>
                    •	As notificações deverão ser encaminhadas ao Calígula pela pessoa supostamente lesada ou, se for o caso, pelo titular do direito intelectual violado, contendo as seguintes informações:<br>
                    a) Identificação do objeto protegido por direitos intelectuais que tenha sido violado, se for o caso;<br>
                    b) Identificação do material que supostamente representa a infração, código do(s) Anúncio(s) e/ou link completo do Anúncio, ou, em caso de não se tratarem de Anúncios, informações necessárias para a devida identificação do Conteúdo;<br>
                    c) Declaração de que o notificante possui elementos suficientes para embasar a alegação de violação legal; e<br>
                    d) Declaração de que as informações contidas na notificação são precisas e verdadeiras, sob pena de incorrer nas consequentes responsabilidades cíveis e penais, e de que o notificante está autorizado a agir em nome do titular do direito supostamente violado.<br>
                    •	As notificações deverão ser encaminhadas ao e-mail atendimento@Calígula.com. O notificante reconhece que caso não cumpra com todos os requisitos mencionados acima, sua notificação poderá não ser considerada, sem que isso gere qualquer direito e/ou ateste conhecimento prévio do caso pelo Calígula.</p><br>

                    <h4>Privacidade e Divulgação de Informação</h4>
                    <p>Ao usar o Site ou qualquer dos Serviços, o Usuário reconhece e concorda que o Calígula poderá, a seu critério, divulgar o Conteúdo publicado pelos Usuários, assim como reter, armazenar e/ou divulgar as suas informações pessoais, endereço de e-mail, endereço de IP e outras informações no caso de exigência legal ou se necessário para: colaborar com ações legais, investigações e/ou procedimentos administrativos; cumprir com esses Termos; responder a reclamações referentes à existência de Conteúdo que possa infringir direitos de terceiros ou de caráter supostamente ilegal; responder a reclamações de que as informações pessoais ou de contato (por exemplo, telefone, endereço, etc.) de terceiros foram publicadas ou transmitidas sem o consentimento de seu detentor ou como uma forma de assédio; proteger os direitos, propriedade ou segurança pessoal do Calígula, seus Usuários e do público em geral. </p><br>
                    
                      <h4>Serviço de Renovação Automática:</h4>
                    <p>O Usuário que eventualmente anuncie produtos de comercialização e/ou publicidade controlada se compromete e declara, sob pena de responder nos termos da lei, conhecer todos os termos legais para o anúncio, publicidade, exposição à venda e comercialização destes. 

                    O Calígula sugere, ademais, que sejam expostos juntamente com o Anúncio, os respectivos documentos comprobatórios da regularidade da venda destes determinados produtos e declara, para todos os fins, que não assume qualquer responsabilidade pela legalidade e veracidade destas informações, documentos e Conteúdo.

                    O Calígula se compromete a envidar seus melhores esforços para excluir e retirar do Site os Anúncios, mediante denúncia dos Usuários e/ou órgãos competentes, que ofertem produtos com comercialização e/ou publicidade controlada sem as devidas indicações de registro e/ou demais documentos que se façam necessários. Por razões técnicas e a fim de evitar o prejuízo a Usuários de boa-fé, o Calígula apenas se compromete com a exclusão dos anúncios denunciados quando estes apresentarem forte evidência da eventual infração e apontamento inequívoco do Anúncio determinado, seja pela indicação do link específico completo ou do código do Anúncio.</p><br>

                        <h4>Negociações entre Pessoas</h4>
                    <p>O Usuário está ciente e aceita que as negociações entre organizações e/ou indivíduos que se originem através deste Serviço, incluindo pagamento e entrega de bens e serviços e qualquer outros termos, condições, garantias, representações, sociedades, etc. associados a tais negociações, são de responsabilidade total e exclusiva dos Usuários comprador, vendedor e/ou anunciante. O Calígula não será responsável por qualquer perda ou dano que resulte de tais negociações. O Calígula atua apenas como um provedor de conteúdo de terceiros, disponibilizando espaços para Anúncios e Conteúdos de terceiros. Os Usuários devem negociar entre si diretamente, sem a intervenção e/ou intermediação direta ou indiretamente do Calígula e, por isso, o Site permite a divulgação de contatos próprios e independentes dos Usuários para que eles possam se contatar fora da plataforma virtual do Calígula. </p><br>

                        <h4>Limites do Serviço</h4>
                    <p>O Usuário aceita e reconhece que o Calígula estabelece limites aos seus Serviços como, por exemplo, número máximo de dias que um Conteúdo permanecerá no Site, número e tamanho máximo de anúncios publicados no Site, número de mensagens enviadas, ou qualquer Conteúdo que seja transmitido pelo Calígula ou arquivado no Site e a frequência que o Usuário poderá acessar o Serviço. Aceita também que o Calígula não tem responsabilidade alguma sobre erros ou perda de Conteúdo guardado no Site ou transmitido pelo nosso Serviço. Ademais, reconhece que o Calígula se reserva o direito de modificar, suspender ou descontinuar o Serviço a qualquer momento sem aviso prévio, sem que isso gere qualquer tipo de direitos aos Usuários ou obrigações ao Calígula.</p><br>

                        <h4>Garantias</h4>
                    <p>O Usuário aceita e está ciente de de que o Calígula não controla, revisa ou monitora previamente qualquer dos Conteúdos inseridos por terceiros no Site e, por tanto, não se responsabiliza pela precisão, legalidade, veracidade, segurança, licitude e/ou qualidade destes. O uso do Site em eventuais transações realizadas entre Usuários é de sua total responsabilidade e feita por conta e risco do Usuário. O Calígula também não se responsabiliza por links publicados em nosso Site, tampouco por vírus ou componentes perigosos que se encontrem conectados ao Calígula ou aos Serviços.</p>
                  </div>
                  <div class="modal-footer">
                    
                  </div>
                </div>
              </div>
            </div>
         <!-- END TERMS -->
         <!-- CONDUCT -->
            <div class="modal fade col-xs-12 col-md-12" id="conduct" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Conduta e Legal</h4>
                  </div>
                  <div class="modal-body text-justify">
                     <!-- CONDUTA E LEGAL -->
                      <h4>Conduta e Legal</h4>
<p>O usuário concorda, sob pena de responder legalmente, em não publicar Anúncios, enviar e-mails ou disponibilizar no Calígula Conteúdo que:<br>

•	seja ilegal, perigoso, ameaçador, abusivo, perturbador, difamatório, pornográfico, calunioso, invasivo à privacidade de terceiros ou assedia, causa dano, ofende e ameaça, de qualquer forma, menores de idade;<br>
•	Os anúncios no Calígula precisam estar DENTRO DA LEI. Anunciar os seguintes termos ou relacionados a estes também não será permitido: escravo(a), sufocar, sexo forçado, estupro, intoxicação, abuso, drogas, tortura;<br>
•	assedia, degrada, intimida, ameaça ou descrimina um indivíduo ou grupo de indivíduos de acordo com a religião, sexo, orientação sexual, raça, etnia, idade ou condição física e/ou mental;<br>
•	represente indevidamente e de má fé a identidade de um determinado indivíduo ou entidade, inclusive mas não somente a identidade de um funcionário do Calígula, ou que faz afirmações falsas ou enganosas sobre a sua relação com um determinado indivíduo ou entidade;<br>
•	usa informação pessoal ou de identificação de terceiros sem o seu prévio consentimento explícito;<br>
•	seja falso, enganoso, malicioso, traiçoeiro, contém informação errada ou de má fé;<br>
•	viola as leis de direitos autorais e de propriedade intelectual, ou Conteúdo que o Usuário não tem o direito, seja sob a lei, sob contrato ou sob relações de confiança, de disponibilizar;<br>
•	constitui ou contém "material publicitário não desejado", "lixo eletrônico", "spams", "correntes", "esquemas piramidais", ou qualquer propaganda comercial não solicitada;<br>
•	contém ou constitui qualquer forma de propaganda (1) que esteja publicado em áreas do Calígula que não são designadas para este fim, ou (2) enviada por e-mail para os Usuários do Calígula que pediram para não ser contatados por esse tipo de serviço, produto ou interesse comercial.<br>
•	inclui links para sites de serviços e produtos, exceto se forem links comprovados e autorizados pelo Calígula e com o respectivo plano pago;<br>
•	anuncia qualquer tipo de serviço ilegal ou a venda de itens ilegais ou regulados pela lei;<br>
•	contém vírus ou códigos de programação, arquivos ou programas designados a interromper, destruir ou limitar o funcionamento de programas ("softwares"), equipamentos de computação e periféricos ou equipamentos de telecomunicação;<br>
•	impeça o fluxo normal de mensagens no Site por causa do envio de mensagens em quantidade excessiva, ou que afeta negativamente o uso do Calígula pelos seus Usuários; ou<br>
•	contém endereços de e-mails, cabeçalhos, assinaturas ou qualquer outro identificador falso para manipular e esconder a origem do Conteúdo transmitido no Site<br>

Adicionalmente, o Usuário se compromete e concorda em não:<br>
•	entrar em contato com pessoas que pediram para não ser contatadas;<br>
•	"perseguir" ou assediar terceiros;<br>
•	coletar informações pessoais de terceiros para uso comercial ou ilegal;<br>
•	usar de meios eletrônicos para baixar informação do Site, com exceção de ferramentas de busca da Internet, por exemplo: Google e arquivos públicos não-comerciais (arquivo.org) que estejam de acordo com os nossos arquivos robost.txt;<br>
•	publicar anúncios de outros locais ou que sejam irrelevantes, publicar o mesmo anúncio ou de similar conteúdo várias vezes ou sobrecarregar o Site; e<br>
•	publicar o mesmo item ou serviço em mais de uma categoria ou fórum ou em mais de uma região metropolitana; ou tentar acessar o sistema do Calígula ou engajar em atividades que destruam, danifiquem, depreciem, interfiram ou debilitem a performance dos nossos Serviços ou do Site.</p><br>



                                           <h4>Política de Spam</h4>
<p>O Usuário concorda em não enviar e-mails de propaganda não solicitados, lixo eletrônico e/ou spams para os e-mails do Calígula ou através do sistema do Calígula. <br>
Os Termos constituem o acordo integral entre o Usuário e o Calígula e substituem qualquer acordo ou termo anterior estabelecido entre as partes. Os Termos, deveres e obrigações estabelecidos entre o Usuário e o Calígula são regidos pelas leis da República Federativa do Brasil. Caso o Calígula deixe de cumprir quaisquer das disposições destes Termos, ou deixe de exigir que os mesmos sejam em qualquer parte cumpridos, não constituirá renúncia a qualquer das disposições presentes nestes Termos. Se qualquer item deste acordo for considerado legalmente inválido por qualquer corte, os demais permanecerão completamente válidos. </p><br>


                       <h4>Direito de Propriedade Intelectual</h4>
<p>Os elementos encontrados no Site ("Elementos"), com exceção dos Conteúdos e/ou Anúncios submetidos por Usuários, são de titularidade, ou licenciados para, do Calígula e estão sujeitos aos direitos intelectuais de acordo com as leis brasileiras e tratados e convenções internacionais dos quais o Brasil seja signatário. <br>Apenas a título exemplificativo, entendem-se como Elementos: textos, softwares, scripts, imagens gráficas, fotos, sons, músicas, vídeos, recursos interativos e similares, marcas, marcas de serviços, logotipos e "look and feel" e ferramentas do Site. Tais Elementos não podem ser copiados, usados, reproduzidos, distribuídos, transmitidos, exibidos, difundidos, licenciados, vendidos ou, de outro modo, explorados para quaisquer fins, sem o consentimento prévio e por escrito do Calígula. O Usuário também concorda em não burlar, desativar ou, de alguma forma, interferir em recursos e/ou ferramentas relacionados à segurança do Site, sob pena de incorrer nas medidas judiciais cabíveis.</p><br>


                                          <h4>Responsabilidade</h4>
<p>O Usuário entende plenamente que a responsabilidade do Calígula está restrita aos danos comprovadamente causados direta e exclusivamente pela prestação de seus Serviços. Neste sentido, o Calígula não será responsável por perdas e danos resultados do uso ou mau uso do Site e dos Serviços, da falta de habilidade em usar o Site e e/ou os Serviços, ou, ainda, da interrupção, suspensão ou modificação do Site ou dos Serviços. <br>
ESTA LIMITAÇÃO DE RESPONSABILIDADE TAMBÉM SE APLICA COM RELAÇÃO AOS DANOS E PERDAS OCORRIDOS ATRAVÉS DO RECEBIMENTO E/OU NEGOCIAÇÃO DE PRODUTOS E SERVIÇOS, INFORMAÇÕES E CONSELHOS DE TERCEIROS ATRAVÉS DO SITE DO CALÍGULA VIA ANÚNCIOS, MENSAGENS, E-MAILS OU LINKS NO NOSSO SITE. </p><br>


                       <h4>Indenização</h4>
<p>O Usuário concorda em indenizar e garantir que o Calígula, suas subsidiárias, associados, sucessores, diretores, agentes, provedores de serviços, funcionários, fornecedores e empregados, está livre do pagamento de quaisquer cobranças, reclamações e exigências como honorários de advogados e custas judiciais geradas por terceiros em decorrência do Conteúdo publicado por este ou através de seu login através Calígula ou, ainda, por violação dos Termos, de qualquer direito de terceiros e/ou da legislação aplicável.</p><br>


                  <h4>Cobrança | Saldo negativo</h4>
<p>Se a sua instituição financeira rejeitar ou reverter um pagamento devido ao cartão de crédito perdido ou roubado , o Calígula reserva-se o direito de cancelar o seu anúncio e bloquear a sua conta. Se você não corrigir o saldo negativo de sua conta do Calígula no prazo de dois dias o Calígula poderá emitir uma nota de débito que você deverá pagar por cartão de crédito. <br>Se você enviar um novo pedido on-line e o saldo de sua conta do Calígula for menor do que o valor total do seu pedido, o seu pagamento será usado automaticamente para pagar as despesas e quitar o saldo negativo até R$ 0,00, sem que o seu anúncio e / ou opções de destaque que estão sendo pedidos sejam postados.</p><br>


                                 <h4>Reembolso - Pagamentos por boleto</h4>
<p>O Usuário concorda e aceita que o Calígula não fará reembolso de um pagamento efetuado por boleto bancário. Se o Usuário pagar um plano de destaque por boleto bancário e o plano não ficar ativado, pode suceder que o anúncio não respeita as regras do nosso site. Nesse caso terá de modificar o seu anúncio e o plano será manualmente ativado. O Usuário deve entrar em contato com o apoio ao cliente para saber mais informações.</p>

                  </div>
                  <div class="modal-footer">
                    
                  </div>
                </div>
              </div>
            </div>
         <!-- END CONDUCT -->
         
         <!-- LAW -->
            <div class="modal fade col-xs-12 col-md-12" id="law" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Regras de Anúncio</h4>
                  </div>
                  <div class="modal-body">
                     <!-- REGRAS -->
                     <p>Nossas políticas são projetados para criar um ambiente seguro e justo para todos usando o site Calígula. Aprender o que é permitido pode ajudá-lo a evitar acidentalmente quebrar as regras e ajuda todos a ter uma grande experiência. </p>

            <h4>Postando um anúncio no Calígula</h4>

            <p>Anúncios que não cumprem com os nossos Termos serão removidos do site. Esta lista não é exaustiva e o Calígula reserva-se o direito de remover qualquer anúncio sem aviso ou outra notificação. Qualquer anúncio que suspeitamos ser spam ou fraudulento será removido. </p>
            <p><strong>O que se segue é proibido no Calígula: </strong></p>

            <p>•	Colocar vários anúncios cujo conteúdo é idêntico ou similar. Você só pode ter um máximo de um anúncio para o mesmo item ou serviço por área local
            •	Oferta de vários bens ou serviços no mesmo anúncio que não estejam relacionados
            •	A publicação de um anúncio que é muito curta ou ambígua. Isso poderia resultar em um anúncio que está sendo classificado como spam
            •	Postar um anúncio, cujo propósito é proibido por lei
            •	Usando os dados (nome, número de telefone, endereço, e-mail, fotos, etc) de outra pessoa sem a sua permissão ou fornecendo dados de contacto falsos
            •	Revelando elementos de natureza privada ou violar a privacidade de qualquer pessoa ou empresa (incluindo a publicação de rostos ou assinaturas)
            •	Copiando informações postado por outro usuário
            •	Publicação de conteúdo que infrinja direitos de propriedade físicas ou intelectuais
            •	Perturbar a atividade de qualquer outro usuário
            •	Assumir a identidade de Calígula e / ou dos seus empregados
            •	A publicação de um anúncio na categoria errada ou subcategoria
            •	Crianças: O uso deste site é proibida a menores de 16 anos de idade
            •	Incluindo um número de telefone de valor acrescentado em um anúncio publicitário (exceto em "Astrologia")
            •	A publicação de anúncios com o objetivo de sites ou serviços semelhantes aos do Calígula.com
            •	Promoção de um site (você só pode incluir um link em seu anúncio se ele fornece mais informações sobre o produto que está vendendo)
            •	Promover presentes, sorteios ou outros prêmios
            •	Fazer comentários que são falsos, difamatórios, profanos, odiosos, abusivos, pornográficos, obscenos ou de qualquer natureza inadequado (deixada a nosso critério)
            •	Qualquer propaganda ou mensagem contendo um vírus ou outros aspectos contaminantes ou agente destrutivo que impede o funcionamento adequado deste site ou de acesso a este site por nossos usuários

            Nós recomendamos que você compre um anúncio destacado, se desejar cobertura nacional. Para obter mais informações por favor clique aqui </p>

            <h4>Serviços</h4>

            <p>Os pontos seguintes estão proibidos de ser anunciados com referência específica à categoria Serviços: 

            •	Solicitando / oferecendo financiamento ou empréstimos entre os indivíduos</p>


            <h4>Relacionamentos</h4>

            <p>Os pontos seguintes estão proibidos de ser anunciados com referência específica à categoria Relacionamentos: 

            •	Menores: A publicação de um anúncio nesta categoria é proibido para menores de 18 anos
            •	Números de telefone não Brasileiros.
            •	Atos sexuais como pagamento
            •	Qualquer link (ou qualquer convite para usar um motor de busca para encontrar este link) para outro site ou blog
            •	Serviços de namoro e sites de namoro
            •	Anúncios com conteúdo mostrando procura por sexo pago, se utillizando de qualquer recurso material (dinheiro, qualquer outra compensação material).

            Nesta categoria somente permitimos uma conta por usuário.
            Nesta categoria só pode ter um anúncio, se você quiser colocar um novo, tem de eliminar o antigo primeiro. </p>

            <h4>Acompanhantes e Massagens</h4>

          <p>  Os pontos seguintes estão proibidos de ser anunciados com referência específica à categoria Acompanhantes e Massagens: 

            •	Os anúncios que são demasiado curtos ou ambíguos
            •	Os anúncios que não especificam claramente o serviço oferecido (Acompanhantes ou massagem)
            •	Os anúncios que contenham imagens de nudez completa e posições sexuais ou sugestivas
            •	Anúncios que são postados por pessoa diferente daquela que presta o serviço
            •	Anúncios de casa de prostituição
            •	Anúncios de agência física ou virtual de prostituição
            •	Anúncios de prostituição que tenham terceiros como intermediários
            •	Anúncios com conteúdo mostrando procura por sexo pago, se utillizando de qualquer recurso material (dinheiro, qualquer outra compensação material).

            Nesta categoria somente permitimos uma conta por usuário.</p>

                  </div>
                  <div class="modal-footer">
                    
                  </div>
                </div>
              </div>
            </div>
         <!-- END LAW -->
         <!-- CONTACT -->
            <div class="modal fade col-xs-12 col-md-12 text-center" id="contact" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Contato</h4>
                  </div>
                  <div class="modal-body">
                    <address>
                        <h4 class="text-danger">Caligula</h4>
                        <p class="text-muted">contato@caligula.com.br</p>
                        
                    </address>
                  </div>
                  <div class="modal-footer">
                    
                  </div>
                </div>
              </div>
            </div>
         <!-- END CONTACT -->
         
         
  </body>
</html>