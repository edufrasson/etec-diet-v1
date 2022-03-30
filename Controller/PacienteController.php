<?php 
class PacienteController{
    public static function form(){
        include 'View/modules/CadastrarPaciente.php';
        
        $arr_pacientes = self::ver();

        return $arr_pacientes;
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

        header("Location: /paciente");
    }

    public static function ver(){
        include 'Model/PacienteModel.php';

        $model = new PacienteModel();

        $arr_pacientes = $model->getAll();

        return $arr_pacientes;
    }
}
