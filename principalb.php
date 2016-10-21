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
    
<div class="container">
  <br /> <br />
  <h2>Cadastro Ordem de Servi&ccedilo</h2>
  <ul class="nav nav-tabs">
    <!-- tab 'dados' onde deveremos guardar os dados referente a Ordem de servi�o ora apresentada pelo Cliente -->
    <li class="active"><a data-toggle="tab" href="#dados">Dados O.S.</a></li>
    <!-- tab 'fpagamento' onde deveremos guardar os dados referente a forma de pagamento e previs�o de entrega parcelas para a Ordem de servi�o-->
    <li><a data-toggle="tab" href="#fpagamento">Forma de pagamento</a></li>
  </ul>
  <!-- Conteudo que envolver� as tab e suas respectivas informa��es-->
  <div class="tab-content">
    <!-- tab 'dados' ************************************************************************************************************************************* -->
    <div id="dados" class="tab-pane fade in active">
      <h3>Receita</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
    <!-- tab 'dados' finaliza��o da tab ****************************************************************************************************************** -->
    
    
    <!-- tab 'fpagamento' ******************************************************************************************************************************** -->
    <div id="fpagamento" class="tab-pane fade">
      <h3>Forma de Pagamento</h3>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <!-- tab 'fpagamento' finaliza��o da tab ****************************************************************************************************************** -->
  </div>
  <!-- Finaliza��o do conte�do que envolver� as tab's-->
</div>
 
   
  </body>
</html>