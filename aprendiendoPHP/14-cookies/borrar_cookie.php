<?php
//Para borrar una cookie hay que caducarla
if($_COOKIE['micookie']){
  unset($_COOKIE['micookie']);
  setcookie('micookie','',time()-100);
}
//modificar las cabeceras
//me reedirecciona a otro sitio
header('location:vercookie.php');
?>