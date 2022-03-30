<?php

// CAMADA MODEL // 

// Funções

/**
 * 1 - Transporte de dados através de uma função 
 * que acessa a camada DAO
 * 
 * 2 - Validação 
 */
 

class AlimentoModel{    
    public $id, $nome, $id_categoria_alimento, $porcao, $caloria;

    public function save(){
        include 'DAO/AlimentoDAO.php';

        $dao = new AlimentoDAO();

        $dao->insert($this);
    }    
}