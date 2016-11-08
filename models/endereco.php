<?php

//classe endereco do cliente
class Endereco {

    private $conn;
    private $table_name = "endereco"; 
  
    public $id;
    public $logradouro;
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

        $query = "INSERT INTO
                    " . $this->table_name . "
                SET
                    logradouro = ?, numero = ?, bairro = ?, uf = ?, cidade = ?, cep = ?";
 
        $stmt = $this->conn->prepare($query);
 

        $stmt->bindParam(1, $this->logradouro);
        $stmt->bindParam(2, $this->numero);
        $stmt->bindParam(3, $this->bairro);
        $stmt->bindParam(4, $this->uf);
        $stmt->bindParam(5, $this->cidade);
        $stmt->bindParam(6, $this->cep);
            
        
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
                    logradouro = ? and numero = ? and cep = ? limit 1";


        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(1, $this->logradouro);
        $stmt->bindParam(2, $this->numero);
        $stmt->bindParam(3, $this->cep);

        if($stmt->execute()){
            return $stmt->fetch();
        }else{
            return false;
        }

    }
    
}