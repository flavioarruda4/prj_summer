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
    public $telCelular;
    public $endereco_id;

    public function __construct($db) {
        $this->conn = $db;
    }

    //cria cadastro cliente
    function create() {

        $query = "INSERT INTO
                    " . $this->table_name . "
                SET
                    nome = ?, email = ?, dataCadastro = ?, rg = ?, cpf = ?, telFixo = ?, telCelular = ?, endereco_id = ?";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(1, $this->nome);
        $stmt->bindParam(2, $this->email);
        $stmt->bindParam(3, $this->dataCadastro);
        $stmt->bindParam(4, $this->rg);
        $stmt->bindParam(5, $this->cpf);
        $stmt->bindParam(6, $this->telFixo);
        $stmt->bindParam(7, $this->telCelular);
        $stmt->bindParam(8, $this->endereco_id);





        if ($stmt->execute()) {
            $stmt->close();
            return true;
        } else {
            $stmt->close();
            return false;
        }
    }


//lê um cliente para ser editado
    function readOne() {

        $query = "SELECT * from clientes c inner join endereco e on c.endereco_id = e.id WHERE cpf = ? LIMIT
                0,1";
        




        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->cpf);

        $rc = $stmt->execute();

        if (false === $rc) {
            die('execute() failed: ' . print_r($stmt->errorInfo()));
        }

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->cpf = $row['cpf'];
        $this->endereco_id = $row['endereco_id'];
        $this->nome = $row['nome'];
        $this->email = $row['email'];
        $this->dataCadastro = $row['dataCadastro'];
        $this->rg = $row['rg'];
        $this->telFixo = $row['telFixo'];
        $this->telCelular = $row['telCelular'];
        
        
    }

     //lê todos os clientes
    function readAll() {
        $query = "SELECT nome, cpf, telCelular "
                . "FROM " . $this->table_name . "
                ORDER BY cpf";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

     //faz um update no cliente caso ele seja editado
    function update() {
        $query = "UPDATE 
                usuarios
            SET 
                nome = :nome,
                login = :login,
                senha = :senha,
                perfil = :perfil
                
            WHERE
                idUsuarios = :idUsuarios";
        
        $stmt = $this->conn->prepare($query);
        
        $stmt->bindParam(':idUsuarios', $this->idUsuarios);
        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':login', $this->login);
        $stmt->bindParam(':senha', $this->senha);
        $stmt->bindParam(':perfil', $this->perfil);
        
        
        if ($stmt->execute()) {

            return true;
        } else {

            return false;
        }
    }
    
}


