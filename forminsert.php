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
    $query="INSERT INTO Hoja1 (nombre,edad,trabajo,cedula) VALUES (?,?,?,?)";
    $resultado=mysqli_prepare($conexion,$query);
    $ok=mysqli_stmt_bind_param($resultado,"siss",$result,$result2,$result3,$result4);
    $ok=mysqli_stmt_execute($resultado);
    if($ok=false){
        echo "fallo en la ejecucion ";
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
    mysqli_stmt_close($resultado);
?>