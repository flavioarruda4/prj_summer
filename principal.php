<!DOCTYPE html>
<html lang="pt-br">
  <head>
  <!-- Segurança de acesso direto a página, onde caso não tenha sido feito login, não poderá permancer na página -->
    <?php  
        session_start();
            if((!isset ($_SESSION['login']) == true))
                {
	               unset($_SESSION['login']);
	               header('location:index.php');
        	    }
        $logado = $_SESSION['login'];
    ?>  
    <!-- Head padrão para página -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SUMMER OS</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script> 
	
	<!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<!-- Custom CSS -->
    <link href="css/full-slider.css" rel="stylesheet">
	
  </head>
  <body>
    <!-- Navegação -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!--Marca e de alternância se agrupado para melhor visualização móvel -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Alternancia de Navegacao</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">SUMMER O.S.</a>
            </div>
            <!-- Coleta as ligações nav, formulários e outros conteúdos para alternar -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="principal.php">P&aacutegina Principal</a>
                    </li>                
                    <li>
                        <a href="cadOs.php">Ordem de Servi&ccedilo</a>
                    </li>
                    <li>
                        <a href="cadUsuario.php">Usu&aacuterios</a>
                    </li>                    
                    <li>
                        <a href="dm/logout.php">Logout</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

  </body>
</html>