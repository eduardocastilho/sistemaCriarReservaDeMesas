<?php
    include 'db-conn.php';
  
    $numMesa = trim($_POST['num_mesa']); 
    $nome = trim($_POST['nome']); 
    $qtdLugar = trim($_POST['qtd_lugar']);
    $telefone = trim($_POST['telefone']);
    $dataHorario = trim($_POST['data_horario']);

    if (!empty($numMesa) && !empty($nome) && !empty($qtdLugar) && !empty($telefone) && !empty($dataHorario)){
        $sql = "INSERT INTO mesa(num_mesa, nome, qtd_lugar, telefone, data_horario) VALUES ('$numMesa', '$nome', '$qtdLugar', '$telefone', '$dataHorario')
        on duplicate key update num_mesa='$numMesa',nome='$nome',qtd_lugar='$qtdLugar',telefone='$telefone',data_horario='$dataHorario'";

        if(mysqli_query($conn, $sql)){
            $msg = "Mesa inserida com sucesso!";
        }
        else $msg ="Erro ao criar reserva da mesa ". $numMesa;
    }

    header("location:listarMesa.php?msg=".$msg); 

?>