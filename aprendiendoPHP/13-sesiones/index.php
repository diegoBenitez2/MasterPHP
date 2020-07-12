<!-- Sesion: alamcenar  y persisitor datps del usuario mientras navega por el sitio web, hasta 
que cierre sesion o cierre el navegador -->
<!-- //SE DEBE INICIAR SESSION EN TODOS LOS FICHEROS -->

<?php
  //Inciar sesion
  session_start();
  //VARIABLE LOCAL
  $variable_normal= "soy una cadena";
  //VARIABLE DE SESION
  $_SESSION['variable_persistente'] = "HOLA SOY SESION ACTIVA";
  echo '<h3>'.$variable_normal.'</h3>';
  echo '<h3>'.$_SESSION['variable_persistente'].'</h3>';
?>