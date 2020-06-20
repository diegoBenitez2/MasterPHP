
<?php 
//OPERADORES ARITMETICOS
$numero1 = 55;
$numero2 = 33;
echo 'suma:'. ($numero1 + $numero2).'<br>';
echo 'resta:'. ($numero1 - $numero2).'<br>';
echo 'multilicacion:'. ($numero1 * $numero2).'<br>';
echo 'division:'. ($numero1 / $numero2).'<br>';
echo 'resto:'. ($numero1 % $numero2).'<br>';
//OPERADORES INCREMENTO Y DECREMENTO
$year = 2019;
//INCREMENTO
$year ++;
//DECREMENTO
$year --;
//PRE-DEREMETO
--$year ;
//PRE-INCREMENTO
++$year ;
echo '<h1>'.$year.'</h1>';

//OPERADORES DE ASIGNACION
$edad = 65;
echo $edad.'</br>';
//suma
echo ($edad+=5).'</br>';
//resta
echo ($edad-=5).'</br>';
//multiplicacion
echo ($edad*=5).'</br>';
//division
echo ($edad/=5).'</br>';
?>