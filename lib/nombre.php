<?php
    include "conexion.php";
    $name=$_POST["name"];
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
