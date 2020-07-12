<!-- COOKIE = es un fichero que se alamcena en el ordenador del usurio
que visita una web, con el fin de raastrear el comportamiento del usuario o recordar datos -->

<?php
  //Crear Cookie
  // setcookie("nombre","Solo puede ser texto",caducidad);
  //Cookie basica
  setcookie("micookie","valor de mi galleta");
  
  //Cookie con expiracion
  setcookie("unYear","365",time()+(60*60*24*365));

  header('location:vercookie.php');
?>
<a href ="vercookie.php">ver Cookie</a>
