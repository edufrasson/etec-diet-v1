<?php

class CategoriaAlimentoController{
    public static function form(){
        include 'View/modules/CadastrarCategoriaAlimento.php';
    }

    public static function save(){
        include 'Model/CategoriaAlimentoModel.php';

        $model = new CategoriaAlimentoModel;

        $model->descricao = $_POST['descricao'];        

        $model->save();

        header("Location: /categoria_alimento");
    }
}