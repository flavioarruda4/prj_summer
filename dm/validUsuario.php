<?php
    include("config.php");
    //Inicializaчуo variсveis 
    $nome = $login = $senha = $perfil = $statusAtividade = ""; 

    //Captura Variaveis do formulario principal
    $nome = $_POST["nome"];
    $login = $_POST["login"];
    $senha = $_POST["senha"];
    $resenha = $_POST["resenha"];
    $perfil  = $_POST["perfil"];
    $statusAtividade = $_POST["statusAtividade"];
    $senhamd5 = md5($senha);
    
    //Tratamento de campos do formulсrio principal 
    if ($nome == ""){
        $msg = "Campo (Nome Completo) obrigatorio nуo preenchido, favor verificar";
        header("Location:../cadUsuario.php?m=$msg");
        exit;
    }else{
        //Deixa a primeira letra maiuscula e o restante minuscula
        $nome = ucfirst(strtolower($nome));
    }
    //Verifica se campo login foi preenchido
    if ($login == ""){
        $msg = "Campo (Login)obrigatorio nao preenchido, favor verificar";
        header("Location:../cadUsuario.php?m=$msg");
        exit;
    }else{
        //Deixa o login todo em minusculo
        $login = strtolower($login);
    }

    //Verifica se o campo senha e resenha possuem valores digitados
    if ( ($senha == "") or ($resenha == "") ){
        $msg = "Campos (Senha ou Re-senha)obrigatorio nao preenchido, favor verificar";
        header("Location:../cadUsuario.php?m=$msg");
        exit;
    }

    //Atribuir valores padrѕes
      $statusAtividade = 0;

    //Verifica se a senha cadastrada no campo senha щ igual a senha no campo redigitaчуo de senha se nуo para processo e retorno para pagina principal do cadastro
    if ($senha != $resenha){
        $msg = "Senhas digitadas diferentes , favor verificar";
        header("Location:../cadUsuario.php?m=$msg");
        exit;
    }else{
        //Senуo insere no banco de dados
        $consulta = "INSERT INTO usuarios(nome,login,senha,perfil,statusAtividade)VALUES('$nome','$login','$senhamd5','$perfil','$statusAtividade')";
        $resultado = mysql_query($consulta) or die("Falha na execuчуo da consulta");
        $msg = "Dados adicionados com sucesso";
        header("Location:../cadUsuario.php");
    } 
?>