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

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

}
