<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Refeições e Alimentos</title>
    <?php include 'View/includes/css_config.php' ?>
    <style>
        main{
            padding: 5px;
        }
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
                        <th scope="col">Refeicao</th>
                        <th scope="col">Alimento< /th>
                        <th scope="col">Quantidade (g)</th>                        
                    </tr>
                </thead>
                <tbody>
                <?php foreach($arr_assoc as $assoc): ?>
                    <tr>                        
                        <td><?=$assoc->refeicao?></td>                        
                        <td><?=$assoc->alimento?></td>
                        <td><?=$assoc->quantidade?></td>                                               
                    </tr>  
                <?php endforeach?>                 
                </tbody>
            </table>
        </div>
    </main>
</body>
</html>