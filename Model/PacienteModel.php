<?php 

class PacienteModel{
    public $nome, $peso, $altura, $data_nascimento, $sexo;

    public function save(){
        include 'DAO/PacienteDAO.php';

        $dao = new PacienteDAO();

        $dao->insert($this);
    }
}