<?php

class CategoriaAlimentoModel{
    public $descricao;

    public function save(){
        include 'DAO/CategoriaAlimentoDAO.php';

        $dao = new CategoriaAlimentoDAO;

        $dao->insert($this);
    }
}