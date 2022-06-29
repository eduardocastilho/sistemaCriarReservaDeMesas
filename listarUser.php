<?php
   include 'menu.php'; 
   include 'db-conn.php';
   $sql = "select * from usuario order by usuario_id;";
   $pdo = $conn; 
   $listarUser = $pdo->query($sql); 
    if(isset($_GET['msg'])){
    $msgm = trim($_GET['msg']);
   }
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

    <title>Usuários</title>
</head>

<body>
    <div class="container amber lighten-5">
    <?php
    if (isset($msgm)) {
        echo $msgm;
    }
    ?>
        <div class="card-panel brown darken-4">
            <H1>Usuários</H1>
        </div>

        <div class="col s10">
            <table class="striped  brown lighten-1">
                <tr>
                    <th>ID</th>
                    <th>USUARIO</th>
                    <th>NOME</th>
                    <th>SENHA</th>
                    <th class="center">Funções</th>
                    <th>
                        <a class="btn-floating btn-small waves-effect waves-light green"
                            onclick="JavaScript:location.href='frmInsUser.php'">
                            <i class="material-icons">add</i>
                        </a>
                    </th>
                </tr>
                <?php 
           foreach($listarUser as $user) {
        ?>
                <tr>
                    <td><?php echo $user['usuario_id']?> </td>
                    <td><?php echo $user['usuario']?> </td>
                    <td><?php echo $user['nome']?> </td>
                    <td><?php echo $user['senha']?> </td>
                    <td class="center">
                        <a class="btn-floating btn-small waves-effect waves-light orange" onclick="JavaScript:location.href='frmEditUser.php?id=' + 
                           <?php echo $user['usuario_id'];?>">
                            <i class="material-icons">edit</i>
                        </a>
                        <a class="btn-floating btn-small waves-effect waves-light red"
                            onclick="JavaScript:remover(<?php echo $user['usuario_id'];?>)">
                            <i class="material-icons">delete</i>
                        </a>
                        <a class="btn-floating btn-small waves-effect waves-light  light-blue darken-3" onclick="JavaScript:location.href='frmInfoUser.php?id=' + 
                           <?php echo $user['usuario_id'];?>">
                            <i class="material-icons">info</i>
                        </a>
                    </td>
                    <td></td>
                </tr>
                <?php } ?>
            </table>
        </div>
        <br>
        <br>
    </div>

</body>

</html>

<script>
function remover(usuario_id) {
    if (confirm('Excluir o Usuário ' + usuario_id + '?')) {
        location.href = 'remUser.php?usuario_id=' + usuario_id;
    }
}
</script>