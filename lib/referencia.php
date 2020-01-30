<?php
    include "conexion.php";
    $ref=$_POST["ref"];
    $sql="";
    if($result=$mysqli->query($sql)){
        while ($fila=$result->fetch_assoc()) {
            echo $fila[""];
            echo $fila[""];
            echo $fila[""];
            echo $fila[""];
            echo $fila[""];
            echo $fila[""];
        }
    }
