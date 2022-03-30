<?php

class RefeicaoAlimentoAssocModel{
    public $id_refeicao, $id_alimento, $quantidade;

    public function save(){
        include 'DAO/RefeicaoAlimentoAssocDAO.php';

        $dao = new RefeicaoAlimentoAssocDAO;
        $dao->insert($this);
        
        header("Location: /refeicao_alimento");
    }
}