<?php

class CategoriaNutrienteController{
    public static function form(){
        include 'View/modules/CadastrarCategoriaNutriente.php';
    }

    public static function save(){
        include 'Model/CategoriaNutrienteModel.php';

        $model = new CategoriaNutrienteModel;

        $model->descricao = $_POST['descricao'];        

        $model->save();

        header("Location: /categoria_nutriente");
    }
}