<?php

class CategoriaNutrienteModel{
    public $descricao;

    public function save(){
        include 'DAO/CategoriaNutrienteDAO.php';

        $dao = new CategoriaNutrienteDAO;

        $dao->insert($this);
    }
}