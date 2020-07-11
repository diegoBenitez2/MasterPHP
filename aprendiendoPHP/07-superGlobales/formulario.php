<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<!-- CON METHOD ESPECIFICAMOS EL METODO PARA ENVIAR LA INFOMACION -->
  <form  method="POST"action="recibir.php">
  <div class="contenedor_nombre">
  <!-- SIEMPRE ENLAZAR EL LABEL Y EL INPUT CON FOR(LABEL) Y NAME(INPUT) -->
  <label for="nombre">Nombre</label>
  <input type="text" name="nombre" id="">
  </div>
  <div class="contendor_apellido">
  <label for="Apellidos">Apellidos</label>
  <input type="text" name="apellidos" id="">
  </div>
  <!-- EL TIPO SUBMIT ENVIA LOS DATOS DEL FORMULARIO -->
  <input type="submit" name="" value="Enviar"id="">
  </form>
</body>
</html>