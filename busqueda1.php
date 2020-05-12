<?php
         //BUSCAR SI SE PUEDE CON ID, CONTINUAR ESTE TEMA HASTA ENTENDERLO
require("datos_conexion.php");
$conection=mysqli_connect($db_host,$db_usuario,$db_pasword);
$busca=$_GET['buscar'];
if(mysqli_connect_errno()){
         echo "fallo al conectar la base de datos";
         exit();
   }
   mysqli_select_db($conection,$db_nombre) or die ("no se encuentra la base de datos");
  
   mysqli_set_charset($conection,"utf8");
   $query="SELECT * FROM Hoja1 WHERE id = ?";//evita inyeccion sql
   $resultado=mysqli_prepare($conection,$query);
   $ok=mysqli_stmt_bind_param($resultado,"i",$busca);
   $ok=mysqli_stmt_execute($resultado);
   if($ok=false){
       echo "error al ejecutar la consulta";
   }else{
       $ok=mysqli_stmt_bind_result($resultado,$name,$anio,$work,$carnet,$busca);
       echo "articulos encontrados <br><br>";
       while(mysqli_stmt_fetch($resultado)){
            echo $name." ".$anio." ".$work." ".$carnet."<br>";
       }
        mysqli_stmt_close($resultado);
   }
  
?>   