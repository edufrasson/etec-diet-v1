<?php

class AlimentoDAO{
    public $conexao;
    public function __construct()
    {
        include 'MySQL.php';
        $this->conexao = new MySQL();
    }

    public function insert(AlimentoModel $model){
        $sql = 'INSERT INTO alimento(nome, porcao, id_categoria_alimento) VALUES (?, ?, ?)';

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->porcao);
        $stmt->bindValue(3, $model->id_categoria_alimento);

        $stmt->execute();

        echo 'adicionado.';
    }   
}