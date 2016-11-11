<?php

include_once '../config/database.php';

$database = new Database();
$db = $database->getConnection();

include_once '../models/controleos.php';
$controleos = new ControleOs($db);

$osStatus = 0;

$stmtOs = $controleos->readStatus($osStatus);


$numeroOs = $stmtOs->rowCount();



if ($numeroOs > 0) {


    echo '
          
        <div id="msgsucesso-os-update"  style="display: none;" class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            Status da Os Alterada com sucesso!
        </div>
        
        <table class="os-table-pendentes table display table-hover" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th class=".select-filter span2">Id Os</th>
                    <th class=".select-filter span2">Nome Cliente</th>
                    <th class=".select-filter span2">Data Alteração Status</th>
                    <th class=".select-filter span2">Ação</th>
                </tr>
            </thead>
            <tbody>';

    while ($row = $stmtOs->fetch(PDO::FETCH_ASSOC)) {

        extract($row);

        echo "<tr>";
        echo "<td>{$os_idos}</td>";
        echo "<td>{$usuarios_idUsuarios}</td>";
        echo "<td>{$dataStatusAndamentoOs}</td>";


        echo "<td>";
        echo "<div id='idOsList' class='idOsList display-none' style='display: none;'>{$os_idos}</div>";

        echo "<div class='btn btn-info edit-btn edit-user margin-right-2em'>";
        echo "<a data-toggle='modal' data-target='#myModalEdit' href='#myModalEdit'> <span class='glyphicon glyphicon-edit'></span>Alterar Status</a>";
        echo "</div>";

        echo "</td>";

        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
} else {
    echo "<div class='lista_pendente alert alert-info'>Nenhuma Ordem de serviço pendente!</div>";
}
?>

