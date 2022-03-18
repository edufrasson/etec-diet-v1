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
    <form class="border p-5" action="refeicao_alimento/save" method="post">
        <fieldset >
            <legend>Cadastro Refeição Alimento Assoc</legend>
            <div class="form-group">
                <label for="id_refeicao">Id da Refeição:</label>
                <input class="form-control" id="id_refeicao" name="id_refeicao" type="number" min="1" />
                <br>
                
                <label for="id_alimento">Id do Alimento:</label>
                <input class="form-control" id="id_alimento" name="id_alimento" type="number" min="1" />
                <br>
                
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