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

    <title>Informações do Usuário</title>
</head>

<body>
    <div class="container brown lighten-1 col s12">
        <div class="brown lighten-1 col s12">
            <h1>Informações do Usuário</h1>
        </div>
        <div class="container">
                <div class="row">
                    <div class="input-field col s12">
                        <label for="lblid">
                            <h5 style="color: #ffecb3;"><b>Id: </b><?php echo $results['usuario_id'];?></h5>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <label for="lblUsuario">
                            <h5 style="color: #ffecb3;"><b>Usuario: </b><?php echo $results['usuario'];?></h5>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <label for="lblNome">
                            <h5 style="color: #ffecb3;"><b>Nome: </b><?php echo $results['nome'];?></h5>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <label for="lblSenha">
                            <h5 style="color: #ffecb3;"><b>Senha: </b><?php echo $results['senha'];?></h5>
                        </label>
                    </div>
                </div>
                <br />
                <br />

                <button class="btn waves-effect waves-light  indigo darken-4" 
                    type="button" id="btnVoltar" onclick="JavaScript:location.href='listarUser.php'">
                    Voltar <i class="material-icons right">arrow_back</i> 
                    </button>
            
        </div>
    </div>
</body>

</html>