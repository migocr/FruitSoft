
<?php
 
if(isset($_GET["error"]) && $_GET["error"] != "login") {
		header("Location: index.php");
	}
 
 ?>
 
<!DOCTYPE html>
<html lang="es">
<head>
	<link rel="stylesheet" href="css/estilo.css" type="text/css" media="all" />
	<meta charset="UTF-8">
	<title>Iniciar Sesion</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
	<!-- Latest compiled and minified CSS -->
	
 
</head>
<body>
	<header>
		
	</header>

 <div class="login-page">
 	
	<div class="login">
		
		<a href="admin.php">
          <img src="../img/logo.png" alt="Logo">
		</a>
		<h3>Iniciar Sesion</h3>
		<?php
 
			if(isset($_GET["error"])) {
				echo "<p class='error'>Usuario y / o Contrasea erroneos. Intentelo de nuevo.</p>";
			}
 
		 ?>
		<form action="login.php" method="post">
			<div class="form-group">
				<input type="text" class="form-control" name="user" placeholder="Usuario">
			</div>
			<div class="form-group">
				<input type="password" class="form-control" name="pw" placeholder="Password">
			</div>
			<button type="submit" name="enviar" class="btn btn-default">Entrar</button>
		</form>
	</div>
 </div>
 
<script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>
 

 

 

 

