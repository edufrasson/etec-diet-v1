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

    public function getAllRows(){
        $sql = "SELECT 
        n.id as id,
        a.nome as alimento,        
        n.quantidade / 1000 as quantidade,
        n.descricao as descricao    
        FROM nutriente n
        JOIN alimento a on a.id = n.id_alimento
        ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();           
        
        return $stmt->fetchAll(\PDO::FETCH_CLASS);    
    }
  
}