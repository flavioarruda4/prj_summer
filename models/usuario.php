<?php
//classse login
class Usuario {
    private $conn;
    private $table_name = "usuarios";
 
  
    public $id;
    public $nome;
    public $login;
    public $senha;
    public $perfil;
    public $statusAtividade;
 
    public function __construct($db){
        $this->conn = $db;
    }
    
    //cria um login
    function create(){
 
        $query = "INSERT INTO
                    " . $this->table_name . "
                SET
                    nome = ?, login = ?, senha = ?, perfil = ?";
        
    
 
        $stmt = $this->conn->prepare($query);
 
        $stmt->bindParam(1, $this->nome);
        $stmt->bindParam(2, $this->login);
        $stmt->bindParam(3, $this->senha);
        $stmt->bindParam(4, $this->perfil);
    
        
        if($stmt->execute()){
            return true;
        }else{
            return false;
        }       
        
        
    }
    
    //verifica se o usuario existe na tabela login
    
    function logando(){
     
 
    $query = "SELECT *
   
                FROM  " . $this->table_name . "
            WHERE
                login = ? and
                senha = ?
            LIMIT
                1";
 
    $stmt = $this->conn->prepare( $query );
    
    $stmt->bindParam(1, $this->login);
    $stmt->bindParam(2, $this->senha);
    
    $stmt->execute();
    
    return $stmt;
    }
    
    //recupera o nivel de acesso do usuario
    
    function recuperaPerfil(){
     
 
    $query = "SELECT *
   
                FROM  " . $this->table_name . "
            WHERE
                login = ? and
                senha = ?
            LIMIT
                1";
 
    $stmt = $this->conn->prepare( $query );
    
    $stmt->bindParam(1, $this->login);
    $stmt->bindParam(2, $this->senha);
    
    $stmt->execute();
    
    return $stmt->fetch();
    }
    
     //lê todos os usuarios
    function readAll() {
        $query = "SELECT idUsuarios,nome, login,perfil "
                . "FROM " . $this->table_name . "
                ORDER BY nome";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
    
}