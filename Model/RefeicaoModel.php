<?php

class RefeicaoModel{
    public $id, $descricao, $horario, $id_dieta;

    public function save(){
        include 'DAO/RefeicaoDAO.php';

        $dao = new RefeicaoDAO();

        $dao->insert($this);
    }
}