<?php

include_once '../config/database.php';

$database = new Database();
$db = $database->getConnection();

include_once '../models/endereco.php';
$endereco = new Endereco($db);

include_once '../models/cliente.php';
$cliente = new Cliente($db);


$endereco->largadouro = strip_tags($_POST["largadouro"]);
$endereco->numero = strip_tags($_POST["numero"]);
$endereco->bairro = strip_tags($_POST["bairro"]);
$endereco->uf = strip_tags($_POST["uf"]);
$endereco->cidade = strip_tags($_POST["cidade"]);
$endereco->cep = strip_tags($_POST["cep"]);

if($endereco->create()){        
        $id = $endereco->retornaID();
        $id_endereco_cliente = $id["id"];
}

$cliente->nome = strip_tags($_POST["nome"]);
$cliente->email = strip_tags($_POST["email"]);
$cliente->dataCadastro = strip_tags($_POST["dataCadastro"]);
$cliente->rg = strip_tags($_POST["rg"]);
$cliente->cpf = strip_tags($_POST["cpf"]);
$cliente->telFixo = strip_tags($_POST["telFixo"]);
$cliente->telCleluar = strip_tags($_POST["telCleluar"]);
$cliente->endereco_id = $id["id"];


$cliente->create();

?>