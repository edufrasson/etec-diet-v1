<?php

include 'Controller/AlimentoController.php';
include 'Controller/CategoriaAlimentoController.php';

$uri_parse = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

switch($uri_parse){
    case '/categoria_alimento':
        CategoriaAlimentoController::form();
    break;
    
    case '/categoria_alimento/save':
        CategoriaAlimentoController::save();
    break;  

    case '/alimento':
        AlimentoController::form();
    break;  
     
}