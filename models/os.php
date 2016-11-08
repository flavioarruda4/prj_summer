<?php

//classe ordem de servico
class Os {

    private $conn;
    private $table_name = "os";
    
    public $idOs;
    public $dataEmissao;
    public $dataPrevEntrega;
    //Status pagamento onde 0 - Pago ; 1 - Pendente ; 2 - Cobranca
    public $statusPg;
    //Grau Olho Direito Longe
    public $longEsfOd;
    public $longCilOd;
    public $longEixoOd;
    public $longDnpOd;
    public $longAlturaOd;
    //Grau Olho Esquerdo Longe
    public $longEsfOe;
    public $longCilOe;
    public $longEixoOe;
    public $longDnpOe;
    public $longAlturaOe;
    //Grau Olho Direito Perto
    public $pertoEsfOd;
    public $pertoCilOd;
    public $pertoEixoOd;
    public $pertoDnpOd;
    public $pertoAlturaOd;
    //Grau Olho Esquerdo Perto
    public $pertoEsfOe;
    public $pertoCilOe;
    public $pertoEixoOe;
    public $pertoDnpOe;
    public $pertoAlturaOe;
    //Dados Adicionais da Ordem de servi�o
    public $adicao;
    public $armacao;
    public $dataVencLentes;
    public $lentes;
    public $medico;
    public $receita;
    //Pagamento
    public $formaPg;
    public $dataPg;
    public $nParcelas;
    public $observacao;
    public $valorOs;
    public $clientes_cpf;

    public function __construct($db) {
        $this->conn = $db;
    }

    //cria a os
    function create() {

        $query = "INSERT INTO
                    " . $this->table_name . "
                SET                   
                    dataEmissao = ?, dataPrevEntrega = ?, statusPg = ?, longEsfOd = ?, longCilOd = ?, longEixoOd = ?, longDnpOd = ?, longAlturaOd = ?,

                    longEsfOe = ?, longCilOe = ?, longEixoOe = ?, longDnpOe = ?, longAlturaOe = ?, pertoEsfOd = ?, pertoCilOd = ?, pertoEixoOd = ?,

                    pertoDnpOd = ?, pertoAlturaOd = ?, pertoEsfOe = ?, pertoCilOe = ?, pertoEixoOe = ?, pertoDnpOe = ?, pertoAlturaOe = ?, adicao = ?,

                    armacao = ?, dataVencLentes = ?, lentes = ?, medico = ?, receita = ?, formaPg = ?, dataPg = ?, nParcelas = ?, observacao = ?, valorOs = ?,clientes_cpf = ?";

        $stmt = $this->conn->prepare($query);
        
        
        $stmt->bindParam(1, $this->dataEmissao);
        $stmt->bindParam(2, $this->dataPrevEntrega);
        $stmt->bindParam(3, $this->statusPg);

        //Grau Olho Direito Longe
        $stmt->bindParam(4, $this->longEsfOd);
        $stmt->bindParam(5, $this->longCilOd);
        $stmt->bindParam(6, $this->longEixoOd);
        $stmt->bindParam(7, $this->longDnpOd);
        $stmt->bindParam(8, $this->longAlturaOd);

        //Grau Olho Esquerdo Longe
        $stmt->bindParam(9, $this->longEsfOe);
        $stmt->bindParam(10, $this->longCilOe);
        $stmt->bindParam(11, $this->longEixoOe);
        $stmt->bindParam(12, $this->longDnpOe);
        $stmt->bindParam(13, $this->longAlturaOe);

        //Grau Olho Direito Perto
        $stmt->bindParam(14, $this->pertoEsfOd);
        $stmt->bindParam(15, $this->pertoCilOd);
        $stmt->bindParam(16, $this->pertoEixoOd);
        $stmt->bindParam(17, $this->pertoDnpOd);
        $stmt->bindParam(18, $this->pertoAlturaOd);

        //Grau Olho Direito Perto
        $stmt->bindParam(19, $this->pertoEsfOe);
        $stmt->bindParam(20, $this->pertoCilOe);
        $stmt->bindParam(21, $this->pertoEixoOe);
        $stmt->bindParam(22, $this->pertoDnpOe);
        $stmt->bindParam(23, $this->pertoAlturaOe);

        //Dados Adicionais da Ordem de servico
        $stmt->bindParam(24, $this->adicao);
        $stmt->bindParam(25, $this->armacao);
        $stmt->bindParam(26, $this->dataVencLentes);
        $stmt->bindParam(27, $this->lentes);
        $stmt->bindParam(28, $this->medico);
        $stmt->bindParam(29, $this->receita);

        //Pagamento
        $stmt->bindParam(30, $this->formaPg);
        $stmt->bindParam(31, $this->dataPg);
        $stmt->bindParam(32, $this->nParcelas);
        $stmt->bindParam(33, $this->observacao);
        $stmt->bindParam(34, $this->valorOs);
        $stmt->bindParam(35, $this->clientes_cpf);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

}
