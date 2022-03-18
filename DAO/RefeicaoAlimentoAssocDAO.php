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
}