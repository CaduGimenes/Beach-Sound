
<!DOCTYPE html>
<html lang="pt-br">


<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

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
                <a class="navbar-brand page-scroll" href="#">Beach Sound</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                         <input type="text"
                          class="form-control" placeholder="Email" id="login" name="login" required data-validation-required-message="Por favor insira seu nome de usuario.">
                    </li>
                    <li>&nbsp&nbsp
                    </li>
                     <li>
                         <input type="password" class="form-control" placeholder="Senha" id="senhalogin" name="senhalogin" required data-validation-required-message="Por favor insira sua senha.">
                    </li>
                    <li>&nbsp&nbsp
                    </li>
                    <li>
                        <button type="submit" class="btn btn-sm">Login</button>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse --><?php  

    @session_start();

    $host = "localhost";
    $root = "root";
    $senha = "";

    $link = mysqli_connect($host, $root, $senha)
        or die ("Não foi possível conectar: ". mysql_error());

    $banco = mysqli_select_db($link, "db_TCC")
        or die ("Erro ao abrir o banco de dados: ". mysql_error());


        if (isset($_POST['login'], $_POST['senhalogin'])) {
            
              $login = $_POST['login'];
                $lsenha = $_POST['senhalogin'];

                $_SESSION['login'] = $login;

                $get = mysqli_query($link, "SELECT * FROM tb_usuario WHERE nm_email = '$login' AND cd_senha = '$lsenha'");

                $num = mysqli_num_rows($get);

                if ($num == 1) {

                    $index = 'home.php';

                    

                   header("Location: $index");

                    while ($percorrer = mysqli_fetch_array($get)) {


                    }


                }else{ ?>
             <?php  print "<center><h5 style = 'color:#FF0000'>Login ou senha incorretos!</h5></center>";

                }
        }  ?>
        </div>
        <!-- /.container-fluid -->
    </nav>

</form>

    <!-- Cadastro -->
    <form action="" method="POST" enctype="multipart/form-data"> 
    <section id="contact1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Cadastre-se</h2>
                    <br>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="Login" id="Login1" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Usuario *" id="name" name="name" required data-validation-required-message="Por favor insira seu nome.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Senha *" id="senha" name="senha" required data-validation-required-message="Por favor insira sua senha.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Repita a senha *" id="rtsenha" name="rtsenha" required data-validation-required-message="Por favor repita sua senha.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                  <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email *" id="email" name="email" required data-validation-required-message="Por favor insira seu endereço de Email.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="DD/MM/AAAA *" id="dt" name="dt" required data-validation-required-message="Por favor insira sua data de nascimento." maxlength="8">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="CEP *" id="cep" name="cep" required data-validation-required-message="Por favor insira o seu CEP.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <form action="" method="POST" enctype="multipart/form-data">
                            <div class="col-lg-12 text-center">
                                <label for="arquivo">Selecionar um arquivo &#187;</label>
                                <input type="file"  name="arquivo" id="arquivo">
                                   <br><br>
                            </div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Cadastrar-se</button>
                                <br><br>
                            </div>
                            </form>

                                <center>
                                <ul class="list-inline quicklinks">
                                    <li>
                                        <a href="loginProdutor.php">Sou um Produtor.</a>
                                    </li>
                                    <li>
                                        <a href="#">Esqueci a senha.</a>
                                    </li>
                                </ul>
                                </center>
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




if (isset($_POST['senha'], $_POST['email'])){

$usuario = $_POST['name'];
$senha = $_POST['senha'];
$email = $_POST['email'];
$nasc = $_POST['dt'];
$cep = $_POST['cep'];

$_SESSION['email'] = $email;
$_SESSION['name'] = $usuario;


$valida = mysqli_query($link, "SELECT * FROM tb_usuario WHERE nm_email = '$email'");

if ($valida == $email) {
    
    print 'O E-mail já esta sendo usado!';

}else{

    if (isset($_FILES['arquivo'])) {

        $extensao = strtolower(substr($_FILES['arquivo']['name'], -4));
        $novo_nome = md5(time()) . $extensao;
        $diretorio = "img/perfil/";

        

        move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome);

        $inserir = mysqli_query($link, "CALL sp_registro('$usuario','$email','$senha','$nasc','$novo_nome');");
    }
    
   


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