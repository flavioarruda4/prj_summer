<?php

include_once '../config/database.php';

$database = new Database();
$db = $database->getConnection();

include_once '../models/usuario.php';
$usuario = new Usuario($db);

echo print_r($_POST);

$usuario->nome = strip_tags($_POST["nome"]);
$usuario->login = strip_tags($_POST["login"]);
$usuario->senha = md5(strip_tags($_POST["senha"]));
$usuario->perfil = strip_tags($_POST["perfil"]);


$usuario->create();

?>