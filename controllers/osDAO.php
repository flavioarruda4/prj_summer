<?php

include_once '../config/database.php';

$database = new Database();
$db = $database->getConnection();

include_once '../models/os.php';
$os = new Os($db);

include_once '../models/controleos.php';
$controleos = new ControleOs($db);

$os->dataEmissao = strip_tags($_POST["dataEmissao"]);
$os->dataPrevEntrega = strip_tags($_POST["dataPrevEntrega"]);

//Status pagamento onde 0 - Pago ; 1 - Pendente ; 2 - Cobranca
$os->statusPg = 1;

//Grau Olho Direito Longe
$os->longEsfOd = strip_tags($_POST["longEsfOd"]);
$os->longCilOd = strip_tags($_POST["longCilOd"]);
$os->longEixoOd = strip_tags($_POST["longEixoOd"]);
$os->longDnpOd = strip_tags($_POST["longDnpOd"]);
$os->longAlturaOd = strip_tags($_POST["longAlturaOd"]);

//Grau Olho Esquerdo Longe
$os->longEsfOe = strip_tags($_POST["longEsfOe"]);
$os->longCilOe = strip_tags($_POST["longCilOe"]);
$os->longEixoOe = strip_tags($_POST["longEixoOe"]);
$os->longDnpOe = strip_tags($_POST["longDnpOe"]);
$os->longAlturaOe = strip_tags($_POST["longAlturaOe"]);

//Grau Olho Direito Perto
$os->pertoEsfOd = strip_tags($_POST["pertoEsfOd"]);
$os->pertoCilOd = strip_tags($_POST["pertoCilOd"]);
$os->pertoEixoOd = strip_tags($_POST["pertoEixoOd"]);
$os->pertoDnpOd = strip_tags($_POST["pertoDnpOd"]);
$os->pertoAlturaOd = strip_tags($_POST["pertoAlturaOd"]);

//Grau Olho Esquerdo Perto
$os->pertoEsfOe = strip_tags($_POST["pertoEsfOe"]);
$os->pertoCilOe = strip_tags($_POST["pertoCilOe"]);
$os->pertoEixoOe = strip_tags($_POST["pertoEixoOe"]);
$os->pertoDnpOe = strip_tags($_POST["pertoDnpOe"]);
$os->pertoAlturaOe = strip_tags($_POST["pertoAlturaOe"]);

//Dados Adicionais da Ordem de servi�o
$os->adicao = strip_tags($_POST["adicao"]);
$os->armacao = strip_tags($_POST["armacao"]);
$os->dataVencLentes = strip_tags($_POST["dataVencLentes"]);
$os->lentes = strip_tags($_POST["lentes"]);
$os->medico = strip_tags($_POST["medico"]);
$os->receita = strip_tags($_POST["receita"]);

//Pagamento
$os->formaPg = strip_tags($_POST["pagamento"]);
$os->dataPg = strip_tags($_POST["dataPg"]);
$os->nParcelas = strip_tags($_POST["nParcelas"]);
$os->observacao = strip_tags($_POST["observacao"]);
$os->valorOs = strip_tags($_POST["valorOs"]);
$os->clientes_cpf = strip_tags($_POST["clienteOs"]);



if ($os->create()) {
    
    $id_idos = $os->getLastOs();
    
    $controleos->os_idos = $id_idos;
    $controleos->statusAndamentoOs;
    $controleos->dataStatusAndamentoOs;
    $controleos->usuarios_idUsuarios;
}
?>