<?php 

    include 'menu.php'; 
    
    $id = $_GET['id']; 

    include 'db-conn.php';

    $sql = "select * from usuario where usuario_id=$id;";

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
    
    <title>Editar Dados do Usuário</title>
</head>
<body>
    <div class= "container brown lighten-1  black-text col s12">
        <div class = "brown lighten-1 col s12">
            <h1>Editar Usuário</h1>
        </div>
        <div class="row">
            <form action="editUser.php" method="post" id="frmEditUser"  class="col s12">
                <div class="input-field col s8">
                    <label for="lblid" class="black-text" >ID: <?php echo $results['usuario_id'];?></label>
                    <br/>
                    <input type="hidden" name="id" id="id" value="<?php echo $id;?>">
                </div>
            
                <div class="input-field col s8">
                    <label for="lblUsuario" class="black-text">Usuario: </label> 
                    <input placeholder="" id="txt_usuario" name="usuario" value="<?php echo $results['usuario']?>" type="text">
                </div>
                <div class="input-field col s8">
                    <label for="lblNome" class="black-text">Nome: </label> 
                    <input placeholder="" id="txt_nome" name="nome" value="<?php echo $results['nome']?>" type="text">
                </div>
                <div class="input-field col s8">
                    <label for="lblSenha" class="black-text">Senha: </label> 
                    <input placeholder="" id="txt_senha" name="senha" value="<?php echo $results['senha']?>" type="password">
                </div> 
                <div class = "input-field col s8">
                    <br>
                    <button class="btn waves-effect waves-light green" type="submit" >Salvar
                        <i class="material-icons right">save</i>
                    </button>
                    
                    <button class="btn waves-effect waves-light  indigo darken-4" 
                    type="button" id="btnVoltar" onclick="JavaScript:location.href='listarUser.php'">
                    Voltar <i class="material-icons right">arrow_back</i> 
                    </button>
                    
                </div>

            </form>
        </div>
    </div> 
</body>
</html>