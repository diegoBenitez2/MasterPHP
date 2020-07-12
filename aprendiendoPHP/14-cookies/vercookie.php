<?php
  if(isset($_COOKIE['micookie'])){
    echo '<h1>'.$_COOKIE['micookie'].'</h3>';
  }else{
    echo"No existe esa cookie";
  }

  if(isset($_COOKIE['unYear'])){
    echo '<h1>'.$_COOKIE['unYear'].'</h3>';
  }else{
    echo"No existe esa cookie";
  }
?>
<a href ="crear_cookie.php">Crear Cookie</a>
<a href ="borrar_cookie.php">Borrar Cookie</a>
