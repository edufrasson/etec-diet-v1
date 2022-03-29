<?php

// Include

/**
 * Serve para transitar entre as camadas, você só conseguirá utilizar
 * um método de uma camada se você inclui-la no seu arquivo
 */
include 'Controller/AlimentoController.php';
include 'Controller/CategoriaAlimentoController.php';
include 'Controller/CategoriaNutrienteController.php';
include 'Controller/PacienteController.php';
include 'Controller/DietaController.php';
include 'Controller/NutrienteController.php';
include 'Controller/RefeicaoController.php';
include 'Controller/RefeicaoAlimentoAssocController.php';


$uri_parse = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

// parse_url

/**
 * Função que recebe um parâmetro da uri (endereço completo) 
 * e o componente que você deseja, no caso, o PATH (caminho):
 * exemplo(arquivo.php, /rota)
 */

switch($uri_parse){   

    // Operador de Resolução de Escopo (::)
    /**
     * Acessa um método de uma classe
     */

    case '/categoria_alimento':
        CategoriaAlimentoController::form();
    break;
    
    case '/categoria_alimento/save':
        CategoriaAlimentoController::save();
    break;
    
    case '/categoria_nutriente':
        CategoriaNutrienteController::form();
    break;
    
    case '/categoria_nutriente/save':
        CategoriaNutrienteController::save();
    break;  
    
    case '/paciente':
        PacienteController::form();
    break;
    
    case '/paciente/save':
        PacienteController::save();
    break;
    
    case '/dieta':
        DietaController::form();
    break;
    
    case '/dieta/save':
        DietaController::save();
    break;
    
    case '/alimento':
        AlimentoController::form();
    break; 

    case '/alimento/save':
        AlimentoController::save();
    break;
    
    case '/nutriente':
        NutrienteController::form();
    break; 

    case '/nutriente/save':
        NutrienteController::save();
    break;
    
    case '/refeicao':
        RefeicaoController::form();
    break; 

    case '/refeicao/save':
        RefeicaoController::save();
    break;
    
    case '/refeicao_alimento':
        RefeicaoAlimentoAssocController::form();
    break; 

    case '/refeicao_alimento/save':
        RefeicaoAlimentoAssocController::save();
    break; 
    
    case '/cadastros':
        include 'View/cadastros.php';
    break;   
     
    default:
        include 'View/home.php';
    break;
}

// --   MVC  --  

// PADRAO DE PROJETO

/**
 * Model
 * View
 * Controller
 */

// Pra que serve? 

/**
 * Separa o projeto em "camadas", de acordo com as funções, cada camada
 * faz uma função diferente;
 * 
 * Manutenção mais fácil, melhor compreensão do código;
 */