<?php

class RefeicaoDAO{
    public $conexao;

    public function __construct()
    {
        include_once 'MySQL.php';
        $this->conexao = new MySQL();
    }

    public function insert(RefeicaoModel $model){
        $sql = 'INSERT INTO refeicao(descricao, horario, id_dieta) VALUES (?, ?, ?)';

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->descricao);
        $stmt->bindValue(2, $model->horario);
        $stmt->bindValue(3, $model->id_dieta);

        $stmt->execute();
    }
    public function getAllRows(){
        $sql = "SELECT r.id as id,
        r.descricao as descricao,
        r.horario as horario,
        d.descricao as nome_dieta
        FROM refeicao r
        JOIN dieta d on d.id = r.id_dieta
     ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();
        
        return $stmt->fetchAll(PDO::FETCH_CLASS);    
    }
  
}