<?php
     $busca=$_GET['nombre'];
    $busca2=$_GET['edad'];
    $busca3=$_GET['trabajo'];
    $busca4=$_GET['cedula'];
    $busca5=$_GET['id'];
try{
    $base=new PDO('mysql:host=localhost;dbname=prueba1','root','');
    $base->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $base->exec("SET CHARACTER SET utf8");
    $query="UPDATE Hoja1 SET edad=:marcador2,trabajo=:marcador3,cedula=:marcador4,id=:marcador5 WHERE nombre=:marcador1 ";
    $resultado=$base->prepare($query);
    $resultado->bindParam(':marcador1',$busca,PDO::PARAM_STR);
    $resultado->bindParam(':marcador2',$busca2,PDO::PARAM_STR);
    $resultado->bindParam(':marcador3',$busca3,PDO::PARAM_STR);
    $resultado->bindParam(':marcador4',$busca4,PDO::PARAM_STR);
    $resultado->bindParam(':marcador5',$busca5,PDO::PARAM_INT);
    $resultado->execute();
    if($resultado->rowCount()>0){
         echo "se a actualizado";
    }else{
         echo "fallo la actualizacion";
    }
    $resultado->CloseCursor();
}catch(exeption $e){
    die ($e->GetMassage());  
}finally{
    $base=null;
}
?>