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
    $comprador_id=$_POST['comprador_id'];
    $nombre=$_POST['nombre'];
    $email=$_POST['email'];
    $direccion=$_POST['direccion'];
    $telefono=$_POST['telefono'];
   
    //sentencia sql
    $sql="INSERT INTO compradores VALUES ('$comprador_id','$nombre','$direccion','$telefono','$email')";
    
    //ejecutamos la centencia de sql
    $ejecutar=mysqli_query($conectar, $sql);
    //verificacion de la ejecucioon
    if(!$ejecutar){
        echo"huvo algun error";
    }else{
        echo"datos guardado correctamente <br><a href='index.html'>volver</a>";
    }
     
?>﻿
 
