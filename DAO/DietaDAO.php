<?php

class DietaDAO{

    public $conexao;

    public function __construct()
    {
        include 'MySQL.php';

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
}