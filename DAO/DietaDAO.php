<?php

class DietaDAO{

    public $conexao;

    public function __construct()
    {
        include_once 'MySQL.php';

        $this->conexao = new MySQL();
    }

    public function insert(DietaModel $model){
       
        $sql = "INSERT INTO dieta(descricao, data_inicio, data_fim, id_paciente) VALUES (?, ?, ?, ?)";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->descricao);
        $stmt->bindValue(2, $model->data_inicio);
        $stmt->bindValue(3, $model->data_fim);
        $stmt->bindValue(4, $model->id_paciente);
        

        $stmt->execute();
    }

    public function getAllRows(){
        $sql = 'SELECT d.id,
                       d.descricao,
                       DATE_FORMAT(data_inicio, "%d/%m/%Y") as data_inicio,
                       DATE_FORMAT(data_fim, "%d/%m/%Y") as data_fim,
                       p.nome as nome_paciente        
                 FROM dieta d
                 JOIN paciente p on p.id = d.id_paciente 
                 ';

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();
        
        return $stmt->fetchAll(PDO::FETCH_CLASS);   
    }
}