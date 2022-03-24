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
        $stmt = $this->conexao->prepare("SELECT * FROM refeicao ORDER BY id desc");
        $stmt->execute();

        while($r = $stmt->fetchObject())
            $array_refeicoes[] = $r;
            
        return $array_refeicoes;    
    }
  
}