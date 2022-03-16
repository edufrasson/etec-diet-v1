<?php

class CategoriaNutrienteDAO{

    public $conexao;

    public function __construct()
    {
        include 'MySQL.php';

        $this->conexao = new MySQL();
    }

    public function insert(CategoriaNutrienteModel $model){
       
        $sql = "INSERT INTO categoria_nutriente(descricao) VALUES (?)";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->descricao);

        $stmt->execute();
    }
}