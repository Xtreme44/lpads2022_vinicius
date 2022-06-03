<?php

    $id = $_GET['id'];

    include 'conexao.php';

    $sql = "select * from imovel where id=?;";
    $pdo = Conexao::conectar();
    $query = $pdo->prepare($sql);
    $query->execute (array($id));
    $dados = $query->fetch(PDO::FETCH_ASSOC);

    Conexao::desconectar();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    <title>Remover Imóvel</title>
</head>
<body>
    <div class= "container black-text col s12">

        <div class = "col s12">
            <h1>Remover Imóveis</h1>
        </div>
        <div class="card">
        <div class="row lighten-4">
            <form action="remImovel.php" method="post" id="frmInsImvo" class="col s12">
                <div class="input-field col s8">
                    <div class="row">
                        <label for="lblId" class="black-text"><h5>ID: <?php echo $dados['id'] ?></h5></label>
                        <input id="id" name="id" value="<?php echo $dados['id']?>" type="hidden"> 
                    </div>
                    <div class="row">
                            <label for="lblRua" class="black-text"><h5>Rua: <?php echo $dados['rua'];?></h5></label>
                    </div>
                    <div class="row">
                            <label for="lblBairro" class="black-text"><h5>Bairro: <?php echo $dados['bairro'];?></h5></label>
                    </div>
                    <div class="row">
                            <label for="lblCidade" class="black-text"><h5>Cidade: <?php echo $dados['cidade'];?></h5></label>
                    </div>
                    <div class="row">
                            <label for="lblStatus" class="black-text"><h5>Status: <?php echo $dados['status'];?></h5></label>
                    </div>
                    <div class="row">
                    <a class="waves-effect waves-light btn red" type="submit" onclick="JavaScript:location.href='remImovel.php?id='+
                    <?php echo $dados['id'];?> ">
                    <i class="material-icons right">delete</i>Remover</a>
                    <a class="waves-effect waves-light btn red" onclick="JavaScript:location.href='lstImovel.php'">
                    <i class="material-icons right">arrow_back</i>Voltar</a>
                </div>
                    
        </div>
    </div>
    </div>        
</div>
</body>
</html>

