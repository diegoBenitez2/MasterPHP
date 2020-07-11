<!-- Hacer un programa que comprueba si una variable esa vacia y si esta vacia
 rellenarla con texto en minuscula y mostrarlo con matyucula y negrita -->
<?php
  $texto = "";
  if(empty($texto )){
    $texto = 'Hola gente';
    echo '<h3>'.strtoupper($texto).'</h3>';
  }
?>
