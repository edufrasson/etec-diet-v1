<?php

class CategoriaAlimentoModel{
    public $id, $descricao;

    public function save(){
        include 'DAO/CategoriaAlimentoDAO.php';

        $dao = new CategoriaAlimentoDAO;

        $dao->insert($this);
    }
}