<?php
require('reseptionPost.php');
  $buscar=$_GET['buscar'];
  $va=new Accion();
  $v=$va->get_accion($buscar);
  foreach($v as $elementos){
     echo '<table class="a" ><tr><td class="b">';
     echo $elementos['nombre'].'</td><td class="b2">';
     echo $elementos['edad'].'</td><td class="b3">';
     echo $elementos['trabajo'].'</td><td class="b4">';
     echo $elementos['cedula'].'</td>';
     echo '</tr></table>';
     echo '<br><br>';
  }
?>
<style>
.a{
  background-color: rgb(252, 249, 249);
    border: rgb(151, 148, 148) 1px solid;
}
.b,.b2,.b3,.b4{
  background-color: rgb(206, 203, 199);
}

</style>