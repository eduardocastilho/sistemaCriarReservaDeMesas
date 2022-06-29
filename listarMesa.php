<?php
   include 'menu.php'; 
   include 'db-conn.php';
   $sql = "select * from mesa order by num_mesa;";
   $pdo = $conn; 
   $listarMesa = $pdo->query($sql); 
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

    <title>Mesas</title>
</head>

<body>
    <div class="container amber lighten-5">
    <?php
    if (isset($msgm)) {
        echo $msgm;
    }
    ?>
        <div class="card-panel brown darken-4">
            <H1>Mesas</H1>
        </div>

        <div class="col s10">
            <table class="striped  brown lighten-1">
                <tr>
                    <th>NÚMERO</th>
                    <th>NOME</th>
                    <th>QUANTIDADE LUGAR</th>
                    <th>TELEFONE</th>
                    <th>DATA/HORÁRIO</th>
                    <th class="center">Funções</th>
                    <th>
                        <a class="btn-floating btn-small waves-effect waves-light green"
                            onclick="JavaScript:location.href='frmInsMesa.php'">
                            <i class="material-icons">add</i>
                        </a>
                    </th>
                </tr>
                <?php 
           foreach($listarMesa as $mesa) {
        ?>
                <tr>
                    <td><?php echo $mesa['num_mesa']?> </td>
                    <td><?php echo $mesa['nome']?> </td>
                    <td><?php echo $mesa['qtd_lugar']?> </td>
                    <td><?php echo $mesa['telefone']?> </td>
                    <td><?php echo $mesa['data_horario']?> </td>
                    <td class="center">
                        <a class="btn-floating btn-small waves-effect waves-light orange" onclick="JavaScript:location.href='frmEditMesa.php?num_mesa=' + 
                           <?php echo $mesa['num_mesa'];?>">
                            <i class="material-icons">edit</i>
                        </a>
                        <a class="btn-floating btn-small waves-effect waves-light red"
                            onclick="JavaScript:remover(<?php echo $mesa['num_mesa'];?>)">
                            <i class="material-icons">delete</i>
                        </a>
                        <a class="btn-floating btn-small waves-effect waves-light  light-blue darken-3" onclick="JavaScript:location.href='frmInfoMesa.php?num_mesa=' + 
                           <?php echo $mesa['num_mesa'];?>">
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
function remover(num_mesa) {
    if (confirm('Excluir a Mesa ' + num_mesa + '?')) {
        location.href = 'remMesa.php?num_mesa=' + num_mesa;
    }
}
</script>