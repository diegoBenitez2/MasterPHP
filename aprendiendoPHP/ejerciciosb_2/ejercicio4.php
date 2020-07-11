<!-- Hacer un programa que tenga 4 variables, una array, string, int, boolean, que imprima 
el mensajae segun el tipo de variable. -->
<?php
  function check($val){
    if(is_array($val)){
      echo '<h3> es un array</h3>';
    }
    else if(is_string($val)){
      echo '<h3> es una cadena </h3>';
      
    }
    else if(is_integer($val)){
      echo '<h3> es un numero </h3>';
      
    }
    else if (is_bool($val)){
      echo '<h3> es un booleano</h3>';
      
    }
  }
  $array = array(1,2,3,4);
  $num = 120;
  $cadena = 'Hola mundo';
  $booleano = true;
  check($array);
  check($num);
  check($cadena);
  check($booleano);
?>