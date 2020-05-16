<?php
 //AQUI BUSCO UN REGISTRO
  $busca=$_GET['buscar'];
  $busca2=$_GET['buscar2'];
 try{
    $base=new PDO('mysql:host=localhost;dbname=prueba1','root','');
    $base->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $query="SELECT * FROM Hoja1 WHERE nombre=:marcador and id=:marcador2";
    $resultado=$base->prepare($query);//devuelve un objeto PDOstaement(osea q devuelve valores de la tabla)
    $resultado->execute(array(':marcador'=>$busca,':marcador2'=>$busca2));
    while($vector=$resultado->fetch(PDO::FETCH_ASSOC)){ //fetch crea un vector asociativo y se lo manda a la vairable vector
    echo' <form class="a" action="http://localhost/updatePDO.php" method="get">';
    echo'  <label class="b">su nombre:<input class="wos" type="text" name="nombre" value="'.$vector["nombre"].'"></input></label><br>';
    echo' <label class="b">su edad:<input class="aczino" type="text" name="edad" value="'.$vector["edad"].'"></input></label><br>';
    echo' <label class="b">su trabajo:<input class="bnet" type="text" name="trabajo" value="'.$vector["trabajo"].'"></input></label><br>';
    echo' <label class="b">su cedula:<input class="chuty" type="text" name="cedula" value="'.$vector["cedula"].'"></input></label><br>';
    echo'<label class="b">su id:<input class="zticma" type="number" name="id" value="'.$vector["id"].'"></input></label><br>';
    echo'  <input type="submit" name="boton" value="enviar"></input> ';
    echo"</form>";
    }
    $resultado->CloseCursor();
}catch(exeption $e){
    die ($e->GetMassage());  
}finally{
    $base=null;
}
?>
<style>
    form.a{
    background-color: rgb(252, 249, 249);
    border: rgb(151, 148, 148) 1px solid;
    border-radius: 5px;
    width:27%;
   }
   input.wos,.chuty,.bnet{
    position: relative;
    border-radius: 20px;
    background-color: rgb(206, 203, 199);
    width:3cm;
    border: 0px;
    left: 70px;
   }
   input.aczino{
    position: relative;
    border-radius: 20px;
    background-color: rgb(206, 203, 199);
    width:3cm;
    border: 0px;
    left: 83px;
   }
   input.zticma{
    position: relative;
    border-radius: 20px;
    background-color: rgb(206, 203, 199);
    width:3cm;
    border: 0px;
    left: 98px;    
   }
   input[type='submit']{
    position: relative;
    border-radius: 20px;
    background-color: rgb(238, 204, 160);
    width:1.3cm;
    border: 5px;
    left: 50px;
   }
   input[type='submit']:hover{
    background-color: rgb(233, 182, 106);
   }
  label.e{
    background-color: rgb(255, 255, 255);
    position: relative;
    left: 30px;
  }
</style>