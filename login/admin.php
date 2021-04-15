

<?php
 
	session_start();
	if($_SESSION["logueado"] == TRUE) {
		?>
 
		<!DOCTYPE html>
		<html lang="en">
		<head>
			<meta charset="UTF-8">
			<title>Panel de administracion</title>
			<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
            <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
       		 <meta name="description" content="ADMIN" />
       		 <meta name="keywords" content="menu, navigation, animation, transition, transform, rotate, css3, web design, component, icon, slide" />
       		 <meta name="author" content="Codrops" />
      		  <link rel="shortcut icon" href="../favicon.ico"> 
      		  <link rel="stylesheet" type="text/css" href="css/demo.css" />
       		 <link rel="stylesheet" type="text/css" href="css/style8.css" />
       		 <link href='http://fonts.googleapis.com/css?family=Terminal+Dosis' rel='stylesheet' type='text/css' />
			</head>
		<body>

			
			<br><p><a href="admin.php"><img src="../img/logo-admin.png" alt="logo" id="logo"></a></p><br>
			
			

			<div class="container">
            <div class="header">
                <a href="admin.php"><strong>Home </strong></a>
                <span class="right">
                	
					<a href="salir.php">Salir</a>
                    
                </span>
                <div class="clr"></div>
            </div>
            <h1>Panel de administracion <span>Software de administracion de datos </span></h1>
            <div class="content">
                
                <ul class="ca-menu">
                    <li>
                        <a href="../tablas/ventas">
                            <span class="ca-icon"><img src="../img/cash.png"></span>
                            <div class="ca-content">
                                <h2 class="ca-main">Ventas</h2>
                                <h3 class="ca-sub">Agregar, modificar y eliminar</h3>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="../tablas/gastos">
                            <span class="ca-icon"><img src="../img/wallet.png"></span>
                            <div class="ca-content">
                                <h2 class="ca-main">Gastos</h2>
                                <h3 class="ca-sub">Ver gastos realizados</h3>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="../tablas/empleados">
                            <span class="ca-icon" id="heart"><img src="../img/group.png"></span>
                            <div class="ca-content">
                                <h2 class="ca-main">Empleados</h2>
                                <h3 class="ca-sub">Lista de empleados</h3>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="../tablas/stock">
                            <span class="ca-icon"><img src="../img/list.png"></span>
                            <div class="ca-content">
                                <h2 class="ca-main">Stock</h2>
                                <h3 class="ca-sub">Huertas y frutas disponibles</h3>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="../tablas/compradores">
                            <span class="ca-icon"><img src="../img/buy.png"></span>
                            <div class="ca-content">
                                <h2 class="ca-main">Compradores</h2>
                                <h3 class="ca-sub">Lista de compradores</h3>
                            </div>
                        </a>
                    </li>
                </ul>
            </div><!-- content -->
        </div>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
		</body>
        <style type="text/css">
            footer{
    
    padding-top: 380px;
}
#pie {
    height:80px;
    text-align: center;
    background-color: black;
}
#pie h3{
    padding-top: 30px;
    color:#2c881d;
}

        </style>
        <footer>
  <div id="pie">
    <h3>&#169; FruitSoft 2018 | Diseñado y desarrollado por Misael Gomez y Diego Hernandez</h3>
  </div>
</footer>
		</html>
 
 
		<?php
	} else {
		header("Location: index.php");
	}
 
 ?>

