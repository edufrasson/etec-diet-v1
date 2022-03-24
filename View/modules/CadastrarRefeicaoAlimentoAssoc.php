<?php 

    include 'DAO/RefeicaoDAO.php';
    include 'DAO/AlimentoDAO.php';

    $refeicao = new RefeicaoDAO();

    $lista_refeicao = $refeicao->getAllRows();
    $total_refeicao = count($lista_refeicao);

    $alimento = new AlimentoDAO();

    $lista_alimento = $alimento->getAllRows();
    $total_alimento = count($lista_alimento);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Refeição Alimento Assoc</title>
    <link rel="stylesheet" 
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" 
      crossorigin="anonymous">
      <style>
        label, input { display: block;}
        body{background-color: #FFF1BD;}
        form{background-color: white;}
      </style>
    
</head>
<body>
    <header>
        <?php include 'includes/cabecalho_cadastro.php'?>
    </header>
    <br>
    <div class="container">
    <form class="border p-5" action="refeicao_alimento/save" method="post">
        <fieldset >
            <legend>Cadastro Refeição Alimento Assoc</legend>
            <div class="form-group">
                <label for="id_refeicao">Refeicao:</label>
                <select name="id_refeicao" id="id_refeicao">                    
                    <?php for($i=0; $i < $total_refeicao; $i++): ?>
                        <option value="<?=$lista_refeicao[$i]->id?>">
                            <?=$lista_refeicao[$i]->descricao?>
                        </option>
                    <?php endfor ?>
                </select>
                <br>  
                <label for="id_alimento">Alimento:</label>              
                <select name="id_alimento" id="id_alimento">                    
                    <?php for($i=0; $i < $total_alimento; $i++): ?>
                        <option value="<?=$lista_alimento[$i]->id?>">
                            <?=$lista_alimento[$i]->nome?>
                        </option>
                    <?php endfor ?>
                </select>
                
                <label for="quantidade">Quantidade:</label>
                <input class="form-control" id="quantidade" name="quantidade" type="number" min="1" />
                <br>               
                   
                <button type="submit" class="btn btn-primary mb-3">Cadastrar Refeicao Alimento Assoc</button>
            </div>
        </fieldset>            
    </form>
    </div>
  
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>