<?php
    // AQUI ELIMINO UN REGISTRO 
    $busca=$_GET['buscar'];
    $busca5=$_GET['buscar2'];
try{
    $base=new PDO('mysql:host=localhost;dbname=prueba1','root','');
    $base->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $base->exec("SET CHARACTER SET utf8");
    $query="DELETE FROM Hoja1 where nombre=:marcador1 and id=:marcador2";
    $resultado=$base->prepare($query);
    $resultado->execute(array('marcador1'=>$busca,'marcador2'=>$busca5));
    $resultado->execute();
   if($resultado){ 
    echo "registro eliminado";
   }
    $resultado->CloseCursor();
}catch(exeption $e){
    die ($e->GetMassage());  
}finally{
    $base=null;
}
?>