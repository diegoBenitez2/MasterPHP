<?php
//METODO POST
echo "<h1>". $_POST['nombre'] ."</h1>";
echo "<h1>". $_POST['apellidos'] ."</h1>";
var_dump($_POST);
//METODO GET
//se envian datos por la URL
echo "<h1>". $_GET['nombre'] ."</h1>";
echo "<h1>". $_GET['apellidos'] ."</h1>";
var_dump($_GET);
?>