<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Lista de compradores</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<meta name="keywords" content="menu, navigation, animation, transition, transform, rotate, css3, web design, component, icon, slide" />
<link rel="stylesheet" type="text/css" href="../../login/css/demo.css" />

<link href='http://fonts.googleapis.com/css?family=Terminal+Dosis' rel='stylesheet' type='text/css' />
<style type="text/css">
@import url("css/mycss.css");
</style>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
<div class="todo">
  
  <br><p><a href="../../login/admin.php"><img src="../../img/logo-admin.png" alt="logo" id="logo"></a></p><br>
      
      

      <div class="container">
            <div class="header">
                <a href="../../login/admin.php"><strong>Home </strong></a>
                <span class="right">
                  
          <a href="../../login/salir.php">Salir</a>
                    
                </span>
                <div class="clr"></div>
            </div>
            <h1>Lista de compradores <span>Tabla compradores </span></h1>
            <div class="content">
                <div id="contenido">
                  <br>
    <table id="tabla"style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
      <thead>
        <th>ID</th>
        <th>Nombre</th>
        <th>Direccion</th>
        <th>Telefono</th>
        <th> <a href="agregar/"> <button type="button" class="btn btn-info">Nuevo</button> </a> </th>
      </thead>

      <?php
        include "conexion.php";
        $sentecia="SELECT * FROM compradores";
        $resultado= $conexion->query($sentecia) or die (mysqli_error($conexion));
        while($fila=$resultado->fetch_assoc())
        {
          echo "<tr>";
            echo "<td>"; echo $fila['comprador_id']; echo "</td>";
            echo "<td>"; echo $fila['nombre']; echo "</td>";
            echo "<td>"; echo $fila['direccion']; echo "</td>";
            echo "<td>"; echo $fila['telefono']; echo "</td>";
            echo "<td><a href='modif_prod1.php?comprador_id=".$fila['comprador_id']."'> <button type='button' class='btn btn-success'>Modificar</button> </a></td>";
            echo " <td><a href='eliminar_prod.php?comprador_id=".$fila['comprador_id']."'> <button type='button' class='btn btn-danger'>Eliminar</button> </a></td>";
          echo "</tr>";
        }
      ?>

     
      
    </table>
  </div>
               
        </div>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
  
  
  
	

</body>
<footer>
  <div id="pie">
    <h3>&#169; FruitSoft 2018 | Diseñado y desarrollado por Misael Gomez y Diego Hernandez</h3>
  </div>
</footer>
</html>