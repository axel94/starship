<?php
    include "conexion.php";
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
?>