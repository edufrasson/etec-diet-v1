<?php

class CategoriaAlimentoDAO{

    public $conexao;

    public function __construct()
    {
        include_once 'MySQL.php';

        $this->conexao = new MySQL();
    }

    public function insert(CategoriaAlimentoModel $model){
       
        $sql = "INSERT INTO categoria_alimento(descricao) VALUES (?)";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->descricao);

        $stmt->execute();
    }

    public function getAllRows(){
        $sql = "SELECT * FROM categoria_alimento";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        while($categoria = $stmt->fetchObject())
            $array_categorias[] = $categoria;

        return $array_categorias;    
    }
}