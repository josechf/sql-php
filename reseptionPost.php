<?php
// HACE CONSULTA MYSQLI POO y PDO POO
  
   require('datos_conexion.php');
   
   Class Accion extends DatoPDO{
      public function Accion(){
            parent:: __construct();
      }
      public function get_accion($buscar){
         $sql=('SELECT * FROM Hoja1 WHERE nombre=:m');
         $resultado=$this->conection->prepare($sql);
         $resultado->execute(array(':m'=>$buscar));
         $imprime=$resultado->fetchAll(PDO::FETCH_ASSOC);
         return $imprime; 
         $resultado->closeCursor();
         $this->conection=null;
      }

   }
         //-----------------------------------------------------------------------------------------------
         /*Class Accion extends Datomysqli{
            public function Accion(){
                  parent:: __construct();
            }
            public function get_accion($buscar){
         $resultado=$this->conection->query('SELECT * FROM Hoja1 WHERE nombre="'.$buscar.'"');
         if($resultado && $resultado->num_rows>0){
            $producto=$resultado->fetch_all(MYSQLI_ASSOC);
            return $producto;
         }else{
            echo "no se encontro ";exit;
         }*/

      
?>

