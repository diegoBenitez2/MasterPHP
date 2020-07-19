<?php
  //Ejerccio1 : crear una sesion que aumente su valor en 1 o disminuya  en uno en
  //funcion de si el parametro get counter esta a 1 o  0;
  session_start();
  if(!isset ($_SESSION['valor'])){
    $_SESSION['valor'] = 0;
  }
  if($_GET['counter'] == 1){
    $_SESSION['valor'] ++;
  
  }else if ($_GET['counter'] == 0){
     $_SESSION['valor'] --;

  }
?>
   <h3>el valor de la session es: <?=$_SESSION['valor']?></h3>
   <a href ="ejer1.php?counter=1">Aumentar</a>
   <a href ="ejer1.php?counter=0">disminuir</a>