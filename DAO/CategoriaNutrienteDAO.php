<?php

class CategoriaNutrienteDAO{

    public $conexao;

    public function __construct()
    {
        include_once 'MySQL.php';

        $this->conexao = new MySQL();
    }

    public function insert(CategoriaNutrienteModel $model){
       
        $sql = "INSERT INTO categoria_nutriente(descricao) VALUES (?)";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->descricao);

        $stmt->execute();
    }

    public function getAllRows(){
        $sql = "SELECT * FROM categoria_nutriente ORDER BY id desc";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();      

        return $stmt->fetchAll(PDO::FETCH_CLASS);    
    }
}