<?php

class CategoriaAlimentoDAO{

    public $conexao;

    public function __construct()
    {
        include 'MySQL.php';

        $this->conexao = new MySQL();
    }

    public function insert(CategoriaAlimentoModel $model){
       
        $sql = "INSERT INTO categoria_alimento(descricao) VALUES (?)";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->descricao);

        $stmt->execute();

        echo 'Adicionado.';
    }
}