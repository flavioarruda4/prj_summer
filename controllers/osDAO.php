<?php
session_start();

include_once '../config/database.php';

$database = new Database();
$db = $database->getConnection();

include_once '../models/os.php';
$os = new Os($db);

include_once '../models/controleos.php';
$controleos = new ControleOs($db);

$dataEmissao = date("Y-m-d", strtotime(str_replace('/', '-', $_POST["dataEmissao"])));
$os->dataEmissao = $dataEmissao;

$dataPrevEntrega = date("Y-m-d", strtotime(str_replace('/', '-', $_POST["dataPrevEntrega"])));
$os->dataPrevEntrega = $dataPrevEntrega;

//Status pagamento onde 0 - Pago ; 1 - Pendente ; 2 - Cobranca
$os->statusPg = 1;

//Grau Olho Direito Longe
echo "Resultado if >>>".empty(strip_tags($_POST["longEsfOd"])) ? 0 : strip_tags($_POST["longEsfOd"]);
$os->longEsfOd = empty(strip_tags($_POST["longEsfOd"])) ? 0.00 : strip_tags($_POST["longEsfOd"]);
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
$os->perEsfOd = strip_tags($_POST["perEsfOd"]);
$os->perCilOd = strip_tags($_POST["perCilOd"]);
$os->perEixoOd = strip_tags($_POST["perEixoOd"]);
$os->perDnpOd = strip_tags($_POST["perDnpOd"]);
$os->perAlturaOd = strip_tags($_POST["perAlturaOd"]);

//Grau Olho Esquerdo Perto
$os->perEsfOe = strip_tags($_POST["perEsfOe"]);
$os->perCilOe = strip_tags($_POST["perCilOe"]);
$os->perEixoOe = strip_tags($_POST["perEixoOe"]);
$os->perDnpOe = strip_tags($_POST["perDnpOe"]);
$os->perAlturaOe = strip_tags($_POST["perAlturaOe"]);

//Dados Adicionais da Ordem de servi�o
$os->adicao = strip_tags($_POST["adicao"]);
$os->armacao = strip_tags($_POST["armacao"]);

$dataVencLentes = date("Y-m-d", strtotime(str_replace('/', '-', $_POST["dataVencLentes"])));
$os->dataVencLentes = $dataVencLentes;

$os->lentes = strip_tags($_POST["lentes"]);
$os->medico = strip_tags($_POST["medico"]);
$os->receita = strip_tags($_POST["receita"]);

//Pagamento
$os->formaPg = strip_tags($_POST["pagamento"]);

$dataPg = date("Y-m-d", strtotime(str_replace('/', '-', $_POST["dataPg"])));
$os->dataPg = $dataPg;

$os->nParcelas = strip_tags($_POST["nParcelas"]);
$os->observacao = strip_tags($_POST["observacao"]);
$os->valor = strip_tags($_POST["valor"]);
$os->clientes_cpf = strip_tags($_POST["clientes_cpf"]);

$id = $os->create();


if($id > 0){
    
    $id_idos = $id;
    
    $controleos->os_idos = $id;

    // 0 = pendente , 1 = em andamento e 2 = finalizada
    $controleos->statusAndamentoOs = 0;

    // data de criacao da os
    $controleos->dataStatusAndamentoOs = $dataEmissao;
    
    $controleos->usuarios_idUsuarios = $_SESSION["idUsuarios"];

    $controleos->create();
}else{
    echo -1;
}

?>