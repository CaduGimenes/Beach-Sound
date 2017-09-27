<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Eventos</title>

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
                        <a class="page-scroll" href="#portfolio">Eventos</a>
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
                              
                        <?php

                        print "<div class='dropdown'>";
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
                                
                                echo "<center>
                                        <li class='divider'></li>
                                        <li><a href='eventos.php'>Eventos</a></li>
                                        <li class='divider'></li>
                                        <li><a href='#''>Perfil</a></li>
                                        <li class='divider'></li>
                                        <li><a href='logout.php'>Logout</a></li>
                                         </center>
                                      </ul>";

                            }

                                 
                         
?>     
                           
                        </div> 
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
    <section id='portfolio' class='bg-light-gray'>;
        <div class='container'>
            <div class='row'>
                <div class='col-lg-12 text-center'>
                    <h2 class='section-heading'>Eventos, Shows, Festas</h2>
                    <h3 class='section-subheading text-muted'>Os melhores eventos da Baixada Santista</h3>
                </div>
            </div>
                <div class='row'>


<?php
    
    echo "<div class='row'>";


       $host = "localhost";
    $root = "root";
    $senha = "";

    $link = mysqli_connect($host, $root, $senha)
        or die ("Não foi possível conectar: ". mysql_error());

    $banco = mysqli_select_db($link, "db_TCC")
        or die ("Erro ao abrir o banco de dados: ". mysql_error());

    $query = mysqli_query($link, "SELECT * FROM tb_evento");
       
       while ($dados = mysqli_fetch_assoc($query)){
        
        
                $imagem1 = $dados['nm_img_thumb'];
                $imagem2 = $dados['nm_img_banner'];
  

     echo "      <div class='col-md-4 col-sm-6 portfolio-item'>";
     echo " <a href='#".$dados['cd_evento']."' class='portfolio-link' data-toggle='modal'>";
     echo "                   <div class='portfolio-hover'>";
     echo "                      <div class='portfolio-hover-content'>";
     echo "                           <i class='fa fa-plus fa-3x'></i>";
     echo "                      </div>";
     echo "                   </div>";
     echo "                   <img src='img/portfolio/$imagem1' class='img-responsive' alt='default'>";
     echo "               </a>";
     echo "               <div class='portfolio-caption'>";
     echo "                   <h4>".$dados['nm_evento']."</h4>";
     echo "                  <p class='text-muted'>".$dados['nm_cidade']." - SP</p>";
     echo "                </div>";
     echo "</div>";


                
}
        echo "</section>";

?>


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
    <?php

   $host = "localhost";
    $root = "root";
    $senha = "";

    $link = mysqli_connect($host, $root, $senha)
        or die ("Não foi possível conectar: ". mysql_error());

    $banco = mysqli_select_db($link, "db_TCC")
        or die ("Erro ao abrir o banco de dados: ". mysql_error());

    $query = mysqli_query($link, "SELECT * FROM tb_evento");



     while ($dados = mysqli_fetch_assoc($query)) {

        $data = strtotime($dados['dt_evento']);
        $formato = date('d/m/Y', $data);

    echo "<div class='portfolio-modal modal fade' id='".$dados['cd_evento']."' tabindex='-1' role='dialog' aria-hidden='true'>";
    echo "    <div class='modal-dialog'>";
    echo "        <div class='modal-content'>";
    echo "            <div class='close-modal' data-dismiss='modal'>";
    echo "                <div class='lr'>";
    echo "                    <div class='rl'>";
    echo "                    </div>";
    echo "                </div>";
    echo "            </div>";
    echo "            <div class='container'>";
    echo "                <div class='row'>";
    echo "                    <div class='col-lg-8 col-lg-offset-2'>";
    echo "                        <div class='modal-body'>";
    echo "                                <h2>".$dados['nm_evento']."</h2>";
    echo"                            <p class='item-intro text-muted'>Apresenta-se na baixada santista.</p>";
    echo "                            <img class='img-responsive img-centered' src='img/portfolio/".$dados['nm_img_banner']."' alt='default-modal'>";
    echo "                            </div>";
    echo "                             <br> <br>";
    echo                             "<p>".$dados['nm_descricao']."</p>";
    echo                               "<p>";
    echo                                "    Venda de Ingressos: <a href='h#'>".$dados['nm_venda']."</a>&nbsp  Classificação : <strong>+".$dados['cd_idade']."</strong> </p>";
    echo "                        <ul class='list-inline'>";
    echo "                            <li>Data: ".$formato."</li>";
    echo "                                 <li>Local: <a href='#'>".$dados['nm_estabelecimento']."</a></li>";
    echo "                                <li>Cidade: ".$dados['nm_cidade']." - SP</li>";
    echo "                                <li>Categoria: ".$dados['nm_categoria']."</li>";
    echo "                            </ul>";
    echo "                            <p><strong>Duvidas? Entre em contato  <a href='home.php'>conosco!</a></strong> </p>";
    echo "                            <button type='button' class='btn btn-primary' data-dismiss='modal'><i class='fa fa-times'></i> Fechar </button>";
    echo "                        </div>";
    echo "                    </div>";
    echo "                </div>";
    echo "            </div>";
    echo "        </div>";
    echo "    </div>";
    echo " </div>";

}

    mysqli_close($link);

?>

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
