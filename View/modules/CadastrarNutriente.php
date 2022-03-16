<?php 

    include 'DAO/CategoriaNutrienteDAO.php';
    include 'DAO/AlimentoDAO.php';

    $categoria_nutriente = new CategoriaNutrienteDAO();

    $lista_categoria_nutriente = $categoria_nutriente->getAllRows();
    $total_categoria_nutriente = count($lista_categoria_nutriente);

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
    <title>Cadastro de Nutrientes</title>
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
        <?php include 'includes/cabecalho.php'?>
    </header>
    <br>
    <div class="container">
    <form class="border p-5" action="nutriente/save" method="post">
        <fieldset >
            <legend>Cadastro Nutrientes</legend>
            <div class="form-group">
                <label for="descricao">Descrição:</label>
                <input class="form-control" id="descricao" name="descricao" type="text" />
                <br>
                
                <label for="quantidade">Quantidade:</label>
                <input class="form-control" id="quantidade" name="quantidade" type="number" step="10" />
                <br>
                
                <label for="id_categoria_nutriente">Categoria do Nutriente: </label>
                <select name="id_categoria_nutriente" id="id_categoria_nutriente">
                    <?php for($i=0; $i < $total_categoria_nutriente; $i++): ?>
                        <option value="<?=$lista_categoria_nutriente[$i]->id?>">
                            <?=$lista_categoria_nutriente[$i]->descricao?>
                        </option>
                    <?php endfor ?>
                </select>
                <br><br>

                <label for="id_alimento">Categoria do Nutriente: </label>
                <select name="id_alimento" id="id_alimento">
                    <?php for($i=0; $i < $total_alimento; $i++): ?>
                        <option value="<?=$lista_alimento[$i]->id?>">
                            <?=$lista_alimento[$i]->nome?>
                        </option>
                    <?php endfor ?>
                </select>
                <br><br>

                
                <button type="submit" class="btn btn-primary mb-3">Cadastrar Nutriente</button>
            </div>
        </fieldset>            
    </form>
    </div>
  
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>