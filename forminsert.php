<?php
  $result=$_GET['nombre'];
  $result2=$_GET['edad'];
  $result3=$_GET['trabajo'];
  $result4=$_GET['cedula'];
    require("datos_conexion.php");
    $conexion=mysqli_connect($db_host,$db_usuario,$db_pasword);
    if(mysqli_connect_error()){
        echo "se fue al carajo la conexion";
        exit;
    } 
    mysqli_select_db($conexion,$db_nombre) or die ("no se ncuentra la base de datos");
    mysqli_set_charset($conexion,"utf8");
    $query="INSERT INTO Hoja1 (nombre,edad,trabajo,cedula) VALUES ('$result','$result2','$result3','$result4')";
    $resultado=mysqli_query($conexion,$query);/*este if dice que clase d error en $resultado tengo, en caso d tener uno*/
    if(!$resultado){
        var_dump(mysqli_error($conexion));
        exit;
    }else{
        echo "guardado con exito<br><br>";
        echo "<table><tr>
                     <td>$result</td>
                     <td>$result2</td><br>
                     <td>$result3</td>
                     <td>$result4</td>
                     <tr></table>";
    }
?>