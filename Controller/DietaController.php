<?php 
class DietaController{
    public static function form(){
        include 'View/modules/CadastrarDieta.php';
    }

    public static function save(){
        include 'Model/DietaModel.php';

        $model = new DietaModel();

        $model->descricao = $_POST['descricao'];
        $model->data_inicio = $_POST['data_inicio'];
        $model->data_fim = $_POST['data_fim'];
        $model->id_paciente = $_POST['id_paciente'];        

        $model->save();
    }
}
