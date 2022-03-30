<?php

class DietaModel{
    public $id, $descricao, $data_inicio, $data_fim, $id_paciente;

    public function save(){
        include 'DAO/DietaDAO.php';

        $dao = new DietaDAO();

        $dao->insert($this);
    }
}