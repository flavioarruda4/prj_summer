<?php

session_start();
//update do usuario requisitado via ajax
include_once '../config/database.php';
include_once '../models/controleos.php';

 
$database = new Database();
$db = $database->getConnection();
 
$controleos = new ControleOs($db);

$controleos->statusAndamentoOs = $_POST['statusAndamentoOs'];
$controleos->id = $_POST['id'];
$controleos->usuarios_idUsuarios = $_SESSION['idUsuarios'];
$controleos->update();

?>