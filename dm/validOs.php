<?php
    include("config.php");
    session_start();
    date_default_timezone_set('America/Sao_Paulo');
    
    //Verifica a maior Ordem de servi�o cadastrada e adiciona + 1 ; 
    $consulta ="Select max(idOs)as maxIdOs from os";
    $resultado = mysql_query($consulta) or die("Falha na execu��o da consulta - maxId");
    $linha = mysql_fetch_assoc($resultado);
    $idMaxOs = $linha["maxIdOs"] + 1;
            
    //Inicializa��o vari�veis  
    $dataEmissao = $dataPrevEntrega =$longEsfOd = $longCilOd = $longEixoOd = $longDnpOd = $longAlturaOd = $longEsfOe = $longCilOe = " " ;
    $longEixoOe = $longDnpOe = $longAlturaOe = $pertoEsfOd = $pertoCilOd = $pertoEixoOd = $pertoDnpOd = $pertoAlturaOd = $pertoEsfOe = " ";
    $pertoCilOe = $pertoEixoOe = $pertoDnpOe = $pertoAlturaOe = $adicao = $armacao = $lentes = $observacao = $medico = $valorOs = $pagamento = " ";
    $dataPg = $receita = $idOS = "";
    
    //Captura Variaveis do formulario principal
    //Principal
    $dataEmissao     = $_POST["dataEmissao"];
    $dataPrevEntrega = $_POST["dataPrevEntrega"];
    //Status pagamento onde 0 - Pago ; 1 - Pendente ; 2 - Cobran�a
    $statusPg = 0;
    //Grau Olho Direito Longe
    $longEsfOd   = $_POST["longEsfOd"];
    $longCilOd   = $_POST["longCilOd"];
    $longEixoOd  = $_POST["longEixoOd"];
    $longDnpOd   = $_POST["longDnpOd"];
    $longAlturaOd= $_POST["longAlturaOd"];
    //Grau Olho Esquerdo Longe
    $longEsfOe   = $_POST["longEsfOe"];
    $longCilOe   = $_POST["longCilOe"];
    $longEixoOe  = $_POST["longEixoOe"];
    $longDnpOe   = $_POST["longDnpOe"];
    $longAlturaOe= $_POST["longAlturaOe"]; 
    
    //Grau Olho Direito Perto
    $pertoEsfOd  = $_POST["pertoEsfOd"];
    $pertoCilOd   = $_POST["pertoCilOd"];
    $pertoEixoOd  = $_POST["pertoEixoOd"];
    $pertoDnpOd   = $_POST["pertoDnpOd"];
    $pertoAlturaOd= $_POST["pertoAlturaOd"];
    //Grau Olho Esquerdo Perto
    $pertoEsfOe   = $_POST["pertoEsfOe"];
    $pertoCilOe   = $_POST["pertoCilOe"];
    $pertoEixoOe  = $_POST["pertoEixoOe"];
    $pertoDnpOe   = $_POST["pertoDnpOe"];
    $pertoAlturaOe= $_POST["pertoAlturaOe"];
    
    //Dados Adicionais da Ordem de servi�o
    $adicao        = $_POST["adicao"];
    $armacao       = $_POST["armacao"];
    $dataVencLentes= $_POST["dataVencLentes"];
    //Incluir no SQL
    $lentes        = $_POST["lentes"];
    $medico        = $_POST["medico"];
    $receita       = $_POST["receita"];
    $formaPg       = $_POST["formaPg"];
    $dataPg        = $_POST["dataPg"];
    $nParcelas     = $_POST["nParcelas"];
    $observacao    = $_POST["observacao"];
    $valorOs         = $_POST["valorOs"];
 

    //Tratamento de campos do formul�rio principal
    if ($dataEmissao == ""){
       $msg = "Campo obrigat�rios n�o preenchidos. Verifique!";
       header("Location:../cadOs.php?m=$msg");
       exit; 
       }

    //Verifica se a senha cadastrada no campo senha � igual a senha no campo redigita��o de senha se n�o para processo e retorno para pagina principal do cadastro
    if ($valorOs == ""){
        $msg = "Senhas digitadas diferentes , favor verificar";
        header("Location:../cadOs.php?m=$msg");
        exit;
    }
    
    //Insere ordem de servi�o 
    $consulta = "INSERT INTO os(idOs,dataEmissao,dataPrevEntrega,statusPg,longEsfOd,longCilOd,longEixoOd,longDnpOd,longAlturaOd,longEsfOe
                ,longCilOe,longEixoOe,longDnpOe,longAlturaOe,perEsfOd,perCilOd,perEixoOd,perDnpOd,perAlturaOd,perEsfOe,perCilOe
                ,perEixoOe,perDnpOe,perAlturaOe,adicao,armacao,dataVencLentes,lentes,medico,receita,formaPg,dataPg,nParcelas,observacao,valor) 
                values ('$idMaxOs','$dataEmissao','$dataPrevEntrega','$statusPg','$longEsfOd','$longCilOd','$longEixoOd','$longDnpOd','$longAlturaOd','$longEsfOe'
                ,'$longCilOe','$longEixoOe','$longDnpOe','$longAlturaOe','$pertoEsfOd','$pertoCilOd','$pertoEixoOd','$pertoDnpOd','$pertoAlturaOd','$pertoEsfOe'
                ,'$pertoCilOe','$pertoEixoOe','$pertoDnpOe','$pertoAlturaOe','$adicao','$armacao','$dataVencLentes','$lentes'
                ,'$medico','$receita','$formaPg','$dataPg','$nParcelas','$observacao','$valorOs')";
    $resultado = mysql_query($consulta) or die("Falha na execu��o da consulta - os");
    
    //Scrip para inser��o na tabela os_usuarios onde se mantem log de eventos realizados pela ordem de servi�o
    $consLogOs ="Select max(id)as maxIdLogOs from os_usuarios";
    $resulLog = mysql_query($consLogOs) or die("Falha na execu��o da consulta - RLog");
    $lin = mysql_fetch_assoc($resulLog);
    $maxIdLogOs = $lin["maxIdLogOs"] + 1;    
    $usuarios_idUsuarios = $_SESSION['idUsuarios'];
    $dataStatusAndamentoOs =  date('Y-m-d H:i');  
    $insLog = "INSERT INTO os_usuarios (id, os_idos, usuarios_idUsuarios, statusAndamentoOs, dataStatusAndamentoOs) 
               values ('$maxIdLogOs','$idMaxOs','$usuarios_idUsuarios',0,'$dataStatusAndamentoOs') ";
    echo $insLog;
    $resultLogIns = mysql_query($insLog) or die("Falha na execu��o da consulta - Log");
    echo "Dados adicionados com sucesso";       
    header("Location:../cadOs.php");
?>