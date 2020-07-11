<?php
  //BUCLE WHILE
  $numero = 0;
   while($numero <= 10){
    echo " $numero";
    $numero++;
    if($numero !=100){
    echo ',';
    }
   }

   //ejemplo
   //isset valida si existe el numero que se pasa por get
   if(isset ($_GET ['numero'])){
   //casting: cambiar de tipo de dato
   $numero = (int)$_GET ['numero'];
   };

   echo"<h1> TABLA DE MULTIPLICAR DEL NUMERO $numero</H1>";
   $operando = 1;
   while ($operando <= 10) {
     echo "$numero x $operando =" .($numero * $operando).  "<br>";
     $operando ++;
   }
   //BUCLE DO WHILE
   $edad = 17;
   $stage = 1;
   do{
   echo "Tienes acceso al stage $stage <br/>";
   $stage++;
   }
   while ($edad >= 18 && $stage <=10);

?>