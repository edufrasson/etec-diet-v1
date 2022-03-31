<?php

class RefeicaoAlimentoAssocController{
    public static function form(){
        include 'Model/RefeicaoAlimentoAssocModel.php';
        $model = new RefeicaoAlimentoAssocModel();
        $model->lista_refeicoes = $model->getAllRefeicoes();
        $model->lista_alimentos = $model->getAllAlimentos();

        include 'View/modules/CadastrarRefeicaoAlimentoAssoc.php';
    }

    public static function save(){
        include 'Model/RefeicaoAlimentoAssocModel.php';

        $model = new RefeicaoAlimentoAssocModel();

        $model->id_refeicao = $_POST['id_refeicao'];
        $model->id_alimento = $_POST['id_alimento'];
        $model->quantidade = $_POST['quantidade'];

        $model->save();
    }
}