<?php
    // AQUI AGREGO UN REGISTRO 
    $busca=$_GET['nombre'];
    $busca2=$_GET['edad'];
    $busca3=$_GET['trabajo'];
    $busca4=$_GET['cedula'];
    $busca5=$_GET['id'];
try{
    $base=new PDO('mysql:host=localhost;dbname=prueba1','root','');
    $base->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $base->exec("SET CHARACTER SET utf8");
    $query="INSERT INTO Hoja1 (nombre,edad,trabajo,cedula,id) VALUES (:marcador1,:marcador2,:marcador3,:marcador4,:marcador5)";
    $resultado=$base->prepare($query);
    $resultado->execute(array('marcador1'=>$busca,'marcador2'=>$busca2,'marcador3'=>$busca3,'marcador4'=>$busca4,'marcador5'=>$busca5));
    $resultado->execute();
    echo "all fine";
    $resultado->CloseCursor();
}catch(exeption $e){
    die ($e->GetMassage());  
}finally{
    $base=null;
}
?>