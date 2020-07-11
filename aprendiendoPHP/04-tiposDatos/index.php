<?php 
//TIPOS DE ARCHIVO
/*
Entero (int/ integer) = 80
comaFlotante / decimales(float,double) = 3.45
cadenas(string) = 'texto' o "texto"
Booleano (bool) = 1/0 --true/ false
Nulo (null) = null
Array([coleccion])
Objetos ({
  key: valor;
})

*/ 
$numero = 100;
$decimal = 327.4;
//Enlazar variables y texto utilizando las comillas dobles
$cadena = "es un texto con numero/n $numero";
$cadena2 = 'es un texto con numero'.$numero;
$verdadero = true;
//gettype muestra el tipo de dato
echo gettype($numero);
echo gettype($decimal);
echo gettype($cadena);
echo gettype($verdadero). '<br>';
echo $cadena .'<br>';
echo $cadena2;
?>