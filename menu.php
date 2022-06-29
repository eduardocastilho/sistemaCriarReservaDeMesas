<?php
  session_start(); 
   if (!isset($_SESSION['usuario']))
       Header("Location: index.php");   
?> 

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <title>Sistema Reserva de Mesas</title>
</head>

<body>
    <nav>
        <div class="nav-wrapper brown darken-4">
            <ul id="nav-mobile" class="left hide-on-med-and-down">
            <?php 
                if(($_SESSION['usuario'] == 'admin')){
                echo "<li><a href=listarUser.php>Usuários</a></li>";
            }
            ?>
                <li><a href="listarMesa.php">Mesas</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>

        </div>
    </nav>

</body>

</html>

<script type="text/javascript">
document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems, options);
});

// Initialize collapsible (uncomment the lines below if you use the dropdown variation)
// var collapsibleElem = document.querySelector('.collapsible');
// var collapsibleInstance = M.Collapsible.init(collapsibleElem, options);

// Or with jQuery

$(document).ready(function() {
    $('.sidenav').sidenav();
});
</script>