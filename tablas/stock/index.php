

<?php
 
	session_start();
	if($_SESSION["logueado"] == TRUE) {
		?>
 
		<!DOCTYPE html>
		<html lang="en">
		<head>
			<meta charset="UTF-8">
			<title>Stock</title>
			<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
            <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
       		 <meta name="description" content="ADMIN" />
       		 <meta name="keywords" content="menu, navigation, animation, transition, transform, rotate, css3, web design, component, icon, slide" />
       		 <meta name="author" content="Codrops" />
      		  <link rel="shortcut icon" href="../favicon.ico"> 
      		  <link rel="stylesheet" type="text/css" href="css/demo.css" />
       		 <link rel="stylesheet" type="text/css" href="../../login/css/style3.css" />
       		 <link href='http://fonts.googleapis.com/css?family=Terminal+Dosis' rel='stylesheet' type='text/css' />
			</head>
		<body>

			
			<br><p><a href="../../login/admin.php"><img src="../../img/logo-admin.png" alt="logo" id="logo"></a></p><br>
			
			

			<div class="container">
            <div class="header">
                <a href="../../login/admin.php"><strong>Home </strong></a>
                <span class="right">
                	
					<a href="../../login/salir.php">Salir</a>
                    
                </span>
                <div class="clr"></div>
            </div>
            <h1>Stock <span>Software de administracion de datos </span></h1>
            <div class="content" style="text-align: center;">
                <br>
                <ul class="ca-menu">
                    <li>
                        <a href="frutas">
                            <span class="ca-icon"><img src="../../img/lemon.png"></span>
                            <div class="ca-content">
                                <h2 class="ca-main">Frutas</h2>
                                <h3 class="ca-sub">Ver frutas disponibles</h3>
                            </div>
                        </a>
                    </li><br>
                    <li>
                        <a href="huertas">
                            <span class="ca-icon"><img src="../../img/trees.png"></span>
                            <div class="ca-content">
                                <h2 class="ca-main">Huertas</h2>
                                <h3 class="ca-sub">Ver huertas disponibles</h3>
                            </div>
                        </a>
                    </li><br>
                    <li>
                        <a href="reportes">
                            <span class="ca-icon"><img src="../../img/report.png"></span>
                            <div class="ca-content">
                                <h2 class="ca-main">Reportes</h2>
                                <h3 class="ca-sub">Ver reportes</h3>
                            </div>
                        </a>
                    </li>
                   
                    
                </ul>
                <br>
            </div><!-- content -->
        </div>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
		</body>
        <style type="text/css">
            footer{
    
    
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

