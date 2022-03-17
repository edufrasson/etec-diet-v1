<?php

class RefeicaoController{
    public static function form(){
        include 'View/modules/CadastrarRefeicao.php';
    }

    public static function save(){
        include 'Model/RefeicaoModel.php';

        $model->descricao = $_POST['descricao'];
        $model->horario = $_POST['horario'];
        $model->id_dieta = $_POST['id_dieta'];

        $model->save();
    }
}