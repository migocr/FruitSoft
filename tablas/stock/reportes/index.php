<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Reportes</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<meta name="keywords" content="menu, navigation, animation, transition, transform, rotate, css3, web design, component, icon, slide" />
<link rel="stylesheet" type="text/css" href="../../../login/css/demo.css" />
<link rel="stylesheet" type="text/css" href="css/imprimir.css" media="print" />
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
  
  <br><p><a href="../../../login/admin.php"><img src="../../../img/logo-admin.png" alt="logo" id="logo"></a></p><br>
      
      

      <div class="container">
            <div class="header">
                <a href="../"><strong>&lt&lt Volver </strong></a>
                <span class="right">
                  
          <a href="../../../login/salir.php">Salir</a>
                    
                </span>
                <div class="clr"></div>
            </div>
            <h1>Reportes <span>Reportes totales </span></h1>
            <div class="content">

                <div id="contenido" >
                  <br>
                 <center> <input type="button" style=" float:none; width:50%;"class="btn btn-info" value="Imprimir Pagina" onclick="window.print()"></center>
                  
                  <div id="ataulfo" style="text-align:center; ">
                  
                  

                <table id="tabla"style="margin: auto; width: 600px; border-collapse: separate; border-spacing: 10px 5px;border: 1px solid black;">
                  <H1>Reporte de ventas 2018</H1>
               <thead>
                  <th ><h1><center>Fruta</center></h1></th> 
                  <th ><h1><center>Variedad</center></h1></th> 
                  <th ><h1><center>Total Vendido</center></h1></th>
                </thead>
                <br>
                <tr>
                  <td>
                      Mango 
                  </td>
                  <td>
                    Ataulfo
                  </td> 
                  <td>
                    
                    <?php 
                          $conn = mysqli_connect("localhost", "root", "", "prueba");

                          $mango = "Mango Ataulfo";
                          $r = mysqli_query($conn, "SELECT SUM(total) AS suma FROM ventas WHERE fruta = 'mango ataulfo'");
                          $f = mysqli_fetch_assoc($r);


                          echo "$", $f["suma"] ;
                             
                          ?>

                  </td>
                </tr>
                <tr>
                  <td>Mango</td>
                  <td>Tommy</td> 
                  <td>
                    <?php 
                          $conn = mysqli_connect("localhost", "root", "", "prueba");

                          
                          $r = mysqli_query($conn, "SELECT SUM(total) AS suma FROM ventas WHERE fruta = 'Mango Tommy'");
                          $f = mysqli_fetch_assoc($r);


                          echo "$", $f["suma"] ;
                             
                          ?>
                  </td>
                </tr>
                <tr>
                  <td>Mango</td>
                  <td>Key</td> 
                  <td>
                    <?php 
                          $conn = mysqli_connect("localhost", "root", "", "prueba");

                          
                          $r = mysqli_query($conn, "SELECT SUM(total) AS suma FROM ventas WHERE fruta = 'Mango Key'");
                          $f = mysqli_fetch_assoc($r);


                          echo "$", $f["suma"] ;
                             
                          ?>
                  </td>
                </tr>
                <tr>
                  <td>Yaka</td>
                  <td>Criolla</td> 
                  <td>
                    <?php 
                          $conn = mysqli_connect("localhost", "root", "", "prueba");

                          $mango = "Mango Ataulfo";
                          $r = mysqli_query($conn, "SELECT SUM(total) AS suma FROM ventas WHERE fruta = 'yaka'");
                          $f = mysqli_fetch_assoc($r);


                          echo "$", $f["suma"] ;
                             
                          ?>
                  </td>
                </tr>
                <tr>
                  <td>Platano</td>
                  <td>Pera</td> 
                  <td>
                    <?php 
                          $conn = mysqli_connect("localhost", "root", "", "prueba");

                          
                          $r = mysqli_query($conn, "SELECT SUM(total) AS suma FROM ventas WHERE fruta = 'Platano Pera'");
                          $f = mysqli_fetch_assoc($r);


                          echo "$", $f["suma"] ;
                             
                          ?>
                  </td>
                </tr>
                <tr>
                  <td>Aguacate</td>
                  <td>Bola</td> 
                  <td>
                    <?php 
                          $conn = mysqli_connect("localhost", "root", "", "prueba");

                          
                          $r = mysqli_query($conn, "SELECT SUM(total) AS suma FROM ventas WHERE fruta = 'Aguacate Bola'");
                          $f = mysqli_fetch_assoc($r);


                          echo "$", $f["suma"] ;
                             
                          ?>
                  </td>
                </tr>
                <tr>
                  <td>Aguacate</td>
                  <td>Hass</td> 
                  <td>
                    <?php 
                          $conn = mysqli_connect("localhost", "root", "", "prueba");

                          
                          $r = mysqli_query($conn, "SELECT SUM(total) AS suma FROM ventas WHERE fruta = 'Aguacate Hass'");
                          $f = mysqli_fetch_assoc($r);


                          echo "$", $f["suma"] ;
                             
                          ?>
                  </td>
                </tr>
                <tr>
                  <td>Limon</td>
                  <td>Persa</td> 
                  <td>
                    <?php 
                          $conn = mysqli_connect("localhost", "root", "", "prueba");

                          
                          $r = mysqli_query($conn, "SELECT SUM(total) AS suma FROM ventas WHERE fruta = 'Limon persa'");
                          $f = mysqli_fetch_assoc($r);


                          echo "$", $f["suma"] ;
                             
                          ?>
                  </td>
                </tr>
                <tr>
                  <td>Cafe</td>
                  <td>-</td> 
                  <td>
                    <?php 
                          $conn = mysqli_connect("localhost", "root", "", "prueba");

                          
                          $r = mysqli_query($conn, "SELECT SUM(total) AS suma FROM ventas WHERE fruta = 'Cafe'");
                          $f = mysqli_fetch_assoc($r);


                          echo "$", $f["suma"] ;
                             
                          ?>
                  </td>
                </tr>

                <tr>
                  <td><h1>TOTAL: </td>
                  <td> </td> 
                  <td>
                    <?php 
                          $conn = mysqli_connect("localhost", "root", "", "prueba");

                          
                          $r = mysqli_query($conn, "SELECT SUM(total) AS suma FROM ventas ");
                          $f = mysqli_fetch_assoc($r);


                          echo "$", $f["suma"] ;
                             
                          ?>
                  </td>
                </tr>
              </table>

              <table id="tabla"style="margin: auto; width: 600px; border-collapse: separate; border-spacing: 10px 5px;border: 1px solid black;">
                  <H1>Produccion por Huerta 2018</H1>
               <thead>
                  <th ><h1><center>Huerta</center></h1></th> 
                  <th ><h1><center>Total Vendido</center></h1></th>
                </thead>
                <br>
                <tr>
                  <td>
                      La barranca 
                  </td>
                  <td>
                    
                    <?php 
                          $conn = mysqli_connect("localhost", "root", "", "prueba");

                          
                          $r = mysqli_query($conn, "SELECT SUM(total) AS suma FROM ventas WHERE origen = 'la barranca'");
                          $f = mysqli_fetch_assoc($r);


                          echo "$", $f["suma"] ;
                             
                          ?>

                  </td>
                </tr>
                <tr>
                  <td>
                      La Loma 
                  </td>
                  <td>
                    
                    <?php 
                          $conn = mysqli_connect("localhost", "root", "", "prueba");

                          
                          $r = mysqli_query($conn, "SELECT SUM(total) AS suma FROM ventas WHERE origen = 'la loma'");
                          $f = mysqli_fetch_assoc($r);


                          echo "$", $f["suma"] ;
                             
                          ?>

                  </td>
                </tr>
                <tr>
                  <td>
                      La bajada 
                  </td>
                  <td>
                    
                    <?php 
                          $conn = mysqli_connect("localhost", "root", "", "prueba");

                          
                          $r = mysqli_query($conn, "SELECT SUM(total) AS suma FROM ventas WHERE origen = 'la bajada'");
                          $f = mysqli_fetch_assoc($r);


                          echo "$", $f["suma"] ;
                             
                          ?>

                  </td>
                </tr>
                <tr>
                  <td>
                      El llano
                  </td>
                  <td>
                    
                    <?php 
                          $conn = mysqli_connect("localhost", "root", "", "prueba");

                          
                          $r = mysqli_query($conn, "SELECT SUM(total) AS suma FROM ventas WHERE origen = 'el llano'");
                          $f = mysqli_fetch_assoc($r);


                          echo "$", $f["suma"] ;
                             
                          ?>

                  </td>
                </tr>
                <tr>
                  <td>
                      La cevadilla 
                  </td>
                  <td>
                    
                    <?php 
                          $conn = mysqli_connect("localhost", "root", "", "prueba");

                          
                          $r = mysqli_query($conn, "SELECT SUM(total) AS suma FROM ventas WHERE origen = 'la cevadilla'");
                          $f = mysqli_fetch_assoc($r);


                          echo "$", $f["suma"] ;
                             
                          ?>

                  </td>
                </tr>
                <tr>
                  <td>
                      Tecopaste 
                  </td>
                  <td>
                    
                    <?php 
                          $conn = mysqli_connect("localhost", "root", "", "prueba");

                          
                          $r = mysqli_query($conn, "SELECT SUM(total) AS suma FROM ventas WHERE origen = 'Tecopaste'");
                          $f = mysqli_fetch_assoc($r);


                          echo "$", $f["suma"] ;
                             
                          ?>

                  </td>
                </tr>
                <tr>
                  <td>
                      El panteon
                  </td>
                  <td>
                    
                    <?php 
                          $conn = mysqli_connect("localhost", "root", "", "prueba");

                          
                          $r = mysqli_query($conn, "SELECT SUM(total) AS suma FROM ventas WHERE origen = 'El panteon'");
                          $f = mysqli_fetch_assoc($r);


                          echo "$", $f["suma"] ;
                             
                          ?>

                  </td>
                </tr>
                <tr>
                  <td><h1>TOTAL: </td>
                  <td> </td> 

                  <center><td>
                    <?php 
                          $conn = mysqli_connect("localhost", "root", "", "prueba");

                          
                          $r = mysqli_query($conn, "SELECT SUM(total) AS suma FROM ventas ");
                          $f = mysqli_fetch_assoc($r);


                          echo "$", $f["suma"] ;
                             
                          ?>
                  </td></center>
                </tr>
                
              </table>
                </div>




<br><br>


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