<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Planos</title>

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
                <a class="navbar-brand page-scroll" href="indexProd.php">Beach Sound</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="indexProd.php">Eventos</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="indexProd.php">Equipe</a>
                    </li>      
                     <li>
                        <a class="page-scroll" href="indexProd.php">Contato</a>
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
            </div>
        </div>
    </header>

    <!-- Portfolio Grid Section -->
    <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Planos</h2>
                    <h3 class="section-subheading text-muted">Os melhores planos com os melhores preços</h3>
                </div>
            </div>
                    <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                            </div>
                        </div>
                        <img src="img/portfolio/plano.jpg" class="img-responsive" alt="Livinho">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Bronze</h4>
                        <br>
                        <p>30 Shows por R$30,00 reais</p><br>
                    <a href="#"><button type="submit" class="btn btn-sm">Ver</button></a>                   
                     </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                            </div>
                        </div>
                        <img src="img/portfolio/plano.jpg" class="img-responsive" alt="Biquini">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Prata</h4>
                        <br>
                        <p>100 Shows por R$700,00 reais</p><br>
                    <a href="#"><button type="submit" class="btn btn-sm">Ver</button></a>                     
                </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                            </div>
                        </div>
                        <img src="img/portfolio/plano.jpg" class="img-responsive" alt="claudia">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Ouro</h4>
                        <br>
                         <p>390 Shows por R$2.340,00 reais</p><br>
                    <a href="#"><button type="submit" class="btn btn-sm">Ver</button></a>  
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
