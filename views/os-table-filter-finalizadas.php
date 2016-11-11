<?php

include_once '../config/database.php';

$database = new Database();
$db = $database->getConnection();


include_once '../models/controleos.php';
$controleos = new ControleOs($db);

$osStatus = 2;

$stmtOs = $controleos->readStatus($osStatus);

$numeroOs = $stmtOs->rowCount();

if ($numeroOs > 0) {


    echo '
        
        <table class="os-table-finalizadas table display table-hover" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th class=".select-filter span2">Id Os</th>
                    <th class=".select-filter span2">Nome Cliente</th>
                    <th class=".select-filter span2">Celular</th>
                    <th class=".select-filter span2">Data Alteração Status</th>
                    <th class=".select-filter span2">Ação</th>
                </tr>
            </thead>
            <tbody>';

    while ($row = $stmtOs->fetch(PDO::FETCH_ASSOC)) {

        extract($row);

        echo "<tr>";
        echo "<td>{$os_idos}</td>";
        echo "<td>{$nome}</td>";
        echo "<td>{$telCelular}</td>";
        echo "<td>{$dataStatusAndamentoOs}</td>";



        echo "<td>";
        echo "<div id='idOsList' class='idOsList display-none' style='display: none;'>{$os_idos}</div>";

        echo "<div class='btn btn-info edit-btn  margin-right-2em'>";
        echo "<a id='edit-os-status' data-toggle='modal' data-target='#myModalEdit' href='#myModalEdit'> <span class='glyphicon glyphicon-edit'></span>Alterar Status</a>";
        echo "</div>";

        echo "</td>";

        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
} else {
    echo "<div class='lista_finalizadas alert alert-info'>Nenhuma Ordem de serviço finalizada!</div>";
}
?>
