<?php
    $dato=$_GET["buscar"];
    require("datos_conexion.php");
    $conexion=mysqli_connect($db_host,$db_usuario,$db_pasword);
    if(mysqli_connect_error()){
        echo "se fue al carajo la conexion";
        exit;
    } 
    mysqli_select_db($conexion,$db_nombre) or die ("no se encuentra la base de datos");
    mysqli_set_charset($conexion,"utf8");
   /* $query="SELECT * FROM Hoja1 WHERE trabajo LIKE '%$dato%'";*/
   $query="SELECT * FROM Hoja1 WHERE id=$dato";
    $resultado=mysqli_query($conexion,$query);/*este if dice que clase d error en $resultado tengo, en caso d tener uno*/
    if(!$resultado){
        var_dump(mysqli_error($conexion));
        exit;
    }
    while($fetch=mysqli_fetch_array($resultado,MYSQLI_ASSOC)){
        echo " <form method='GET' action='http://localhost/actualizador.php'>";
         echo   "<label for='name'> el nombre</label>";
         echo   "<input type='text' name='nombre' id='name' value='".$fetch['nombre']."'></input><br>";
        echo    "<label for='anios'> su edad</label>";
        echo    "<input type='number' name='edad' id='anios' value='".$fetch['edad']."'></input><br>";
        echo    "<label for='work'> su trabajo</label>";
        echo    "<input type='text' name='trabajo' id='work' value='".$fetch['trabajo']."'></input><br>";
        echo    "<label for='carnet'> su cedula</label>";
        echo    "<input type='text' name='cedula' id='carnet' value='".$fetch['cedula']."'></input><br>";
        echo    "<label for='carnet'> su id</label>";
        echo    "<input type='text' name='id' id='id' value='".$fetch['id']."'></input><br>";
        echo    "<input type='submit' value='actualizar!'></input>";
        echo    "</form>";
    }
    mysqli_close($conexion);
?>