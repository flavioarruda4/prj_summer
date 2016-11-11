<?php
include_once '../config/database.php';
include_once '../models/os.php';
include_once '../models/controleos.php';
include_once '../models/usuario.php';
include_once '../models/cliente.php';


$idOs = isset($_GET['id']) ? $_GET['id'] : die("Erro ao encontrar OS!");

$database = new Database();
$db = $database->getConnection();


//pegando todas as infos da os
$os = new Os($db);
$os->id = $idOs;
$os->readOne();

//pegando o controle da os
$controleos = new ControleOs($db);
$controleos->os_idos = $idOs;
$controleos->readOne();


//pegando o usuario que alterou a os
$usuario = new Usuario($db);
$usuario->idUsuarios = $controleos->usuarios_idUsuarios;
$usuario->readOne();


//pegando o cliente que pertence a os
$cliente = new Cliente($db);
$cliente->cpf = $os->clientes_cpf;
$cliente->readOne();
?>

<form id='update-status-os' action='' method='post' border='0' autocomplete="off">
    <!-- Mensagem Sucesso -->

    <table class='table table-bordered table-hover'>

        <tr>
            <td>ID Os:</td>
            <td>
                <input name='id' type="text" class='form-control nome-editar' value='<?php echo htmlspecialchars($os->id, ENT_QUOTES); ?>' disabled="true"/>
            </td>
        </tr>
        <tr>
            <td>Usuário última alteracao:</td>
            <td><input type='text' name='usuario' class='form-control' value='<?php echo htmlspecialchars($usuario->login, ENT_QUOTES); ?>'  disabled="true" /></td>
        </tr>
        <tr>
            <td>Cliente</td>
            <td><input  id="senha-edit" type='text' name='senha' class='form-control' value='<?php echo htmlspecialchars($cliente->nome, ENT_QUOTES); ?>'  disabled="true"/></td>
        </tr>
        <tr>

            <td>Status</td>
            <td>
                <?php $selected = htmlspecialchars($controleos->statusAndamentoOs, ENT_QUOTES); ?>
                <select id="statusAndamentoOs" name="statusAndamentoOs" class="form-control">
                    <option value="0" <?= ($selected == '0') ? 'selected' : '' ?>>Pendente</option>
                    <option value="1" <?= ($selected == '1') ? 'selected' : '' ?>>Em andamento</option>
                    <option value="2" <?= ($selected == '2') ? 'selected' : '' ?>>Finalizada</option>
                </select>
            </td>
    </table>
    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-primary" >Alterar Status</button>

    </div>
</form>