<?php

class AlimentoController{
    public static function form(){
        include 'View/modules/CadastrarAlimento.php';
    }

    public static function save(){
        include 'Model/AlimentoModel.php';

        $model = new AlimentoModel();

        $model->nome = $_POST['nome'];
        $model->porcao = $_POST['porcao'];
        $model->id_categoria_alimento = $_POST['id_categoria_alimento'];

        $model->save();

        header("Location: /alimento");
    }
}