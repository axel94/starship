<?php
    $ref=$_POST["ref"];
    include "conexion.php";
    $sql="SELECT `nombre`, `referencia`, `COL 3`, `COL 5`, `COL 7`, `precio_final`, `categoria` FROM `TABLE 2` WHERE `referencia`=".$ref;
    if($result=$mysqli->query($sql)){
        while ($a=$result->fetch_assoc()) {
            echo $a["nombre"]."<br>";
            echo $a["referencia"]."<br>";
            echo $a["COL 3"]."<br>";
            echo $a["COL 5"]."<br>";
            echo $a["COL 7"]."<br>";
            echo $a["precio_final"]."<br>";
            echo $a["categoria"]."<br>";
        }
    }
?>