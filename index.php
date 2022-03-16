<?php

include 'Controller/AlimentoController.php';
include 'Controller/CategoriaAlimentoController.php';
include 'Controller/CategoriaNutrienteController.php';
include 'Controller/PacienteController.php';
include 'Controller/DietaController.php';

$uri_parse = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

switch($uri_parse){   
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
     
    default:
        include 'View/home.php';
    break;
}