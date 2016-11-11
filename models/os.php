<?php

//classe ordem de servico
class Os {

    private $conn;
    private $table_name = "os";
    public $id;
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
    public $perEsfOd;
    public $perCilOd;
    public $perEixoOd;
    public $perDnpOd;
    public $perAlturaOd;
    //Grau Olho Esquerdo Perto
    public $perEsfOe;
    public $perCilOe;
    public $perEixoOe;
    public $perDnpOe;
    public $perAlturaOe;
    //Dados Adicionais da Ordem de serviço
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
    public $valor;
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

                    longEsfOe = ?, longCilOe = ?, longEixoOe = ?, longDnpOe = ?, longAlturaOe = ?, perEsfOd = ?, perCilOd = ?, perEixoOd = ?,

                    perDnpOd = ?, perAlturaOd = ?, perEsfOe = ?, perCilOe = ?, perEixoOe = ?, perDnpOe = ?, perAlturaOe = ?, adicao = ?,

                    armacao = ?, dataVencLentes = ?, lentes = ?, medico = ?, receita = ?, formaPg = ?, dataPg = ?, nParcelas = ?, observacao = ?, valor = ?,clientes_cpf = ?";

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
        $stmt->bindParam(14, $this->perEsfOd);
        $stmt->bindParam(15, $this->perCilOd);
        $stmt->bindParam(16, $this->perEixoOd);
        $stmt->bindParam(17, $this->perDnpOd);
        $stmt->bindParam(18, $this->perAlturaOd);

        //Grau Olho Direito Perto
        $stmt->bindParam(19, $this->perEsfOe);
        $stmt->bindParam(20, $this->perCilOe);
        $stmt->bindParam(21, $this->perEixoOe);
        $stmt->bindParam(22, $this->perDnpOe);
        $stmt->bindParam(23, $this->perAlturaOe);

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
        $stmt->bindParam(34, $this->valor);
        $stmt->bindParam(35, $this->clientes_cpf);


       if ($stmt->execute()) {
           return $this->conn->lastInsertId("id");
        } else {
            return -1;
        }
    }


}
