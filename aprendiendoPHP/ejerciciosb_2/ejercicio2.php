<!-- Hacer un programa con Php que añada  valores a un array mientras que su longuitud sea menor
a 120 y luego mostrarlo por pantalla -->
<?php
  do{
    $num = rand(1,120); 
    $numeros[] =$num;
  }
  while(count($numeros) < 120);
    var_dump($numeros);
?>
