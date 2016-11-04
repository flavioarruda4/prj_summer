<?php

//classe endereco do cliente
class Endereco {

    private $conn;
    private $table_name = "endereco"; 
  
    public $id;
    public $largadouro;
    public $numero;
    public $bairro;
    public $uf;
    public $cidade;
    public $cep;
 
    public function __construct($db){
        $this->conn = $db;
    }
    
    //cria um endereço
    function create(){

        //Verifica o maior id de um endereço cadastrado e adiciona + 1 
        $sql = "select max(id)as maxIdEndereco from endereco";
        $resultado = mysql_query($sql) or die("Falha na execução da consulta - maxIdEndereco"); 
        $linha = mysql_fetch_assoc($resultado);
        $id = $linha["maxIdEndereco"]+1;
 

        $query = "INSERT INTO
                    " . $this->table_name . "
                SET
                    id = $id, largadouro = ?, numero = ?, bairro = ?, uf = ?, cidade = ?, cep = ?";
        
    
 
        $stmt = $this->conn->prepare($query);
 
        $stmt->bindParam(1, $this->id);
        $stmt->bindParam(2, $this->largadouro);
        $stmt->bindParam(3, $this->numero);
        $stmt->bindParam(4, $this->bairro);
        $stmt->bindParam(5, $this->uf);
        $stmt->bindParam(6, $this->cidade);
        $stmt->bindParam(7, $this->cep);
            
        
        if($stmt->execute()){
            return true;
        }else{
            return false;
        }       
        
        
    }    

    // Função que retorna o id do endereço para ser inserido no cliente
    
    public function retornaID(){

        $query = "SELECT id FROM
                    " . $this->table_name . "
                    WHERE
                    largadouro = ? and numero = ? and cep = ? limit 1";


        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(1, $this->largadouro);
        $stmt->bindParam(2, $this->numero);
        $stmt->bindParam(3, $this->cep);

        if($stmt->execute()){
            return $stmt->fetch();
        }else{
            return false;
        }

    }
    
}