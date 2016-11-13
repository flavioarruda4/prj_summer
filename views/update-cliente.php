 <?php
include_once '../config/database.php';
include_once '../models/cliente.php';


$cpf = isset($_GET['id']) ? $_GET['id'] : die("Erro ao encontrar Cliente!");

$database = new Database();
$db = $database->getConnection();

$cliente = new Cliente($db);

 $cliente->cpf = $cpf  

$cliente->readOne();

?>

 <!-- Inicio do formulário -->
        <form id='update-cliente' class="form-horizontal" method="POST" action="" autocomplete="off">

            <fieldset>
                <div class="form-group"><legend> Dados Pessoais </legend></div>

                <!-- Formulário dados Cliente -->
                <div class="form-group">
                    <label class="col-md-2 control-label" for="nome">Nome:</label>  
                    <div class="col-md-8">
                        <input id="nome" name="nome" type="text" placeholder="Digite o Nome Completo" class="form-control input-md" required="true" maxlength="45">

                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 control-label" for="email">E-mail:</label>  
                    <div class="col-md-8">
                        <input id="email" name="email" type="text" placeholder="Digite o E-mail" class="form-control input-md" required="true" maxlength="45">

                    </div>
                </div>                   

                <div class="form-group">
                    <label class="col-md-2 control-label" for="rg">RG:</label>  
                    <div class="col-md-3">
                        <input id="rg" name="rg" type="text" placeholder="Digite o RG" class="form-control input-md" required="true" maxlength="45">
                    </div>

                    <label class="col-md-2 control-label" for="cpf">CPF:</label>  
                    <div class="col-md-3">
                        <input id="cpf" name="cpf" type="text" placeholder="Digite o CPF" class="form-control input-md" required="true" maxlength="45">

                    </div>                    
                </div>                  

                <div class="form-group">
                    <label class="col-md-2 control-label" for="telFixo">Telefone:</label>  
                    <div class="col-md-3">
                        <input id="telFixo" name="telFixo" type="text" placeholder="Digite o Telefone" class="form-control input-md" required="true" maxlength="40">

                    </div>

                    <label class="col-md-2 control-label" for="telCleluar">Celular:</label>  
                    <div class="col-md-3">
                        <input id="telCleluar" name="telCelular" type="text" placeholder="Digite o Celular" class="form-control input-md" required="true" maxlength="40">

                    </div>
                </div>   

                <div class="form-group">
                    <label class="col-md-2 control-label" for="dataCadastro">Data do Cadastro:</label>  
                    <div class="col-md-2">
                        <input id="dataCadastro" class="dateTxt" name="dataCadastro" type="text"  class="form-control input-md" required="true">

                    </div>
                </div>              

            </fieldset>
            <hr/>

            <!-- Formulário do Endereço -->
            <fieldset>
                <div class="form-group"><legend> Endereço </legend></div>

                <div class="form-group">
                    <label class="col-md-2 control-label" for="largadouro">Logradouro:</label>  
                    <div class="col-md-8">
                        <input id="largadouro" name="logradouro" type="text" placeholder="Digite o Logradouro"  class="form-control input-md" required="true" maxlength="50">

                    </div>
                </div>  

                <div class="form-group">
                    <label class="col-md-2 control-label" for="numero">Número:</label>  
                    <div class="col-md-3">
                        <input id="numero" name="numero" type="text" placeholder="Digite o Número"  class="form-control input-md" required="true" maxlength="15">

                    </div>

                    <label class="col-md-2 control-label" for="bairro">Bairro:</label>  
                    <div class="col-md-3">
                        <input id="bairro" name="bairro" type="text" placeholder="Digite o Bairro"  class="form-control input-md" required="true" maxlength="50">

                    </div>

                </div>                 

                <div class="form-group">

                    <label class="col-md-2 control-label" for="cep">CEP:</label>  
                    <div class="col-md-2">
                        <input id="cep" name="cep" type="text" placeholder="Digite o CEP"  class="form-control input-md" required="true" maxlength="30">

                    </div>

                    <label class="col-md-1 control-label" for="cidade">Cidade:</label>  
                    <div class="col-md-2">
                        <input id="cidade" name="cidade" type="text" placeholder="Digite a Cidade"  class="form-control input-md" required="true" maxlength="50">

                    </div>

                    <label class="col-md-1 control-label" for="uf">UF:</label>
                    <div class="col-md-2">
                        <select id="uf" name="uf" class="form-control">
                            <option value="DF">DF</option>
                            <option value="GO">GO</option>                            
                        </select>
                    </div>

                </div>                

            </fieldset>
            <hr/>
             <tr>
            <td>

                <input type='hidden' name='cpf' value='<?php echo $cpf ?>' /> 

            </td>
            <td>
                <button type='submit' class='btn btn-primary'>
                    <span class='glyphicon glyphicon-edit'></span> Salvar Alterações
                </button>
            </td>
        </tr>
        </form>
      