<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Dietas</title>
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
                        <th scope="col">Data de Inicio</th>
                        <th scope="col">Data de Fim</th>
                        <th scope="col">Nome do Paciente</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($arr_dietas as $dieta): ?>
                    <tr>
                        <th scope="row"><?=$dieta->id?></th>
                        <td><?=$dieta->descricao?></td>
                        <td><?=$dieta->data_inicio?></td>
                        <td><?=$dieta->data_fim?></td>
                        <td><?=$dieta->nome_paciente?></td>
                    </tr>  
                <?php endforeach?>                 
                </tbody>
            </table>
        </div>
    </main>
</body>
</html>