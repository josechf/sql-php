<?php

require("datos_conexion.php");
$conection=mysqli_connect($db_host,$db_usuario,$db_pasword);
$busca=mysqli_real_scape_string($conection,$_GET['buscar']);
if(mysqli_connect_errno()){
         echo "fallo al conectar la base de datos";
         exit();
   }
   mysqli_select_db($conection,$db_nombre) or die ("no se encuentra la base de datos");
  
   mysqli_set_charset($conection,"utf8");
   $query="SELECT * FROM Hoja1 WHERE trabajo LIKE '%$busca%'";
   $resultado=mysqli_query($conection,$query);/*este if dice que clase d error en $resultado tengo, en caso d tener uno*/
   if(!$resultado){
       var_dump(mysqli_error($conection));
       exit;
   }
   while($fetch=mysqli_fetch_array($resultado,MYSQLI_ASSOC)){
           
             echo $fetch['nombre']." - ";
             echo $fetch['edad']." - ";
             echo $fetch['trabajo']." - ";
             echo $fetch['cedula']." - ";
             echo $fetch['id']."<br>";
             

   }
   mysqli_close($conection);
?>   