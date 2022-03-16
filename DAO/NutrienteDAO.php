<?php

class NutrienteDAO{
    public $conexao;

    public function __construct()
    {
        include_once 'MySQL.php';
        $this->conexao = new MySQL();
    }

    public function insert(NutrienteModel $model){
        $sql = "INSERT INTO nutriente(descricao, quantidade, id_alimento, id_categoria_nutriente) VALUES (?, ?, ?, ?)";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->descricao);
        $stmt->bindValue(2, $model->quantidade);
        $stmt->bindValue(3, $model->id_alimento);
        $stmt->bindValue(4, $model->id_categoria_nutriente);

        $stmt->execute();
    }
}