<?php
    //conectar con el servidor
    $conectar=mysqli_connect("localhost","root","");
    //verificar coneccion
    if(!$conectar){
        echo"no se pudo conectar con el srvidor";
    }else{
       
        $base=mysqli_select_db($conectar, "prueba");
        if(!$base){
            echo "no se encontro la base de datos";
        }
    }
        //recuperar las variables
    $id=$_POST['id'];
    $fruta=$_POST['fruta'];
    $calidad=$_POST['calidad'];
    $cantidad=$_POST['cantidad'];
    $origen=$_POST['origen'];
    $pago=$_POST['pago'];
    $precio_unitario=$_POST['precio_unitario'];
    $total=$_POST['total'];
    $comprador=$_POST['comprador'];
    $fecha=$_POST['fecha'];

   
    //sentencia sql
    $sql="INSERT INTO ventas VALUES ('$id','$fruta','$calidad','$cantidad','$origen','$pago','$precio_unitario','$total','$comprador', '$fecha')";
    
    //ejecutamos la centencia de sql
    $ejecutar=mysqli_query($conectar, $sql);
    //verificacion de la ejecucioon
    if(!$ejecutar){
        echo"huvo algun error";
    }else{
        echo"datos guardado correctamente <br><a href='index.html'>volver</a>";
    }
     
?>﻿
 
