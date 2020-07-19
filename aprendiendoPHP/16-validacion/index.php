<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Validacion Fromularion PHP</title>
</head>
<body>
<h1>Validar Formularios en PHP</h1>
<?php
  if(isset($_GET['error'])){
    $error = $_GET['error'];
    if($error === 'faltan_datos'){
      echo'<strong style ="color : red"> Introduce todos datos en los campos</strong>';
    }
    if($error === 'nombre'){
      echo'<strong style ="color : red"> Introduce bien el nombre</strong>';
    }
    if($error === 'apellidos'){
      echo'<strong style ="color : red"> Introducelos bien los apellidos</strong>';
    }
    if($error === 'edad'){
      echo'<strong style ="color : red"> Introduce bien la edad</strong>';
    }
     if($error === 'email'){
      echo'<strong style ="color : red"> Introduce bien el correo</strong>';
    }
     if($error === 'password'){
      echo'<strong style ="color : red"> Introduce una contraseña de mas de 5 caracteres</strong>';
    }

  }
?>
  <form action="procesar.php" method ="POST">
    <label for="nombre">Nombre</label></br>
    <input type="text" name="nombre" id=""  ></br>

     <label for="apellido">Apellido</label></br>
    <input type="text" name="apellido" id=""   ></br>

     <label for="edad">Edad</label></br>
    <input type="text" name="edad" id="" ></br>

    <label for="email">Email</label></br>
    <input type="text" name="email" id="" ></br>

     <label for="password">Contraseña</label></br>
    <input type="text" name="password" id="" ></br>

    <input type="submit" value ="Enviar" id=""></br>
  </form>
  
</body>
</html>