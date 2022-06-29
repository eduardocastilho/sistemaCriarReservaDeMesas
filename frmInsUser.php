<?php 
   include 'menu.php'; 
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

    <title>Inserir Dados de Usuário</title>
</head>

<body>
    <div class="container brown lighten-1 s12">

        <div class="col s12">
            <h1>Cadastro de Usuários</h1>

            <div class="row">
                <form action="insUser.php" method="post" id="frmInsUser" class="col s12">
                    <div class="col s11">
                        <div class="input-field col s8">
                            <label for="lblUsuario" class="black-text">Informe o Usuario: </label>
                            <input placeholder="" id="txt_usuario" name="usuario" type="text">
                        </div>
                        <div class="input-field col s8">
                            <label for="lblNome" class="black-text">Informe o Nome: </label>
                            <input placeholder="" id="txt_nome" name="nome" type="text">
                        </div>
                        <div class="input-field col s8">
                            <label for="lblSenha" class="black-text">Informe a Senha: </label>
                            <input placeholder="" id="txt_senha" name="senha" type="password">
                        </div>
                        <div class="input-field col s8">
                            <br>
                            <button class="btn waves-effect waves-light green" type="submit">Salvar
                                <i class="material-icons right">save</i>
                            </button>

                            <button class="btn waves-effect waves-light  indigo darken-4" type="button" id="btnVoltar"
                                onclick="JavaScript:location.href='listarUser.php'">
                                Voltar <i class="material-icons right">arrow_back</i>
                            </button>

                        </div>
                    </div>
                </form>

            </div>
        </div>
</body>

</html>