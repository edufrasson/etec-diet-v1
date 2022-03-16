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
        $sql = "SELECT * FROM categoria_nutriente;";

        $stmt = $this->conexao->prepare($sql);

        $stmt->execute();

        while($categoria_nutriente = $stmt->fetchObject())
            $array_categoria[] = $categoria_nutriente;
        return $array_categoria;    
    }
}