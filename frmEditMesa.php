<?php 

    include 'menu.php'; 
    
    $numMesa = $_GET['num_mesa']; 
    
    include 'db-conn.php';
    
    $sql = "select * from mesa where num_mesa=$numMesa;";

    $res = mysqli_query($conn,$sql);

    $results = $res->fetch_array(MYSQLI_ASSOC);
   
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
    
    <title>Editar Dados da Mesa</title>
</head>
<body>
    <div class= "container brown lighten-1  black-text col s12">
        <div class = "brown lighten-1 col s12">
            <h1>Editar Mesa</h1>
        </div>
        <div class="row">
            <form action="editMesa.php" method="post" id="frmEditMesa"  class="col s12">
                <div class="input-field col s8">
                    <label for="lblNumMesa" class="black-text">Número da Mesa: </label> 
                    <input placeholder="" id="txt_numMesa" name="numMesa" value="<?php echo $results['num_mesa']?>" type="number">
                </div>
                <div class="input-field col s8">
                    <label for="lblNome" class="black-text">Nome: </label> 
                    <input placeholder="" id="txt_nome" name="nome" value="<?php echo $results['nome']?>" type="text">
                </div>
                <div class="input-field col s8">
                    <label for="lblQtdLugar" class="black-text">Quantidade de Lugares: </label> 
                    <input placeholder="" id="txt_qtdLugar" name="qtdLugar" value="<?php echo $results['qtd_lugar']?>" type="number">
                </div>
                <div class="input-field col s8">
                    <label for="lblTelefone" class="black-text">Telefone: </label> 
                    <input placeholder="" id="txt_telefone" name="telefone" value="<?php echo $results['telefone']?>" type="text">
                </div> 
                <div class="col s8">
                        <label for="lblData" class="black-text">Data e Horário: </label>
                         <input placeholder="" id="txt_dataHorario" name="dataHorario" type="datetime-local">
                        </div>
                <div class = "input-field col s8">
                    <br>
                    <button class="btn waves-effect waves-light green" type="submit" >Salvar
                        <i class="material-icons right">save</i>
                    </button>
                    
                    <button class="btn waves-effect waves-light  indigo darken-4" 
                    type="button" id="btnVoltar" onclick="JavaScript:location.href='listarMesa.php'">
                    Voltar <i class="material-icons right">arrow_back</i> 
                    </button>
                    
                </div>

            </form>
        </div>
    </div> 
</body>
</html>