<!DOCTYPE html>
<html lang="pt-br">


<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cadastrar Evento</title>

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
    <form action=" " method="POST" enctype="multipart/form-data">
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
            <!-- /.navbar-collapse --><?php  

    @session_start();

    
    ?>
        </div>
        <!-- /.container-fluid -->
    </nav>

   

                   




</form>

    <!-- Cadastro -->
    <form action="" method="POST" enctype="multipart/form-data"> 
    <section id="contact2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Cadastrar Evento</h2>
                    <br>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Nome do evento *" id="evento" name="evento" required data-validation-required-message="Por favor insira o nome do evento.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Categoria *" id="categoria" name="categoria" required data-validation-required-message="Por favor insira a categoria do evento.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Compra de ingressos *" id="compra" name="compra" required data-validation-required-message=" ">
                                    <p class="help-block text-danger"></p>
                                </div>
                                 <div class="form-group">
                                    <textarea type="textbox" class="form-control" placeholder="Descricão *" id="desc" name="desc" required data-validation-required-message="Por favor insira o seu CEP."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                  <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Idade minima *" id="idade" name="idade" required data-validation-required-message="Por favor insira a idade minima permitida." maxlength="2">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Local *" id="local" name="local" required data-validation-required-message="Por favor insira seu telefone.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Cidade *" id="cidade" name="cidade" required data-validation-required-message="Por favor insira o seu CEP.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Horário de início *" id="hora" name="hora" required data-validation-required-message="Por favor insira a hora.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="date" class="form-control" placeholder="Data do evento *" id="data" name="data" required data-validation-required-message="Por favor insira o seu CEP.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <form action="" method="POST" enctype="multipart/form-data">
                            <div class="col-lg-12 text-center">
                                <label for="thumb">Selecionar uma thumbnail &#187;</label>
                                <input type="file"  name="thumb" id="thumb">
                                 <br>
                            <div class="col-lg-12 text-center">
                                <label for="banner">Selecionar um banner &#187;</label>
                                <input type="file"  name="banner" id="banner">
                                   <br><br>
                            </div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Cadastrar</button>
                                <br><br>
                            </div>
                            </form>

                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</form>

<meta charset="utf-8">
<?php

@session_start();

$host = "localhost";
    $root = "root";
    $senha = "";

    $link = mysqli_connect($host, $root, $senha)
        or die ("Não foi possível conectar: ". mysql_error());

    $banco = mysqli_select_db($link, "db_TCC")
        or die ("Erro ao abrir o banco de dados: ". mysql_error());


if (isset($_POST['evento'], $_POST['categoria'])){

$evento = $_POST['evento'];
$categoria = $_POST['categoria'];
$compra = $_POST['compra'];
$desc = $_POST['desc'];
$idade = $_POST['idade'];
$local = $_POST['local'];
$cidade= $_POST['cidade'];
$data = $_POST['data'];
$hora = $_POST['hora'];

    # Faz a verificação se a thumb e o banner exitem

    if (isset($_FILES['thumb'], $_FILES['banner'])) {

        # Inserinfo a Thumbnail

        $extensao = strtolower(substr($_FILES['thumb']['name'], -4));
        $novo_nome = md5(time()) . $extensao;
        $diretorio = "img/portfolio/";

        
        move_uploaded_file($_FILES['thumb']['tmp_name'], $diretorio.$novo_nome);

        # Inserindo o Banner

         $extensaoB = strtolower(substr($_FILES['banner']['name'], -4));
        $novo_nomeB = md5(md5(time())) . $extensaoB;
        $diretorioB = "img/portfolio/";

        
        move_uploaded_file($_FILES['banner']['tmp_name'], $diretorioB.$novo_nomeB);

        $inserir = mysqli_query($link, "INSERT INTO tb_evento(nm_evento,dt_evento,hr_evento,nm_categoria,nm_descricao,nm_venda,cd_idade,nm_estabelecimento,nm_cidade,nm_img_thumb,nm_img_banner) VALUES ('$evento','$data','$hora','$categoria','$desc','$compra','$idade','$local','$cidade','$novo_nome','$novo_nomeB') ");
    }
    
   


}




mysqli_close($link);
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

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/cyber.min.js"></script>

</body>

</html>