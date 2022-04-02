<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <?php include 'View/includes/cabecalho_view.php'?>
    </header>
    <main>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Porção</th>
                    <th scope="col">Caloria (kcal)</th>
                </tr>
            </thead>
            <tbody>
             <?php foreach($arr_alimentos as $alimento): ?>
                <tr>
                    <th scope="row"><?=$alimento->id?></th>
                    <td><?=$alimento->nome?></td>
                    <td><?=$alimento->porcao?>/td>
                    <td><?=$alimento->caloria?></td>
                </tr>  
             <?php endforeach?>                 
            </tbody>
        </table>
    </main>
</body>
</html>