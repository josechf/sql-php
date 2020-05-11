<?php
    $result=$_GET['nombre'];
  $result2=$_GET['edad'];
  $result3=$_GET['trabajo'];
  $result4=$_GET['cedula'];
  $dato=$_GET['id'];
     require("datos_conexion.php");
    $conexion=mysqli_connect($db_host,$db_usuario,$db_pasword);
    if(mysqli_connect_error()){
        echo "se fue al carajo la conexion";
        exit;
    } 
    mysqli_select_db($conexion,$db_nombre) or die ("no se encuentra la base de datos");
    mysqli_set_charset($conexion,"utf8");
     $query="UPDATE Hoja1 SET nombre='$result',edad='$result2',trabajo='$result3',cedula='$result4' WHERE id='$dato'";
      mysqli_query($conexion,$query);
     if(mysqli_affected_rows($conexion)==0){
        echo "no se a actualizado";
    }else{
        echo "actualizado correctamente";
    }
    mysqli_close($conexion);
?>