<?php 
class PacienteController{
    public static function form(){
        include 'View/modules/CadastrarPaciente.php';
    }

    public static function save(){
        include 'Model/PacienteModel.php';

        $model = new PacienteModel();

        $model->nome = $_POST['nome'];
        $model->peso = $_POST['peso'];
        $model->altura = $_POST['altura'];
        $model->sexo = $_POST['sexo'];
        $model->data_nascimento = $_POST['data_nascimento'];

        $model->save();
    }
}
