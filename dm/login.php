<?php
    include("config.php");
    session_start();
    $login    = $_POST["login"];
    $senha    = md5($_POST["senha"]);

//	$connect = mysql_connect('localhost','sfabrica','facil123');
//	$db = mysql_select_db('summer_db');
    $consulta = "select * from usuarios where login = '$login' and senha = '$senha'";
    $resultado = mysql_query($consulta) or die("Falha na execucao da consulta");
    $linha = mysql_fetch_assoc($resultado);
    
    if ($senha != $linha["senha"]){
        $msg = "Senha incorreta favor verificar!";
        header("Location:../index.php?m='$msg'");
        exit;
     } else {
        if (mysql_num_rows ($resultado)> 0){
                $_SESSION['idUsuarios'] = $linha["idUsuarios"] ;
                $_SESSION['login']      = $login;
                $_SESSION['design']     = " Desenvolvido Faculdade Projeção !";
                $_SESSION['rodape']     = "Faculdade Proje&ccedil&atildeo - Curso de An&aacutelise e Desenvolvimento de Sistema - TADS";
    		    header("Location:../principal.php");
         }else{
               unset ($_SESSION['idUsuarios']);
               unset ($_SESSION['login']);
               unset ($_SESSION['design']);
               echo "<script language='javascript' type='text/javascript'> alert('Login e/ou senha incorretos'); window.location.href='../index.php';</script>";
               die();    
        }
  }

?>