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
    
    <!-- Funções atreladas ao Google para exibir Calendários nos campos data deste formulário -->
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>

    <?php 
        include ("dm/config.php"); 
        //Verifica a maior Ordem de serviço cadastrada e adiciona + 1 ; 
        $consulta ="Select max(idUsuarios)as maxIdUsuario from usuarios";
        $resultado = mysql_query($consulta) or die("Falha na execução da consulta");
        $linha = mysql_fetch_assoc($resultado);
        $idUsuario = $linha["maxIdUsuario"] + 1;
    ?>  
        
  </head>
  <body>
       <!-- Navegação -->
       <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
           <div class="container">
       <!--Marca de alternância se agrupado para melhor visualização móvel -->
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
                         <li><a href="principal.php">P&aacutegina Principal</a></li>                
                         <li><a href="cadOs.php">Ordem de Servi&ccedilo</a></li>
                         <li><a href="cadUsuario.php">Usu&aacuterios</a></li>                    
                         <li><a href="dm/logout.php">Logout</a></li>
                     </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
                <!-- /.container -->
           </nav>
        
        <!-- Retorno de Mensagem de erro-->
        <?php
            if (isset($_GET['$msg'])){ 
                echo $_GET['$msg']; 
            }
        ?> 
         
        <div class="container">
             <br /> <br />
             <h2>M&oacutedulo Usu&aacuterios</h2>
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#cadastro">Cadastro</a></li>
                    <li><a data-toggle="tab" href="#tabUsuario">Usu&aacuterios</a></li>
                </ul>
             <!-- Tab Order com tela de cadastro e listagem de usuario cadastrados--> 
                <div class="tab-content">
                    <div id="cadastro" class="tab-pane fade in active">
                        <h3>Cadastro</h3>
                        <!-- Inicio do formulário -->
                            <form class="form-horizontal" method="POST" action="dm/validUsuario.php">
                                <fieldset>        
                                    <!-- Cadastro OS -->
                                    <!-- Campo IdUsuario será preenchido com o maior valor +1 pesquisado no banco-->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="idOS">Id Usu&aacuterio.:</label> 
                                            <div class="col-md-4">
                                                <input value=<?php echo $idUsuario ;?> id="idUsuario" name="idUsuario" type="text" placeholder="Id. Usuario" class="form-control input-md" required="" disabled />
                                            </div>
                                    </div>
                          
                                <div class="row">
                                    <div class="col-md-6">
                                        <!-- Campo Nome do Usuario ()-->
                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="nome">Nome Usu&aacuterio.:</label> 
                                                <div class="col-md-4">
                                                    <input class="nome" id="nome" name="nome" type="text" placeholder="Nome Completo" class="form-control input-md" />
                                                </div>
                                        </div>                
                                    </div>
                                    <div class="col-md-6">
                                        <!-- Campo Login do usuario()-->
                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="login">Login.:</label> 
                                                <div class="col-md-4">
                                                    <input class="login" id="login" name="login" type="text" placeholder="login" class="form-control input-md" />
                                                </div>
                                        </div>                
                                    </div>
                                </div>
                    
                                <div class="row">
                                    <div class="col-md-6">
                                        <!-- Campo Perfil do Usuario ()-->
                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="perfil">Perfil.:</label> 
                                                <div class="col-md-4">
                                                    <select class="form-control" id="perfil" name="perfil">
                                                        <option value="1">Opera&ccedil&atildeo(Atendimento ao Cliente)</option>
                                                        <option value="2">Gerencial</option>
                                                        <option value="3">Estrat&eacutegico</option>
                                                    </select>
                                                </div>
                                        </div>               
                                    </div>
                                    <div class="col-md-6">
                                        <!-- Campo Senha do usuario ()-->
                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="senha">Senha.:</label> 
                                            <div class="col-md-3">
                                                <input class="senha" id="senha" name="senha" type="password" placeholder="senha" class="form-control input-md" />
                                            </div>
                                        </div>                
                                    </div>
                                </div>

                                <div class="row">
                                  <div class="col-md-6">
                                  <!-- Campo Status atividade do usuario ()-->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="perfil">Status Atividade.:</label> 
                                            <div class="col-md-3">
                                                <input class="statusAtividade" id="statusAtividade" name="statusAtividade" type="text" placeholder="Status da Atividade" class="form-control input-md" value="Status Inicial" disabled />
                                            </div>
                                    </div>                
                                  </div>
                                  
                                 <div class="col-md-6">
                                 <!-- Campo Verificação de senha para analiser se as senhas digitadas são iguais ()-->
                                    <div class="form-group">
                                         <label class="col-md-4 control-label" for="resenha">Re-Senha.:</label> 
                                              <div class="col-md-3">
                                                 <input class="resenha" id="resenha" name="resenha" type="password" placeholder="senha " class="form-control input-md" />
                                              </div>
                                    </div>                
                                 </div>
                                </div>
                     <hr />           
                    <!-- Inicio das funções de envio (Reset)-->
                        <div class="row">
                          <div class="col-md-8 col-md-offset-4" >
                                   <!-- Botão para que seja feita a verificação da senha e usuário no banco de dados-->
                                    <div class="form-group">
                                      <label class="col-md-8 control-label" for="insIdUsuario"></label>
                                      <div class="col-md-8">
                                        <button id="limpar" name="limpar" class="btn btn-danger" type="reset">Limpar formul&aacuterio</button>
                                        <button id="insIdUsuario" name="insIdUsuario" class="btn btn-primary" type="submit">Inserir Usu&aacuterio</button>
                                      </div>
                                    </div>
                          </div>
                        </div>
                    <!-- Fechamento do formulário -->    
                    </fieldset>
                </form>      
            </div>
            <!-- ( Fase de teste ) Espaço para montar uma grade com dados a serem informados após isso remover ou mudar para bootstrap e fazer inclusão ou pesquisa --!>
            <div id="tabUsuario" class="tab-pane fade">
             <h3>Usu&aacuterios Cadastrados</h3>
                <div class="container">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>idUsu&aacuterio</th>
                        <th>Nome</th>
                        <th>Login</th>
                        <th>Senha</th>
                        <th>Perfil</th>
                        <th>Status Atividade</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                            $consulta = "Select * From usuarios";
                            $resultado = mysql_query($consulta) or die("Falha na execução da consulta");
                        	while ($linha = mysql_fetch_assoc($resultado)) 
        		 	               {
        		 	                    $idUsuario       = $linha["idUsuarios"];
        			                    $nome            = $linha["nome"];
        			                    $login           = $linha["login"];
                                        $senha           = $linha["senha"];
                                        $perfil          = $linha["perfil"];
                                        $statusAtividade = $linha["statusAtividade"];
        		                   echo "<tr>";
        		                   echo "	<td>$idUsuario</td>";
        		                   echo "	<td>$nome</td>";
                                   echo "	<td>$login</td>";
        		                   echo "	<td>$senha</td>";
                                   echo "	<td>$perfil</td>";
                                   echo "	<td>$statusAtividade</td>";
        		                   echo "</tr>";
        			               }
                      ?>
                    </tbody>
                  </table>
                </div>             
            </div>
          </div>
        </div>               
  </body>
</html>