<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formularios PHP </title>
</head>
<body>
  <h1>FORMULARIO</h1>
  <!--  min-lenght= establezco la cantidad minima de caraceres
        max-lenght= establezco la cantidad maxima de caraceres
        autofocus = indicar al usuario un campo
        required = requiere que el campo vaya con informacion -->
  <form action="" method ="POST" enctype ="multipart/form-data">
    <label for="nombre">
      Nombre<input type="text" name="nombre" id="" autofocus="autofocus"/>
    </label></br>
    <label for="apellido">
      Apellido<input type="text" name="apellido" id=""/>
    </label></br></br>
    <input type="submit" value="Enviar"></br></br>
    
    <label for="boton"> boton
      <input type="button" name="boton" value ="Click"/>
    </label></br></br>
    <label for="sexo"> Sexo
      Hombre<input type="checkbox" name=" valuesexo" value = 'hombre'/></br>
      Mujer <input type="checkbox" name="sexo" = 'mujer'>
    </label> </br>
     <label for="boton"> Clikeame
      <input type="button" name="boton" value ="Click"/>
    </label></br></br>
     <label for="color">
      <input type="color" name="color"/>
    </label></br></br>
    <label for="correo">
      email <input type="email" name="correo"/>
    </label></br></br>
    <label for="archivo"> archivo
      <input type="file" name="archivo"/>
    </label></br></br>
    <label for="numero">numero</label></br>
      <input type="number" name="numero"/>
    </br></br>
    <label for="pass">Contraseña</label></br>
      <input type="password" name="pass"/>
    </br></br>
    <label for="continentes">Continentes</label></br>
      America sur<input type="radio" name="continentes" value="America del Sur"/>
      America norte<input type="radio" name="continentes" value="America del Norte"/>
      Europa<input type="radio" name="continentes" value="Europa"/>
    </br></br>
    <label for="web">Pagina Web</label></br>
      <input type="url" name="web"/>
    </br></br>
    <textarea name="" id="" cols="30" rows="10"></textarea>
    </br></br>
    Peliculas
    <select name="peliculas" id="">
      <option value="Spiderman">Spiderman</option>
      <option value="Batman">Batman</option>
      <option value="Superman">Superman</option>
    </select>
  </form>
</body>
</html>