<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Head padr�o para p�gina -->
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
  </head>
  <body>

    <!-- Navega��o -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!--Marca e de altern�ncia se agrupado para melhor visualiza��o m�vel -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Alternancia de Navegacao</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">SUMMER O.S.</a>
            </div>
            <!-- Coleta as liga��es nav, formul�rios e outros conte�dos para alternar -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<!--
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
                </ul>
-->
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    
<br />
         <!-- Retorno de Mensagem de erro-->
        <?php
            var_dump($_GET);
            if (isset($_GET['$m'])){ 
                echo $_GET['$m']; 
            }
        ?>
   
        <form class="form-horizontal" method="POST" action="dm/login.php">
            <fieldset>
                <!-- Nome do Formul�rio -->
                <legend>Acesso</legend>
                <!-- Campo Login do usu�rio-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="login">login:</label> 
                  <div class="col-md-2">
                  <input id="login" name="login" type="text" placeholder="Digite seu login" class="form-control input-md" required="">
                  <span class="help-block">Acesso ao Sistema - login</span> 
                  </div>
                </div>
                <!-- Campo Senha do usu�rio-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="senha">senha :</label>
                  <div class="col-md-2">
                    <input id="senha" name="senha" type="password" placeholder="Digite sua senha" class="form-control input-md" required="">
                  </div>
                </div>
                <!-- Bot�o para que seja feita a verifica��o da senha e usu�rio no banco de dados-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="acesso"></label>
                  <div class="col-md-4">
                    <button id="acesso" name="acesso" class="btn btn-primary">Acessar</button>
                  </div>
                </div>
            </fieldset>
        </form>
  </body>
</html>