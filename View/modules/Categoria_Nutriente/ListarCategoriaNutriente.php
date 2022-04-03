<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Categoria de nutrientes</title>
    <?php include 'View/includes/css_config.php' ?>
    <style>
        main{
            padding: 5px;
        }
        body{background-color: #FFF1BD;}
        .container{background-color: white;}
    </style>
</head>
<body>
    <header>
        <?php include 'View/includes/cabecalho_view.php'?>
    </header>
    <main>
        <div class="container">       
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Descrição</th>                        
                    </tr>
                </thead>
                <tbody>
                <?php foreach($arr_categoria_nutrientes as $categoria_nutriente): ?>
                    <tr>
                        <th scope="row"><?=$categoria_nutriente->id?></th>
                        <td><?=$categoria_nutriente->descricao?></td>                        
                    </tr>  
                <?php endforeach?>                 
                </tbody>
            </table>
        </div>
    </main>
</body>
</html>