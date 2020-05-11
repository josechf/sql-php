<?php
               /*CONEXION CON PROCEDIMIENTO */
require("datos_conexion.php");
$conection=mysqli_connect($db_host,$db_usuario,$db_pasword /*esta es opcional $db_nombre*/);/*funcion de conexion,debe escribirse en ese orden */
   if(mysqli_connect_errno()){ /*si la conexion falla, el host, se activa este if */
         echo "fallo al conectar la base de datos";
         exit();/*esta funcion sale del php, asi si hay error en conexion no se hace ningun otro proceso y termina todo */
   }
   mysqli_select_db($conection/*aqui es la conexion q se esta usando*/,$db_nombre/*aqui la base de datos para acceder*/) or die ("no se encuentra la base de datos");
   /*hasta aqui solo era crear la conexion al sql, lo que sigue es hacer la consulta a la base de datos*/ 
   mysqli_set_charset($conection,"utf8");/*para q reciba caracteres latinos  */
   $query="SELECT * FROM tablita where   cantidad='1'";/*aqui decimos a quien va dirigida la consulta*/
   $resultado=mysqli_query($conection,$query);
   while($fetch=mysqli_fetch_row($resultado)){
      for($i=0;$i<count($fetch);$i++){
             echo $fetch[$i]." ";
      }      
      echo"<br>";
   }
   mysqli_close($conection);/*cerrar la conexion*/
?>   