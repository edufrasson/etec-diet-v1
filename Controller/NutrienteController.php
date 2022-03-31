<?php

class NutrienteController{
    public static function form(){
        include 'Model/NutrienteModel.php';
        $model = new NutrienteModel();
        $model->lista_categoria = $model->getAllCategoriaNutriente();
        $model->lista_alimentos = $model->getAllAlimentos();

        include 'View/modules/CadastrarNutriente.php';
    }

    public static function save(){
        include 'Model/NutrienteModel.php';

        $model = new NutrienteModel();

        $model->descricao = $_POST['descricao'];
        $model->quantidade = $_POST['quantidade'] * 1000;
        $model->id_alimento = $_POST['id_alimento'];
        $model->id_categoria_nutriente = $_POST['id_categoria_nutriente'];

        $model->save();

        header("Location: /nutriente");
    }
}