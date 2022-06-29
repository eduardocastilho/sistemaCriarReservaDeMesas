<!DOCTYPE html>
<html>
<head>
	<title>Controle de Mesa</title>
    <link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body style="background-color: #3e2723">

     <form action="login.php" method="post" >
		
     	<h2>ACESSO</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Usuário</label>
     	<input type="text" name="username" placeholder="Usuário"><br>

     	<label>Senha</label>
     	<input type="password" name="password" placeholder="Senha"><br>

     	<button type="submit">Login</button>
     </form>
</body>
</html>