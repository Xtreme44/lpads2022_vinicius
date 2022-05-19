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
            
    <title>Inserir Dados de Imóvel</title>
</head>
<body>
    <div class = "container s12" style="background-color:#e3f2fd;">
        <div style="background-color:#bbdefb">
            <h1 align="center">Cadastro de Imovéis</h1>
            <h1></h1>
        
        </div>
        <div class="row">
            <form action="insImovel.php" method="post"id="frmInsImv" name="frmInsImv" style="color:blue;background-color:light red;font-size:18pt" class = "col s12 striped">
                <div class="input-field col s8">
                    <label for="lblRua" style="text-size">Informe a rua</label>
                    <input placeholder="" id="txt_rua" type="text" class="validate">
                </div>
                <div class="input-field col s8">
                    <label for="lblBairro" style="text-size">Informe o bairro</label>
                    <input placeholder="" id="txt_rua" type="text" class="validate">
                </div>
                <div class="input-field col s8">
                    <label for="lblRua" style="text-size">Informe a cidade</label>
                    <input placeholder="" id="txt_rua" type="text" class="validate">
                </div>
                <div class="input-field col s8">
                    <label for="lblRua" style="text-size">Informe o status</label>
                    <input placeholder="" id="txt_rua" type="text" class="validate">
                </div>
                <br>
                <div>  <button class="btn waves-effect waves-light" type="submit" name="action">Submit
    <i class="material-icons right">send</i>
  </button></div>
            </form>
    </div>
    </div>
</body>
</html>