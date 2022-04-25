<?php

class RefeicaoAlimentoAssocController{
    public static function form(){
                $model = new RefeicaoAlimentoAssocModel();
        $model->lista_refeicoes = $model->getAllRefeicoes();
        $model->lista_alimentos = $model->getAllAlimentos();

        include 'View/modules/Refeicao_Alimento_Assoc/CadastrarRefeicaoAlimentoAssoc.php';
    }

    public static function index(){
        $arr_assoc = self::listar();

        include 'View/modules/Refeicao_Alimento_Assoc/ListarRefeicaoAlimentoAssoc.php';
    }

    public static function save(){
        
        $model = new RefeicaoAlimentoAssocModel();

        $model->id_refeicao = $_POST['id_refeicao'];
        $model->id_alimento = $_POST['id_alimento'];
        $model->quantidade = $_POST['quantidade'];

        $model->save();
    }

    public static function listar(){
        
        $model = new RefeicaoAlimentoAssocModel();

        $arr_assoc = $model->getAll();

        return $arr_assoc;
    }
}