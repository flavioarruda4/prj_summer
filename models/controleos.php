<?php

//classe ordem de servico
class ControleOs {

    private $conn;
    private $table_name = "os_usuarios";
    
    public $id;
    public $os_idos;
    public $statusAndamentoOs;
    public $dataStatusAndamentoOs;
    public $usuarios_idUsuarios;
    
    
    public function __construct($db) {
        $this->conn = $db;
    }

    //cria a os
    function create() {

        $query = "INSERT INTO
                    " . $this->table_name . "
                SET                   
                    os_idos = ?, statusAndamentoOs = ?, dataStatusAndamentoOs = ?, usuarios_idUsuarios = ?";

        $stmt = $this->conn->prepare($query);
        
        
        $stmt->bindParam(1, $this->os_idos);
        $stmt->bindParam(2, $this->statusAndamentoOs);
        $stmt->bindParam(3, $this->dataStatusAndamentoOs);
        $stmt->bindParam(4, $this->usuarios_idUsuarios);

       $rc = $stmt;
        // bind_param() can fail because the number of parameter doesn't match the placeholders in the statement
        // or there's a type conflict(?), or ....
        if (false === $rc) {
            // again execute() is useless if you can't bind the parameters. Bail out somehow.
            die('bind_param() failed: ' . htmlspecialchars($stmt->error));
        }

        $rc = $stmt->execute();
        // execute() can fail for various reasons. And may it be as stupid as someone tripping over the network cable
        // 2006 "server gone away" is always an option
        if (false === $rc) {
            die('execute() failed: ' . print_r($stmt->errorInfo()));
        }

    }

}
