<?php
  $nombre ="Diego benitez";
  var_dump($nombre);
  //Fechas
  echo date('d-m-y');
  echo "</br>";
  //tiempo en formato UNIX
  echo time();
  echo "</br>";

  //Matematicas
  echo "Raiz cuadrada de 10".sqrt(10);
  echo "</br>";
  //Numero aleatorio reand(NUM1,NUM2)
  echo"Numero aleatorio entre 10 y 40".rand(10,40);
  echo "</br>";
  echo"Numero pi:".pi();
  echo "</br>";
  //redondear round(cifra,#decimales)
  echo"Readonderar:".round(7.89134,2);
  echo "</br>";
  if(is_string($nombre)){
    echo"esa es una cadena";
  }
  echo "</br>";
  if(!is_float($nombre)){
    echo"esa es una cadena no un float";
  }
  echo "</br>";
  //Comprobar que existe una varible
  if(isset($edad)){
    echo"La varible existe";
  }
  else{
    echo"La varibles si existe";
  }
  echo "</br>";
  //Limpiar espacios en variables
  $frase ="     mi contenido        ";
  var_dump(trim($frase));
  echo "</br>";

  //Eliminar varibles/indices
  $year = 2020;
  unset($year);
  //Comprobar si una variable vacia
  $carro ="";
  if(empty($carro)){
    echo"la varible $carro esta vacia";
  }
  
  else{
    echo"la varible $carro tiene contenido";
  }
  echo "</br>";

  //devuelve numero caracteres de strings
  $nombre = "pablo";
  echo strlen($nombre);
  echo "</br>";
  
  //Encontrar caracteres
  $frase = " la vida es bella";
  echo strpos($frase,'bellas');
  echo "</br>";
  //Reemplazar contenido de un string
 $frase2 =str_replace('vida','moto',$frase);
 echo $frase2;
 //MAYUSCULAS minusculas
 echo strtolower($frase);
  echo "</br>";
echo strtoupper($frase);
?>
