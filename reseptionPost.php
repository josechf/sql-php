<?php

   require('datos_conexion.php');
   Class Accion extends Dato{
      public function Accion(){
            parent:: __construct();
      }
      public function get_accion(){
         $resultado=$this->conection->query('SELECT * FROM Hoja1');
         if($resultado && $resultado->num_rows>0){
         $producto=$resultado->fetch_all(MYSQLI_ASSOC);
         return $producto;
        }else{
           echo "no se encontro ";exit;
        }

      }

   }
  $va=new Accion();
  $v=$va->get_accion();
  foreach($v as $elementos){
     echo '<table><tr><td>';
     echo $elementos['nombre'].'</td><td>';
     echo $elementos['edad'].'</td><td>';
     echo $elementos['trabajo'].'</td><td>';
     echo $elementos['cedula'].'</td>';
     echo '</tr></table>';
     echo '<br><br>';
   }
?>
