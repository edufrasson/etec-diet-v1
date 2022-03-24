<?php

class AlimentoDAO{
    public $conexao;
    public function __construct()
    {
        include_once 'MySQL.php';
        $this->conexao = new MySQL();
    }

    public function insert(AlimentoModel $model){
        $sql = 'INSERT INTO alimento(nome, porcao, id_categoria_alimento, caloria) VALUES (?, ?, ?, ?)';

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->porcao);
        $stmt->bindValue(3, $model->id_categoria_alimento);
        $stmt->bindValue(4, $model->caloria);

        $stmt->execute();

        echo '<script>alert("adicionado")</script>';
    }
    
    public function getAllRows(){
        $sql = 'SELECT * FROM alimento ORDER BY id desc';

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        while($alimento = $stmt->fetchObject())
            $array_alimentos[] = $alimento;
        return $array_alimentos;    
    }
}