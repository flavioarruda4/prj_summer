<?php
include_once '../config/database.php';
include_once '../models/usuario.php';


/* $idUsuarios = isset($_GET['id']) ? $_GET['id'] : die("Erro ao encontrar Usuário!");

  $database = new Database();
  $db = $database->getConnection();

  $usuario = new Usuario($db);

  $usuario->idUsuarios = $idUsuarios;

  $usuario->readOne(); */
?>

<form id='update-status-os' action='' method='post' border='0' autocomplete="off">
    <!-- Mensagem Sucesso -->

    <table class='table table-bordered table-hover'>

        <tr>
            <td>ID Os:</td>
            <td>
                <input name='idOs' type="text" class='form-control nome-editar' value='45451515' disabled="true"/>
            </td>
        </tr>
        <tr>
            <td>Usuário última alteracao:</td>
            <td><input type='text' name='usuario' class='form-control' value='sfabrica'  disabled="true" /></td>
        </tr>
        <tr>
            <td>Cliente</td>
            <td><input  id="senha-edit" type='text' name='senha' class='form-control' value='José'  disabled="true"/></td>
        </tr>
        <tr>

            <td>Perfil</td>
            <td>
                <?php //$selected = htmlspecialchars($usuario->perfil, ENT_QUOTES); ?>
                <select id="perfil" name="perfil" class="form-control">
                    <option value="1" selected>Pendente</option>
                    <option value="2" >Em andamento</option>
                    <option value="3">Finalizada</option>
                </select>
            </td>
        <tr>
            <td>

                <input type='hidden' name='idOs' value='' /> 

            </td>
        </tr>
    </table>
    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-primary" >Alterar Status</button>

    </div>
</form>