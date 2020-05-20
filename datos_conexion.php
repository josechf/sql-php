<?php
//CONECTA CON PDO POO y CON MYSQLI POO
   require('datos_config.php');

/*Class Datomysqli{
     protected $conection;
   public function Datomysqli(){
      $this->conection=new mysqli(dbhost,dbusuario,dbpasword,dbnombre);
      if($this->conection->connect_errno){ 
         die ("fallo la conexion a la base de datos");
         
      }
      return ;
   } 
    
}*/
//------------------------------------------------------------------------------------------------------------
  class DatoPDO{
         protected $conection;
         public function DatoPDO(){
            $arrOptions = array(PDO::ATTR_EMULATE_PREPARES => FALSE, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
                try{
                   $this->conection = new PDO('mysql:host=localhost;dbname=prueba1', 'root', '', $arrOptions);
                   // $this->conection=new PDO('mysql:dbhost;dbnombre','dbusuario,dbpasword',$arrOptions);
                  //  $this->conection=new PDO('mysql:dbhost="localhost";dbnombre="prueba1"','dbusuario="root",dbpasword=""');
                  //   $this->conection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    return $this->conection;
                }catch(Exception $e){
                       echo "la linea de error es".$e->getline();
                }
         }
  } 
?>