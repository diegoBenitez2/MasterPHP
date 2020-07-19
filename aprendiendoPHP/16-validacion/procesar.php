<?PHP
  $error = true;
  if(!empty($_POST['nombre'])|| !empty($_POST['apellido'])|| !empty($_POST['edad'])|| !empty($_POST['email'])
  || !empty($_POST['password'])){
    $error == 'ok';
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad =(int) $_POST['edad'];
    $email = $_POST['email'];
    $pass = $_POST['password'];

    //VALIDAR EL NOMBRE
    if(!is_string($nombre)|| preg_match("/[0-9]+/",$nombre)){
      $error = 'nombre';
    }
    if(!is_string($apellido)|| preg_match("/[0-9]+/",$apellido)){
      $error = 'apellido';
    }
    if(!is_int($edad)|| !filter_var($edad,FILTER_VALIDATE_INT)){
      $error = 'edad';
    }
    if(!is_string($email)|| !filter_var($email,FILTER_VALIDATE_EMAIL)){
      $error = 'email';
    }
    if(strlen($pass)<5){
      $error = 'password';
    }

  } else{
    $error = 'faltan_datos';
  }
  if($error != 'ok'){
      header("location: index.php?error=$error");
  }
  var_dump($_POST);
  var_dump($error);
  //detener la ejecucion
  die();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
</head>
<body>
<h1>DATOS VALIDADOS CORRECTAMENTE</h1>
  <?php if($error === ok):?>;
    <p><?= $nombre?></p>;
    <p><?= $apellido?></p>;
    <p><?= $edad?></p>;
    <p><?= $pass?></p>;
    <?php endif;?>
</body>
</html>