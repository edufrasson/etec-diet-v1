<?php

class RefeicaoAlimentoAssocDAO{
    public $conexao;

    public function __construct()
    {
        include_once 'MySQL.php';
        $this->conexao = new MySQL();
    }

    public function insert(RefeicaoAlimentoAssocModel $model){
        $sql = 'INSERT INTO refeicao_alimento_assoc(id_refeicao, id_alimento, quantidade) VALUES (?, ?, ?)';

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->id_refeicao);
        $stmt->bindValue(2, $model->id_alimento);
        $stmt->bindValue(3, $model->quantidade);

        $stmt->execute();

    }

    public function getAllRows(){
        $sql = "SELECT r.descricao as refeicao,
                    a.nome as alimento,
                     assoc.quantidade as quantidade
                FROM etec_diet.refeicao_alimento_assoc assoc
                JOIN refeicao r on r.id = assoc.id_refeicao
                JOIN alimento a on a.id = assoc.id_alimento"
        ;

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();           
        
        return $stmt->fetchAll(\PDO::FETCH_CLASS);    
    }
  
}