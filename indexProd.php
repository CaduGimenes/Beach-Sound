<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Beach Sound</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link href="css/cyber.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js" integrity="sha384-0s5Pv64cNZJieYFkXYOTId2HMA2Lfb6q2nAcx2n0RTLUnCAoTTsS0nKEO27XyKcY" crossorigin="anonymous"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js" integrity="sha384-ZoaMbDF+4LeFxg6WdScQ9nnR1QC2MIRxA1O9KWEXQwns1G8UNyIEZIQidzb0T1fo" crossorigin="anonymous"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">



    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Beach Sound</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Eventos</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#team">Equipe</a>
                    </li>      
                     <li>
                        <a class="page-scroll" href="#contact">Contato</a>
                    </li>
                    <li>

                    <?php 
                                    session_start();

                                   $host = "localhost";
                                    $root = "root";
                                    $senha = "";

                                    $link = mysqli_connect($host, $root, $senha)
                                        or die ("Não foi possível conectar: ". mysql_error());

                                    $banco = mysqli_select_db($link, "db_TCC")
                                        or die ("Erro ao abrir o banco de dados: ". mysql_error());

                                     $sql = mysqli_query($link, "SELECT nm_imagem FROM tb_produtor WHERE nm_email = '".$_SESSION['login']."';");


                          while ($row = mysqli_fetch_array($sql)){ ?>
                              
                        <div class='dropdown'>
                        <?php
                        print  "<button class='btn btn-primary-2 dropdown-toggle' type='button' data-toggle='dropdown'><img src='img/perfil/".$row['nm_imagem']."'' class='img-circle' alt='Cinque Terre' width='55' height='50'>";}?>
                            <span class='caret'></span></button>" 
                            <ul class='dropdown-menu'>
                        

                          <?php


                                   $host = "localhost";
                                    $root = "root";
                                    $senha = "";

                                    $link = mysqli_connect($host, $root, $senha)
                                        or die ("Não foi possível conectar: ". mysql_error());

                                    $banco = mysqli_select_db($link, "db_TCC")
                                        or die ("Erro ao abrir o banco de dados: ". mysql_error());

                            if ($_SESSION['login']) {
                                
                                $nome = mysqli_query($link, "SELECT nm_produtor FROM tb_produtor WHERE nm_email = '".$_SESSION['login']."';");


                                while($array = mysqli_fetch_array($nome)){

                                 echo "<strong><center>".$array['nm_produtor']."</center><strong/>";
                                }
    

                            }

                            ?>
                            <center>
                            <li class="divider"></li>
                            <li><a href="eventosProd.php">Eventos</a></li>
                            <li class="divider"></li>
                            <li><a href="Cadastrar_Evento.php">Cadastrar evento</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Perfil</a></li>
                            <li class="divider"></li>
                            <li><a href="logout.php">Logout</a></li>
                             </center>
                          </ul>
                        </div>







                    </li>                
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Bem vindo ao maior site de</div>
                <div class="intro-heading">Eventos da Baixada</div>
                <a href="eventosProd.php" class="page-scroll btn btn-xl">Fale mais</a>
            </div>
        </div>
    </header>


    <!-- Portfolio Grid Section -->
    <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Eventos, Shows, Festas</h2>
                    <h3 class="section-subheading text-muted">Os melhores eventos da Baixada Santista</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/livinho.jpg" class="img-responsive" alt="Livinho">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Mc Livinho</h4>
                        <p class="text-muted">Santos - SP</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/biquini_cavadao_credito_vinicius_mochizuki.jpg" class="img-responsive" alt="Biquini">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Biquíni Cavadão</h4>
                        <p class="text-muted">Santos - SP</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/claudia_leitte_foto_andre_schiliro_-_divulgacao.png" class="img-responsive" alt="claudia">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Claudia Leitte</h4>
                        <p class="text-muted">Guarujá - SP</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/MENINO_NEY.jpg" class="img-responsive" alt="ney">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Ney Matogrosso</h4>
                        <p class="text-muted">Santos - SP</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/seu_jorge.jpg" class="img-responsive" alt="seujorge">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Seu Jorge</h4>
                        <p class="text-muted">Santos - SP</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/sorriso_maroto_credito_marcos_hermes.jpg" class="img-responsive" alt="sorrisao">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Sorriso Maroto</h4>
                        <p class="text-muted">Santos - SP</p>
                    </div>
                </div>
            </div>
        </div>
            <div class="col-lg-12 text-center">             
                     <a href="eventos.php" class="btn btn-xl">Ver mais</a>
                     </div>
    </section>

    
    <!-- Team Section -->
    <section id="team" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Nossa Incrível Equipe </h2>
                    <h3 class="section-subheading text-muted">Nossa Equipe é composta por cinco membros treinados e capacitados.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/1.jpg" class="img-responsive img-circle" alt="">
                        <h4>Gabriel Gomes</h4>
                        <p class="text-muted">Arquivística e Designer</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/2.jpg" class="img-responsive img-circle" alt="">
                        <h4>Carlos Gimenes</h4>
                        <p class="text-muted">Desenvolvedor Lider</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/3.jpg" class="img-responsive img-circle" alt="">
                        <h4>Gabriel Silva</h4>
                        <p class="text-muted">Desenvolvedor</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                 <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/4.jpg" class="img-responsive img-circle" alt="">
                        <h4>Willian Chilelli</h4>
                        <p class="text-muted">Desenvolvedor</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>     
                </div>
                 <div class="col-sm-4">
                    <div class="team-member">
                         
                        <h4></h4>
                        <p class="text-muted"></p>
                        <p class=>
                            <p><i class=></i></a>
                            </p>
                            <p><i class=></i></a>
                            </p>
                            <p><i class=></i></a>
                            </p>
                        </p>
                    </div>
                </div>
                 <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/5.jpg" class="img-responsive img-circle" alt="">
                        <h4>Hiago de Oliveira</h4>
                        <p class="text-muted">Desenvolvedor</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <p class="large text-muted">Beach Sound é um projeto que foi criado inicialmente como uma atividade escolar, mas com o potencial do projeto
                    levamos isso a outro nivel.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Clients Aside -->
    <aside class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/1.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/2.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/3.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/4.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
            </div>
        </div>
    </aside>

    <!-- Contato -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contato</h2>
                    <h3 class="section-subheading text-muted">Mande sua mensagem para nós!</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Seu Nome *" id="name" required data-validation-required-message="Por favor insira seu nome.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Seu Email *" id="email" required data-validation-required-message="Por favor insira seu endereço de email.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Telefone *" id="phone" required data-validation-required-message="Por favor insira seu número de telefone.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Sua mensagem *" id="message" required data-validation-required-message="Por favor insira sua mensagem."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Enviar Mensagem</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Beach Sound 2016</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#">Política de Privacidade</a>
                        </li>
                        <li><a href="#">Termos de Uso</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->

    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>MC Livinho</h2>
                                <p class="item-intro text-muted">Apresenta-se novamente na baixada santista.</p>
                                <img class="img-responsive img-centered" src="img/portfolio/palcomc.jpg" alt="livinho-modal">
                                </div>
                                
                                <p>Oliver Decesary Santos (São Paulo, 11 de novembro de 1995), mais conhecido pelo nome artístico MC Livinho, é um cantor brasileiro de funk paulista. Oliver nasceu em 11 de novembro de 1994 na cidade de São Paulo, no bairro Jardim Pedra Branca, localizado na Zona Norte, e sempre foi ligado à música desde sua infância. Segundo fontes, sua mãe o incentivava a investir na MPB, pois era fã de artistas como Maria Gadú, Ana Carolina, Chico Buarque e Djavan. Ele iniciou sua carreira musical como violinista em uma igreja em que frequentava no ano de 2003, sendo que executava músicas no recinto até o ano de 2008, e segundo o mesmo, "já estava tocando com uma boa noção de orquestra e nota".  </p>
                                <p>
                                    Venda de Ingressos: <a href="https://www.ticket360.com.br/evento/6777/mc-livinho">Apenas pela internet</a>&nbsp  Classificação : <strong>+18</strong> </p>
                                <ul class="list-inline">
                                    <li>Data: 09/03/2017</li>
                                    <li>Local: <a href="https://goo.gl/rK6bSi">Baccará Bar & Grill</a></li>
                                    <li>Cidade: Santos - SP</li>
                                    <li>Categoria: Funk</li>
                                </ul>
                                <p><strong>Duvidas? Entre em contato  <a href="home.php">conosco!</a></strong> </p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Fechar </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <h2>Biquíni Cavadão</h2>
                                <p class="item-intro text-muted">Biquíni Cavadão em Santos - SP.</p>
                                <img class="img-responsive img-centered" src="img/portfolio/biquini.jpg" alt="biquini-modal">
                                </div>
                                <p>Biquini Cavadão é uma banda de rock brasileira formada em 1983 no Rio de Janeiro. Composto por Bruno Gouveia, Carlos Coelho, Miguel Flores da Cunha e Álvaro "Birita" Lopes tendo atualmente, como músicos convidados o baixista e produtor Marcelo Magal , o guitarrista Edson Figurótico Pineschi e o saxofonista Walmer Carvalho. A banda fez parte da segunda geração de bandas dos anos 1980.</p>
                               <p>
                                    Venda de Ingressos: <a href="http://www.ingressonanet.com/evento/84/BIQUINI-CAVAD%C3%83O">Pela internet e em pontos de venda A partir de R$ 50</a>&nbsp  Classificação : <strong>+18</strong> </p>
                                <ul class="list-inline">
                                    <li>Data: 12/05/2017</li>
                                    <li>Horario: 22h00</li>
                                    <li>Local: <a href="https://goo.gl/vWrxBK">Capital Disco</a></li>
                                    <li>Cidade: Santos - SP</li>
                                    <li>Categoria: Rock</li>
                                </ul>
                                <p><strong>Duvidas? Entre em contato  <a href="home.php">conosco!</a></strong> </p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Fechar </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Claudia Leitte</h2>
                                <p class="item-intro text-muted">Claudia Leitte apresenta-se em Guarujá - SP</p>
                                <img class="img-responsive img-centered" src="img/portfolio/show_claudia_leitte-8932.jpg" alt="claudia-modal">
                                </div>
                                <p>Claudia Cristina Leite Inácio Pedreira (São Gonçalo, 10 de julho de 1980), mais conhecida pelo nome artístico Claudia Leitte, é uma cantora, compositora, apresentadora e empresária brasileira. Sua carreira teve início em 2001, na Bahia, como vocalista da banda Babado Novo, na qual lançou dois álbuns de estúdio, três álbuns ao vivo e dois DVDs e marcou sucessos como "Amor Perfeito", "Cai Fora", "Eu Fico", "Safado, Cachorro, Sem-vergonha", "Doce Desejo", "Bola de Sabão", "A Camisa e O Botão", "Insolação do Coração" e "Pensando em Você". Em 2008 deixou a banda para seguir carreira solo com o lançamento do single "Exttravasa", presente em seu primeiro álbum solo, Ao Vivo em Copacabana, de onde foram retiradas outros singles, "Beijar na Boca", "Pássaros" e "Horizonte". O álbum conquistou disco de ouro e o DVD platina tripla.</p>
                                 <p>
                                    Venda de Ingressos: <a href="https://www.ticket360.com.br/evento/6889/cheia-de-mania-apresenta-claudia-leitte">Pela internet e em pontos de venda R$ 50 feminino e R$ 70 masculino</a>&nbsp  Classificação : <strong>+18</strong> </p>
                                <ul class="list-inline">
                                    <li>Data: 30/04/2017</li>
                                    <li>Horario: 15h00</li>
                                    <li>Local: <a href="https://goo.gl/BTcu9b">Café de La Musique Guarujá</a></li>
                                    <li>Cidade: Guarujá - SP</li>
                                    <br><br>
                                    <li>Categoria: Axé, Pop, Reggae</li>
                                </ul>
                                <p><strong>Duvidas? Entre em contato  <a href="home.php">conosco!</a></strong> </p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Fechar </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Ney Matogrosso</h2>
                                <p class="item-intro text-muted">Ney Matogrosso apresenta-se em Santos - SP</p>
                                <img class="img-responsive img-centered" src="img/portfolio/135.jpg" alt="Ney-Grande">
                                </div>
                                <p>Ney de Souza Pereira (Bela Vista, 1 de agosto de 1941), mais conhecido como Ney Matogrosso, é um cantor, diretor e ator brasileiro. Ex-integrante dos Secos & Molhados (1973-1974), foi o artista que mais se sobressaiu do grupo após iniciar sua carreira solo com o disco Água do Céu - Pássaro (1975) e com suas apresentações subsequentes. É considerado pela revista Rolling Stone como a terceira maior voz brasileira de todos os tempos e, pela mesma revista, trigésimo terceiro maior artista brasileiro de todos os tempos. </p>
                                <p>
                                    Venda de Ingressos: <a href="http://www.ingressonanet.com/evento/92/Ney-Matogrosso">Pela internet e em pontos de vendaR$ 40 a R$ 250</a>&nbsp  Classificação : <strong>+18</strong> </p>
                                <ul class="list-inline">
                                    <li>Data: 15/07/2017</li>
                                    <li>Horario: 22h00</li>
                                    <li>Local: <a href="https://goo.gl/maoi0Z">Mendes Convention Center</a></li>
                                    <li>Cidade: Santos - SP</li>
                                    <li>Categoria: MPB</li>
                                </ul>
                                <p><strong>Duvidas? Entre em contato  <a href="home.php">conosco!</a></strong> </p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Fechar </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Seu Jorge</h2>
                                <p class="item-intro text-muted">Seu Jorge apresenta-se novamente em Santos - SP</p>
                                <img class="img-responsive img-centered" src="img/portfolio/seu-jorge.jpg" alt="jorgão">
                                </div>
                                <p>Seu Jorge, nome artístico de Jorge Mário da Silva (Belford Roxo,8 de junho de 1970) é um ator, cantor, compositor e multi-instrumentista brasileiro de MPB, R&B, samba e soul. Primogênito de quatro filhos (os outros são Charles, Vitório e Rogério), Seu Jorge teve uma infância dura mas tranquila no bairro Gogó da Ema, em Belford Roxo. Começou a trabalhar com dez anos de idade em uma borracharia, primeira de várias ocupações como contínuo, marceneiro e descascador de batatas em um bar. </p>
                                 <p>
                                    Venda de Ingressos: <a href="http://www.ingressonanet.com/evento/86/Seu-Jorge">Ingressos: Pela internet e em pontos de venda R$ 60 a R$ 120</a>&nbsp  Classificação : <strong>+18</strong> </p>
                                <ul class="list-inline">
                                    <li>Data: 01/07/2017</li>
                                    <li>Horario: 22h00</li>
                                    <li>Local: <a href="https://goo.gl/maoi0Z">Mendes Convention Center</a></li>
                                    <li>Cidade: Santos - SP</li>
                                    <li>Categoria: MPB</li>
                                </ul>
                                <p><strong>Duvidas? Entre em contato  <a href="home.php">conosco!</a></strong> </p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Fechar </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Sorriso Maroto</h2>
                                <p class="item-intro text-muted">Sorriso Maroto apresenta-se novamente em Santos - SP</p>
                              <img class="img-responsive img-centered" src="img/portfolio/maxresdefault.jpg" alt="sorrisão">
                                </div>
                                <p>Sorriso Maroto é uma banda de pagode romântico originário do Rio de Janeiro, RJ. Formado em 1997 pelo cantor e panderista Cris Oliveira, e mais tarde pelo cantor e compositor Bruno Cardoso. Até 2013, lançaram dez álbuns e diversas canções de grande sucesso: "Futuro Prometido"; "Estrela Maior"; "Coração Deserto"; "Me Olha Nos Olhos"; "Em Suas Mãos"; "Cadê Você"; "É Diferente"; "Nada de Pensar em Despedida"; "Pra Mim Não É"; "Eu Vacilei"; "Não Mereço Ser Amante"; "Amanhã"; "Tenho Medo"; "Sempre Meu Pensamento"; "Não Tem Perdão"; "Ainda Gosto de Você"; "Faz Assim"; "Fica Combinado Assim"; "Sinais"; entre muitos outras, que os tornaram um dos grupos de maior sucesso do país.</p>
                                 <p>
                                    Venda de Ingressos: <a href="https://www.bilheteriadigital.com/sorriso-maroto-i-13-05-13-de-maio">Pela internet e em pontos de venda R$ 30</a>&nbsp  Classificação : <strong>+18</strong> </p>
                                <ul class="list-inline">
                                    <li>Data: 13/05/2017</li>
                                    <li>Horario: 22h00</li>
                                    <li>Local: <a href="https://goo.gl/b10Ips">Associação Atlética dos Portuários de Santos</a></li>
                                    <li>Cidade: Santos - SP</li>
                                    <br><br>
                                    <li>Categoria: Pagode</li>
                                </ul>
                                <p><strong>Duvidas? Entre em contato  <a href="home.php">conosco!</a></strong> </p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Fechar </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contato.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/cyber.min.js"></script>

</body>

</html>
