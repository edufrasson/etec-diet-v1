<?php

class CategoriaNutrienteController{
    public static function form(){
        include 'View/modules/Categoria_Nutriente/CadastrarCategoriaNutriente.php';
    }

    public static function index(){
        $arr_alimentos = self::listar();

        include 'View/modules/Nutriente/ListarNutriente.php';
    }

    public static function save(){
        include 'Model/CategoriaNutrienteModel.php';

        $model = new CategoriaNutrienteModel;

        $model->descricao = $_POST['descricao'];        

        $model->save();

        header("Location: /categoria_nutriente");
    }

    public static function listar(){
        include 'Model/CategoriaNutrienteModel.php';

        $model = new CategoriaNutrienteModel();

        $arr_categoria_nutrientes = $model->getAll();

        return $arr_categoria_nutrientes;
    }
}