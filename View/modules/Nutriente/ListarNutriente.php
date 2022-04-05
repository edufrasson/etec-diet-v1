<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="View/css/listas.css">
    <title>Lista de Nutrientes</title>
    <?php include 'View/includes/css_config.php' ?>    
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
                        <th scope="col">Alimento</th>
                        <th scope="col">Quantidade (g)</th>
                        <th scope="col">Nutriente</th>                        
                    </tr>
                </thead>
                <tbody>
                <?php foreach($arr_nutrientes as $nutriente): ?>
                    <tr>
                        <th scope="row"><?=$nutriente->id?></th>
                        <td><?=$nutriente->alimento?></td>                        
                        <td><?=$nutriente->quantidade?></td>
                        <td><?=$nutriente->descricao?></td>
                                               
                    </tr>  
                <?php endforeach?>                 
                </tbody>
            </table>
        </div>
    </main>
</body>
</html>