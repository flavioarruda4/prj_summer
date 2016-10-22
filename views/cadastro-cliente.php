<?php

session_start();

include_once "../config/database.php";
include_once "../views/header.php";
include_once "../views/menu.php";

//inicia a sessão e verifica se o usuario está autenticado

if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true)){ 
    unset($_SESSION['login']); 
    unset($_SESSION['perfil']); 
    unset($_SESSION['senha']); 
    header('location:../index.php'); 
    
    
}   
    $logado = $_SESSION['login']; 
?>