<?php 

class NutrienteModel{
    public $descricao, $quantidade, $id_alimento, $id_categoria_nutriente;

    public function save(){
        include 'DAO/NutrienteDAO.php';

        $dao = new NutrienteDAO();

        $dao->insert($this);
    }
}