 <?php
include_once '../config/database.php';
include_once '../models/cliente.php';
include_once '../models/endereco.php';


$cpf = isset($_GET['id']) ? $_GET['id'] : die("Erro ao encontrar Cliente!");

$database = new Database();
$db = $database->getConnection();

$cliente = new Cliente($db);
$endereco = new Endereco($db);

 $cliente->cpf = $cpf;  
 $endereco->cpf = $cpf; 

 $cliente->readOne();
 $endereco->readOne();

?>

 <!-- Inicio do formulário -->
        <form id='update-cliente' class="form-horizontal" method="POST" action="" autocomplete="off">

            <fieldset>
                <div class="form-group"><legend> Dados Pessoais </legend></div>

                <!-- Formulário dados Cliente -->
                <div class="form-group">
                    <label class="col-md-2 control-label" for="nome">Nome:</label>  
                    <div class="col-md-8">
                        <input id="nome" name="nome" type="text" class="form-control input-md"  value='<?php echo htmlspecialchars($cliente->nome, ENT_QUOTES); ?>' required=/>

                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 control-label" for="email">E-mail:</label>  
                    <div class="col-md-8">
                        <input id="email" name="email" type="text" class="form-control input-md" value='<?php echo htmlspecialchars($cliente->email, ENT_QUOTES); ?>' required=/>

                    </div>
                </div>                   

                <div class="form-group">
                    <label class="col-md-2 control-label" for="rg">RG:</label>  
                    <div class="col-md-3">
                        <input id="rg" name="rg" type="text" class="form-control input-md" value='<?php echo htmlspecialchars($cliente->rg, ENT_QUOTES); ?>' required=/>
                    </div>

                    <label class="col-md-2 control-label" for="cpf">CPF:</label>  
                    <div class="col-md-3">
                        <input id="cpf" name="cpf" type="text" class="form-control input-md" value='<?php echo htmlspecialchars($cliente->cpf, ENT_QUOTES); ?>' required=/>

                    </div>                    
                </div>                  

                <div class="form-group">
                    <label class="col-md-2 control-label" for="telFixo">Telefone:</label>  
                    <div class="col-md-3">
                        <input id="telFixo" name="telFixo" type="text" class="form-control input-md" value='<?php echo htmlspecialchars($cliente->telFixo, ENT_QUOTES); ?>' required=/>

                    </div>

                    <label class="col-md-2 control-label" for="telCleluar">Celular:</label>  
                    <div class="col-md-3">
                        <input id="telCelular" name="telCelular" type="text" class="form-control input-md" value='<?php echo htmlspecialchars($cliente->telCelular, ENT_QUOTES); ?>' required=/>

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
                        <input id="largadouro" name="logradouro" type="text" class="form-control input-md" value='<?php echo htmlspecialchars($endereco->logradouro, ENT_QUOTES); ?>' required=/>

                    </div>
                </div>  

                <div class="form-group">
                    <label class="col-md-2 control-label" for="numero">Número:</label>  
                    <div class="col-md-3">
                        <input id="numero" name="numero" type="text" class="form-control input-md" value='<?php echo htmlspecialchars($endereco->numero, ENT_QUOTES); ?>' required=/>

                    </div>

                    <label class="col-md-2 control-label" for="bairro">Bairro:</label>  
                    <div class="col-md-3">
                        <input id="bairro" name="bairro" type="text" class="form-control input-md" value='<?php echo htmlspecialchars($endereco->bairro, ENT_QUOTES); ?>' required=/>

                    </div>

                </div>                 

                <div class="form-group">

                    <label class="col-md-2 control-label" for="cep">CEP:</label>  
                    <div class="col-md-2">
                        <input id="cep" name="cep" type="text" class="form-control input-md" value='<?php echo htmlspecialchars($endereco->cep, ENT_QUOTES); ?>' required=/>

                    </div>

                    <label class="col-md-1 control-label" for="cidade">Cidade:</label>  
                    <div class="col-md-2">
                        <input id="cidade" name="cidade" type="text" class="form-control input-md" value='<?php echo htmlspecialchars($endereco->cidade, ENT_QUOTES); ?>' required=/>

                    </div>

                    <label class="col-md-1 control-label" for="uf">UF:</label>
                    <div class="col-md-2">
                        <select id="uf" name="uf" class="form-control" >
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
      