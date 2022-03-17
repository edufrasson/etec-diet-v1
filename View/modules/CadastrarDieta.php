<?php 

    include 'DAO/PacienteDAO.php';

    $pacientes = new PacienteDAO();

    $lista_pacientes = $pacientes->getAllRows();
    $total_pacientes = count($lista_pacientes);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Dietas</title>
    <link rel="stylesheet" 
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" 
      crossorigin="anonymous">
    <style>
        label, input { display: block;}
        body{background-color: #ECB390;}
        form{background-color: white;}
    </style>
    
</head>
<body>
    <header>
        <?php include 'includes/cabecalho_cadastro.php'?>
    </header>
    <br>
    <div class="container">
    <form class="border p-5" action="dieta/save" method="post">
        <fieldset >
            <legend>Cadastro de Dietas</legend>
            <div class="form-group">
                <label for="descricao">Descrição:</label>
                <input class="form-control" id="descricao" name="descricao" type="text" />                
                <br>
                
                <label for="data_inicio">Data de inicio:</label>
                <input class="form-control" id="data_inicio" name="data_inicio" type="date" />                
                <br>

                <label for="data_fim">Data de fim:</label>
                <input class="form-control" id="data_fim" name="data_fim" type="date" />                
                <br>
                <label for="id_paciente">Paciente: </label>
                <select name="id_paciente" id="id_paciente" class="form-select form-select-sm" aria-label=".form-select-sm example">
                    
                    <?php for($i=0; $i<$total_pacientes; $i++):?>
                        <option value="<?= $lista_pacientes[$i]->id?>"><?=$lista_pacientes[$i]->nome?></option>
                    <?php endfor?>
                    
                </select>
                <br>  <br>       

                <button type="submit" class="btn btn-primary mb-3">Cadastrar Dieta</button>
            </div>
        </fieldset>            
    </form>
    </div>
  
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>