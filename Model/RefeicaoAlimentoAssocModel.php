<?php

class RefeicaoAlimentoAssocModel{
    public $id_refeicao, $id_alimento;

    public function save(){
        include 'DAO/RefeicaoAlimentoAssocDAO.php';

        $dao = new RefeicaoAlimentoAssocDAO;
    }
}