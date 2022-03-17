<?php

class RefeicaoModel{
    public $descricao, $horario, $id_dieta;

    public function save(){
        include 'DAO/RefeicaoDAO.php';

        $dao = new RefeicaoDAO();

        $dao->insert($this);
    }
}