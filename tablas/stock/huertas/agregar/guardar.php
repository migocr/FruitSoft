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
    $nombre=$_POST['nombre'];
    $localizacion=$_POST['localizacion'];
    $fruta=$_POST['fruta'];
    $hectareas=$_POST['hectareas'];
   
    

   
    //sentencia sql
    $sql="INSERT INTO huertas VALUES ('$id','$nombre','$localizacion','$fruta','$hectareas')";
    
    //ejecutamos la centencia de sql
    $ejecutar=mysqli_query($conectar, $sql);
    //verificacion de la ejecucioon
    if(!$ejecutar){
        echo"huvo algun error";
    }else{
        echo"datos guardado correctamente <br><a href='index.html'>volver</a>";
    }
     
?>﻿
 
