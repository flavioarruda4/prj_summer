<?php
//classe cliente
class Cliente {
    private $conn;
    private $table_name = "clientes";
 
  
    public $nome;
    public $email;
    public $dataCadastro;
    public $rg;
    public $cpf;
    public $telFixo;
    public $telCleluar;
    public $endereco_id;
    
 
    public function __construct($db){
        $this->conn = $db;
    }
    
    //cria 
    function create(){
 
        $query = "INSERT INTO
                    " . $this->table_name . "
                SET
                    nome = ?, email = ?, dataCadastro = ?, rg = ?, cpf = ?, telFixo = ?, telCleluar = ?, endereco_id = ?";
        
    
 
        $stmt = $this->conn->prepare($query);
 
        $stmt->bindParam(1, $this->nome);
        $stmt->bindParam(2, $this->email);
        $stmt->bindParam(3, $this->dataCadastro);
        $stmt->bindParam(4, $this->rg);
        $stmt->bindParam(5, $this->cpf);
        $stmt->bindParam(6, $this->telFixo);
        $stmt->bindParam(7, $this->telCleluar);
        $stmt->bindParam(8, $this->endereco_id);
            
        
        if($stmt->execute()){
            return true;
        }else{
            return false;
        }          
        
    }    
        
}