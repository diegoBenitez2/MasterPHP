<?php
  $frase = "Ni los genios son tan genios ni los mediacres tan mediocres";
    echo $frase;
    function holaMundo(){
      global $frase;
      echo "<h1> $frase</h1>";
      $year = 2019;
      echo "<h1> $year</h1>";
      return $year;
    };
  echo holaMundo();
  //FUNCIONES VARIABLES

  function buenasDias(){
    return "Hola buenos Dias";
  }
  function buenasTardes(){
    return "hey, que tal la comida";
  }
  function buenasNoches(){
    return "Te vas a dormir ya, buenas noches";
  }
 
 $horario = $_GET['horario'];
 $miFuncion = "buenas".$horario;
  echo $miFuncion();

  //FUNCIONES PREDEFINIDAS
  
?>