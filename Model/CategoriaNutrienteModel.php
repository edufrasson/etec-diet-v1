<?php

class CategoriaNutrienteModel{
    public $id, $descricao;

    public function save(){
        include 'DAO/CategoriaNutrienteDAO.php';

        $dao = new CategoriaNutrienteDAO;

        $dao->insert($this);
    }
}