<?php
  
  $consulta=ConsultarProducto($_GET['id']);

  function ConsultarProducto( $id_comp )
  {
   include 'conexion.php';
   $sentencia="SELECT * FROM gastos WHERE id='".$id_comp."' ";
   $resultado= $conexion->query($sentencia) or die ("Error al consultar producto".mysqli_error($conexion)); 
   $fila=$resultado->fetch_assoc();

   return [
    $fila['concepto'],
    $fila['factura'],
    $fila['fecha'],
    $fila['total']
   ];
  }
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de gastos</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <meta name="keywords" content="menu, navigation, animation, transition, transform, rotate, css3, web design, component, icon, slide" />
    <link rel="stylesheet" type="text/css" href="../../login/css/demo.css" />
    <style type="text/css">
      @import url("css/mycss.css");
    </style>
    <link href='http://fonts.googleapis.com/css?family=Terminal+Dosis' rel='stylesheet' type='text/css' />
    <title>Modificar gasto</title>
  </head>
  
  <body>
      <br><p><a href="../../login/admin.php"><img src="../../img/logo-admin.png" alt="logo" id="logo"></a></p><br>
      <div class="container">
            <div class="header">
                <a href="../gastos"><strong>&lt;&lt;Volver </strong></a>
                <span class="right">         
                <a href="../../login/salir.php">Salir</a>
                    
                </span>
                <div class="clr"></div>
            </div>
            <h1>Modificar Gasto <span>Panel de administracion </span></h1>
            <div class="content" id="contenido">
                <div class="todo">                        
                        <div id="contenido">
                          <div style="text-align: center;">
                          
                            <br>
                          <form action="modif_prod2.php" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">
                            <input type="hidden" name="id"  value="<?php echo $_GET['id']?>">
                            <label>Concepto: </label><br>
                            <input type="text" id="concepto" name="concepto" value="<?php echo $consulta[0] ?>" ><br>
                            <br>
                            <label>Factura: </label><br>
                            <input type="text" id="factura" name="factura" value="<?php echo $consulta[1] ?>"><br>
                            <br>
                            <label>Fecha: </label><br>
                            <input type="date" id="fecha" name="fecha" value="<?php echo $consulta[2] ?>"><br>
                            <br>
                            <label>Total: </label><br>
                            <input type="text" id="total" name="total" value="<?php echo $consulta[3] ?>"><br>
                            <br>
                            
                            <br>
                            <button type="submit" class="btn btn-success">Guardar</button>
                           </form>             
                          </div>
                      
                      

                    </div>
               
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