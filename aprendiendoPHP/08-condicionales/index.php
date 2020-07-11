<?php 
//CONDICIONALES
/*
if(condicion){
}
else{
otras instrucciones
}

//OPERADORES DE COMPARACION
<,>,<=,>=,==,===, !=,!==

//OPERADORES LOGICOS
&& == AND,  || == OR, NOT == no, AND- OR
*/
$color = 'rojo';
if($color == 'rojo'){
echo 'el color es rojo';}
else{
echo 'el color no es rojo';}

$year = 2020;
 if($year >= 2019){
 echo "<br> estamos en 2019 </br>";
 }
 else{
 echo "<br>  no estamos en 2019 </br>";
  
 }
 //ejemplo 3
 $edad = 43;
 $mayoria = 18;
 $nombre = 'diego';
 $ciudad = 'bucara';
 $continente = 'sur america';

 if($edad >=$mayoria){
  echo "<h1> $nombre es mayor de edad </h1>";
  if($continente == 'sur america'){
  echo "<h2>y vive en $ciudad </h2>";
 }
 else{
  echo "<h2>no es latino</h2>";
 }
 
 }
 else{
 "<h2> $nombre no es mayor de edad </h2>";
 
 }
 //ejemplo 4
 $dia = 3;
 if($dia == 1){
  echo 'es LUNES';
 }
 elseif ($dia ==2) {
  echo 'es MARTES';
   
 }
 elseif ($dia ==3) {
  echo 'es MIERCOLES';
 }
 elseif ($dia==4) {
  echo 'es JUEVES';
 }
 elseif ($dia == 5) {
  echo 'es VIERNES';
 }
 else{
 echo'ES FIN DE SEMANA';
 }

 //Ejemplo 5
 $edad = 18;
 $edad2 = 64;

 $edad_oficial = 20;

 if($edad_oficial >= $edad && $edad_oficial<= $edad2){
 echo'ESTA EN EDAD DE TRABJAR';
 }
 else{
 echo'YA NO PUEDE TRABAJAR';
  }
  //EJEMPLO CON SWICTH
  switch($dia){
  case 1:
  echo 'LUNES';
  break;
  case 2: 
  echo 'MARTES';
  break;
  case 3: 
  echo 'MIERCOLES';
  break;
  case 4: 
  echo'JUEVES';
  break;
  case 5: 
  echo'VIERNES';
  break;
  default:
  echo 'es FIN DE SEMANA';

  }
  //ejemplo  
  //SE UTILIZA PARA SALTAR INTRUCCIONES E IR A LA MARCA
  goto marca;
    echo"<h3> intruccion 1 </h3>";
    echo"<h3> intruccion 2 </h3>";
    echo"<h3> intruccion 3 </h3>";
    echo"<h3> intruccion 4 </h3>";

    marca:
    echo' Me saltado 4 instrucciones';
?>