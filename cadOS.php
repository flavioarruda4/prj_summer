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

    <!-- Script para que seja exibido um calendário nos campos que estiverem setadas para que recebam class=dateTxt -->
    <script>
        $( function() {
            $(function(){$('.dateTxt').datepicker({ dateFormat: 'yy-mm-dd' }); }); 
        } );

    </script>
    <?php 
        include("dm/config.php");
        //Verifica a maior Ordem de serviço cadastrada e adiciona + 1 ; 
        $consulta ="Select max(idOs)as maxIdOs from os";
        $resultado = mysql_query($consulta) or die("Falha na execução da consulta");
        $linha = mysql_fetch_assoc($resultado);
        $idMaxOs = $linha["maxIdOs"] + 1;         
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
       <!-- Fim da Navegação -->
     
        <div class="container">
          <br /> <br />
          <h2>Cadastro Ordem de Servi&ccedilo</h2>
          <ul class="nav nav-tabs">
            <!-- tab 'dados' onde deveremos guardar os dados referente a Ordem de serviço ora apresentada pelo Cliente -->
            <li class="active"><a data-toggle="tab" href="#dados1">1&#186 - Dados O.S.</a></li>
            <!-- tab 'fpagamento' onde deveremos guardar os dados referente a forma de pagamento e previsão de entrega parcelas para a Ordem de serviço-->
            <li><a data-toggle="tab" href="#dados2">2&#186 - Dados O.S.</a></li>
            <li><a data-toggle="tab" href="#lOrdServico">Listagem O.S.</a></li>
          </ul>
           <form class="form-horizontal" method="POST" action="dm/validOs.php">
           <fieldset>
              <!-- Conteudo que envolverá as tab e suas respectivas informações-->
              <div class="tab-content">
                  <!-- tab 'dados' *************************************************************************************************************-->
                  <div id="dados1" class="tab-pane fade in active">
                    <h3>Receita M&eacutedica</h3>
                        <!-- linhas : idOs, dataEmissao, dataPrevEntrega  -->
                        <div class="row">
                          <div class="col-md-4">
                               <!-- Campo Data Emissão da OS ()-->
                               <div class="form-group">
                                    <label class="col-md-5 control-label" for="idOS">Id Os.:</label> 
                                <div class="col-md-4">
                                    <input value=<?php echo $idMaxOs; ?> id="idOS" name="idOS" type="text" placeholder="Num. O.S." class="form-control input-md" required="" disabled />
                                </div>
                               </div>                
                          </div>
                          <div class="col-md-4">
                               <!-- Campo Data Previsão de entrega da OS ()-->
                               <div class="form-group">
                                     <label class="col-md-5 control-label" for="dataEmissao">Data Emiss&atildeo.:</label> 
                               <div class="col-md-4">
                                     <input class="dateTxt" id="dataEmissao" name="dataEmissao" type="text" placeholder="Dta Emiss&atilde;o" class="form-control input-md" />
                                  </div>
                               </div>                
                          </div>
                          <div class="col-md-4">
                               <!-- Campo Data Previsão de entrega da OS ()-->
                               <div class="form-group">
                                     <label class="col-md-5 control-label" for="dataPrevEntrega">Data Prevista.:</label> 
                               <div class="col-md-4">
                                     <input class="dateTxt" id="dataPrevEntrega" name="dataPrevEntrega" type="text" placeholder="Previs&atilde;o de entrega" class="form-control input-md" />
                                  </div>
                               </div>                
                          </div>                          
                        </div>
                        <!-- Fim linhas : idOs, dataEmissao, dataPrevEntrega  -->       
                        <!-- Inicio table longe ***************************-->
                        <div class="container">
                          <table class="table table-striped">
                            <thead>
                              <tr>
                                <th>Longe</th>
                                <th>ESF</th>
                                <th>CIL</th>
                                <th>EIXO</th>
                                <th>DNP</th>
                                <th>ALTURA</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>OD</td>
                                <td>
                                   <!-- Campo Grau longe Esférico olho direito da OS ()-->
                                   <div class="form-group">
                                       <div class="col-md-8">
                                           <input id="longEsfOd" name="longEsfOd" type="text" placeholder="Long Esf OD" class="form-control input-md" />
                                       </div>
                                   </div>          
                                </td>
                                <td>
                                   <!-- Campo Grau longe Esférico olho direito da OS ()-->
                                   <div class="form-group">
                                       <div class="col-md-8">
                                           <input id="longCilOd" name="longCilOd" type="text" placeholder="Long Esf OD" class="form-control input-md" />
                                       </div>
                                   </div>        
                                </td>
                                <td>
                                   <!-- Campo Grau longe Esférico olho direito da OS ()-->
                                   <div class="form-group">
                                       <div class="col-md-8">
                                           <input id="longEixoOd" name="longEixoOd" type="text" placeholder="Long Esf OD" class="form-control input-md" />
                                       </div>
                                   </div>        
                                </td>
                                <td>
                                   <!-- Campo Grau longe Esférico olho direito da OS ()-->
                                   <div class="form-group">
                                       <div class="col-md-8">
                                           <input id="longDnpOd" name="longDnpOd" type="text" placeholder="Long Dnp OD" class="form-control input-md" />
                                       </div>
                                   </div>        
                                </td>
                                <td>
                                   <!-- Campo Grau longe Esférico olho direito da OS ()-->
                                   <div class="form-group">
                                       <div class="col-md-8">
                                           <input id="longAlturaOd" name="longAlturaOd" type="text" placeholder="Long Alt OD" class="form-control input-md" />
                                       </div>
                                   </div>        
                                </td>
                              </tr>
                              <tr>
                                <td>OE</td>
                                <td>
                                   <!-- Campo Grau longe Esférico olho Esquerdo da OS ()-->
                                   <div class="form-group">
                                       <div class="col-md-8">
                                           <input id="longEsfOd" name="longEsfOe" type="text" placeholder="Long Esf OE" class="form-control input-md" />
                                       </div>
                                   </div>          
                                </td>
                                <td>
                                   <!-- Campo Grau longe Esférico olho Esquerdo da OS ()-->
                                   <div class="form-group">
                                       <div class="col-md-8">
                                           <input id="longCilOd" name="longCilOe" type="text" placeholder="Long Cil OE" class="form-control input-md" />
                                       </div>
                                   </div>        
                                </td>
                                <td>
                                   <!-- Campo Grau longe Esférico olho Esquerdo da OS ()-->
                                   <div class="form-group">
                                       <div class="col-md-8">
                                           <input id="longEixoOd" name="longEixoOe" type="text" placeholder="Long Eixo OE" class="form-control input-md" />
                                       </div>
                                   </div>        
                                </td>
                                <td>
                                   <!-- Campo Grau longe Esférico olho Esquerdo da OS ()-->
                                   <div class="form-group">
                                       <div class="col-md-8">
                                           <input id="longDnpOd" name="longDnpOe" type="text" placeholder="Long Dnp OE" class="form-control input-md" />
                                       </div>
                                   </div>        
                                </td>
                                <td>
                                   <!-- Campo Grau longe Esférico olho Esquerdo da OS ()-->
                                   <div class="form-group">
                                       <div class="col-md-8">
                                           <input id="longAlturaOd" name="longAlturaOe" type="text" placeholder="Long Altura OE" class="form-control input-md" />
                                       </div>
                                   </div>        
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        <!-- ____________________________________________________________________________________________________________________________ -->
                        
                        <div class="container">
                          <table class="table table-striped">
                            <thead>
                              <tr>
                                <th>Perto</th>
                                <th>ESF</th>
                                <th>CIL</th>
                                <th>EIXO</th>
                                <th>DNP</th>
                                <th>ALTURA</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>OD</td>
                                <td>
                                   <!-- Campo Grau pertoEsfOd olho direito da OS ()-->
                                   <div class="form-group">
                                       <div class="col-md-8">
                                           <input id="pertoEsfOd" name="pertoEsfOd" type="text" placeholder="Perto Esf OD" class="form-control input-md" />
                                       </div>
                                   </div>          
                                </td>
                                <td>
                                   <!-- Campo Grau pertoCilOd olho direito da OS ()-->
                                   <div class="form-group">
                                       <div class="col-md-8">
                                           <input id="pertoCilOd" name="pertoCilOd" type="text" placeholder="Perto Esf OD" class="form-control input-md" />
                                       </div>
                                   </div>        
                                </td>
                                <td>
                                   <!-- Campo Grau pertoEixoOd olho direito da OS ()-->
                                   <div class="form-group">
                                       <div class="col-md-8">
                                           <input id="pertoEixoOd" name="pertoEixoOd" type="text" placeholder="Perto Esf OD" class="form-control input-md" />
                                       </div>
                                   </div>        
                                </td>
                                <td>
                                   <!-- Campo Grau pertoDnpOd olho direito da OS ()-->
                                   <div class="form-group">
                                       <div class="col-md-8">
                                           <input id="pertoDnpOd" name="pertoDnpOd" type="text" placeholder="Perto Dnp OD" class="form-control input-md" />
                                       </div>
                                   </div>        
                                </td>
                                <td>
                                   <!-- Campo Grau pertoAlturaOd olho direito da OS ()-->
                                   <div class="form-group">
                                       <div class="col-md-8">
                                           <input id="pertoAlturaOd" name="pertoAlturaOd" type="text" placeholder="Perto Alt OD" class="form-control input-md" />
                                       </div>
                                   </div>        
                                </td>
                              </tr>
                              <tr>
                                <td>OE</td>
                                <td>
                                   <!-- Campo Grau pertoEsfOe olho Esquerdo da OS ()-->
                                   <div class="form-group">
                                       <div class="col-md-8">
                                           <input id="pertoEsfOe" name="pertoEsfOe" type="text" placeholder="Perto Esf OE" class="form-control input-md" />
                                       </div>
                                   </div>          
                                </td>
                                <td>
                                   <!-- Campo Grau pertoCilOe olho Esquerdo da OS ()-->
                                   <div class="form-group">
                                       <div class="col-md-8">
                                           <input id="pertoCilOe" name="pertoCilOe" type="text" placeholder="Perto Cil OE" class="form-control input-md" />
                                       </div>
                                   </div>        
                                </td>
                                <td>
                                   <!-- Campo Grau pertoEixoOe olho Esquerdo da OS ()-->
                                   <div class="form-group">
                                       <div class="col-md-8">
                                           <input id="pertoEixoOe" name="pertoEixoOe" type="text" placeholder="Perto Eixo OE" class="form-control input-md" />
                                       </div>
                                   </div>        
                                </td>
                                <td>
                                   <!-- Campo Grau pertoDnpOe olho Esquerdo da OS ()-->
                                   <div class="form-group">
                                       <div class="col-md-8">
                                           <input id="pertoDnpOe" name="pertoDnpOe" type="text" placeholder="Perto Dnp OE" class="form-control input-md" />
                                       </div>
                                   </div>        
                                </td>
                                <td>
                                   <!-- Campo Grau pertoAlturaOe olho Esquerdo da OS ()-->
                                   <div class="form-group">
                                       <div class="col-md-8">
                                           <input id="pertoAlturaOe" name="pertoAlturaOe" type="text" placeholder="Perto Altura OE" class="form-control input-md" />
                                       </div>
                                   </div>        
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        <!-- Fim table perto ***************************-->
                  </div>
                  <!-- tab '2 Dados' ***************************************************************************************************************** -->
                  <div id="dados2" class="tab-pane fade">
                    <h3>Receita M&eacutedica</h3>
                        <!-- Inicio linhas : adicao, adicao, dataVencLentes  --> 
                        <div class="row">
                          <div class="col-md-4">
                               <!-- Campo Adição da OS ()-->
                               <div class="form-group">
                                    <label class="col-md-4 control-label" for="adicao">Adi&ccedil;&atilde;o.:</label> 
                                <div class="col-md-4">
                                    <input id="adicao" name="adicao" type="text" placeholder="Adi&ccedil;&atilde;o" class="form-control input-md"/>
                                </div>
                               </div>                
                          </div>
                          <div class="col-md-4">
                               <!-- Campo Armação da OS ()-->
                               <div class="form-group">
                                     <label class="col-md-5 control-label" for="armacao">Arma&ccedil;&atilde;o.:</label> 
                               <div class="col-md-4">
                                     <input id="armacao" name="armacao" type="text" placeholder="Arma&ccedil;&atilde;o" class="form-control input-md" />
                                  </div>
                               </div>                
                          </div>
                          <div class="col-md-4">
                               <!-- Campo Data Previsão de entrega da OS ()-->
                               <div class="form-group">
                                     <label class="col-md-5 control-label" for="dataVencLentes">Data Vc. Lentes.:</label> 
                               <div class="col-md-4">
                                     <input class="dateTxt" id="dataVencLentes" name="dataVencLentes" type="text" placeholder="Data venc. Lentes" class="form-control input-md" />
                                  </div>
                               </div>                
                          </div> 
                        </div>
                        <!-- Fim linhas : adicao, adicao, dataVencLentes  -->       

                        <!-- Inicio linhas : lentes, medico,receita  --> 
                        <div class="row">
                          <div class="col-md-4">
                               <!-- Campo Lentes da OS ()-->
                               <div class="form-group">
                                    <label class="col-md-4 control-label" for="lentes">Lentes.:</label> 
                                <div class="col-md-4">
                                    <input id="lentes" name="lentes" type="text" placeholder="Lentes" class="form-control input-md"/>
                                </div>
                               </div>                
                          </div>
                          <div class="col-md-4">
                               <!-- Campo Médico da OS ()-->
                               <div class="form-group">
                                     <label class="col-md-5 control-label" for="medico">M&eacute;dico.:</label> 
                               <div class="col-md-4">
                                     <input id="medico" name="medico" type="text" placeholder="M&eacute;dico" class="form-control input-md" />
                                  </div>
                               </div>                
                          </div>
                          <div class="col-md-4">
                               <!-- Campo Data Receita de entrega da OS ()-->
                               <div class="form-group">
                                     <label class="col-md-5 control-label" for="receita">Receita.:</label> 
                               <div class="col-md-4">
                                    <!-- <input type="file" name="foto" /> -->
                                     <input id="receita" name="receita" type="text" placeholder="Receita Oftmologica" class="form-control input-md" />
                                  </div>
                               </div>                
                          </div> 
                        </div>
                        <!-- Fim linhas : lentes, medico,receita  -->
                        
                                               
                        <!-- Inicio linhas : formaPg,dataPg,nParcelas  --> 
                        <div class="row">
                          <div class="col-md-6">
                               <!-- Campo Valor da OS ()-->
                               <div class="form-group">
                                 <label class="col-md-3 control-label" for="valorOs">Valor da O.S.:</label> 
                                    <div class="col-md-3">
                                        <input id="valorOs" name="valorOs" type="text" placeholder="Valor do produto " class="form-control input-md" />
                                    </div>
                               </div>               
                          </div>                        
                          <div class="col-md-6">
                          <!-- Campo Forma de pagamento da OS ()-->
                            <div class="form-group">
                              <label class="col-md-4 control-label" for="pagamento">Forma de Pagamento</label>
                              <div class="col-md-8">
                                <label class="checkbox-inline" for="pagamento-0">
                                  <input type="checkbox" name="pagamento" id="pagamento-0" value="1">
                                  Dinheiro
                                </label>
                                <label class="checkbox-inline" for="pagamento-1">
                                  <input type="checkbox" name="pagamento" id="pagamento-1" value="2">
                                  Cheque
                                </label>
                                <label class="checkbox-inline" for="pagamento-2">
                                  <input type="checkbox" name="pagamento" id="pagamento-2" value="3">
                                  Visa
                                </label>
                                <label class="checkbox-inline" for="pagamento-3">
                                  <input type="checkbox" name="pagamento" id="pagamento-3" value="4">
                                  Master
                                </label>
                              </div>
                            </div>               
                          </div>
                          <div class="col-md-4">
                               <!-- Campo Dta Pagamento da OS ()-->
                               <div class="form-group">
                                     <label class="col-md-5 control-label" for="dataPg">Data Pagamento.:</label> 
                               <div class="col-md-4">
                                     <input class="dateTxt" id="dataPg" name="dataPg" type="text" placeholder="Data Pagamento.:" class="form-control input-md" />
                                  </div>
                               </div>                
                          </div>
                          <div class="col-md-4 col-md-offset-6">
                               <!-- Campo Numero de parcelas a pagar da OS ()-->
                               <div class="form-group">
                                  <label class="col-md-4 control-label" for="nParcelas">N&#176 Parcelas.:</label> 
                                        <div class="col-md-8">
                                          <select class="form-control" id="nParcelas" name="nParcelas">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                          </select>
                                        </div>
                               </div>                 
                          </div> 
                        </div>
                        <!-- Fim linhas : formaPg,dataPg,nParcelas  --> 
                        
                        <!-- Inicio linhas : Observacao  -->                  
                        <div class="row">
                          <div class="col-md-12">
                               <!-- Campo Observação da OS ()-->
                               <div class="form-group">
                                     <label class="col-md-1 control-label" for="observacao">Observa&ccedil;&otilde;es da O.S..:</label>
                               <div class="col-md-10">
                                     <textarea id="observacao" name="observacao" class="form-control" rows="3" placeholder="Observa&ccedil;&otilde;es da O.S. "></textarea>
                                  </div>
                               </div>                
                          </div>                     
                        </div>
                    <!-- Fim linhas : Observacao  --> 
                    
                    <!-- Inicio das funções de envio (Reset)-->
                        <div class="row">
                          <div class="col-md-8 col-md-offset-4" >
                                   <!-- Botão para que seja feita a verificação da senha e usuário no banco de dados-->
                                    <div class="form-group">
                                      <label class="col-md-8 control-label" for="insIdOS"></label>
                                      <div class="col-md-8">
                                        <button id="limpar" name="limpar" class="btn btn-danger" type="reset">Limpar formulario</button>
                                        <button id="insIdOS" name="insIdOS" class="btn btn-primary" type="submit">Inserir O.S.</button>
                                      </div>
                                    </div>
                          </div>
                        </div>
                    <!-- Fechamento do formulário -->                     
                  </div>
                  <!-- tab 'Lista Ordem Serviço' ************************************************************************************** -->
                
            <div id="lOrdServico" class="tab-pane fade">
             <h3>Lista Ordem de Servi&ccedilo</h3>
                <div class="container">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>idOrdem</th>
                        <th>Dta Emissao</th>
                        <th>Dta Prev.Entrega</th>
                        <th>Valor (R$)</th>
                        <th>Receita Medica</th>
                        <th>Dta Pagamento</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                            $consulta = "Select * From os";
                            $resultado = mysql_query($consulta) or die("Falha na execução da consulta");
                        	while ($linha = mysql_fetch_assoc($resultado)) 
        		 	               {
        		 	                    $idOs            = $linha["idOs"];
        			                    $dataEmissao     = $linha["dataEmissao"];
        			                    $dataPrevEntrega = $linha["dataPrevEntrega"];
                                        $valor           = $linha["valor"];
                                        $receita         = $linha["receita"];
                                        $dataPg          = $linha["dataPg"];
        		                   echo "<tr>";
        		                   echo "	<td>$idOs</td>";
        		                   echo "	<td>$dataEmissao</td>";
                                   echo "	<td>$dataPrevEntrega</td>";
        		                   echo "	<td>$valor</td>";
                                   echo "	<td>$receita</td>";
                                   echo "	<td>$dataPg</td>";
        		                   echo "</tr>";
        			               }
                      ?>
                    </tbody>
                  </table>
                </div>             
            </div>                  
                  
                      
                  <!-- tab 'fpagamento' finalização da tab ****************************************************************************************************************** -->
                  </div>
          <!-- Finalização do conteúdo que envolverá as tab's-->
        </fieldset>
        </form>

        </div>
<!-- Mensagem -->                             
  </body>
</html>