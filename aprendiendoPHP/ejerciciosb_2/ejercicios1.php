<!-- /*
  Hacer un array con 8  numeros enteros.
    1.Recorrerlo y mostralo
    2.Ordenarlo y mostrarlo
    3.Mostrar su longuitud
    4.Buscar algun elemento
*/  -->
<?php
  $numeros =[1,89,3,90,5,13,12,8];
  echo '<ul>';
    foreach ($numeros as $num) {
      echo '<li>'.$num.'</li>';
    }
  echo'</ul>';
  echo sort($numeros);
  echo count($numeros);
  echo array_search('89',$numeros);
?>