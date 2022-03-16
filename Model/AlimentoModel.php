<?php

class AlimentoModel{    
    public $nome, $id_categoria_alimento, $porcao;

    public function save(){
        include 'DAO/AlimentoDAO.php';

        $dao = new AlimentoDAO();

        $dao->insert($this);
    }
}