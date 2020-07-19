<?php
//guardo el archivo en una variable temporal
  $archivo = $_FILES['archivo'];
  var_dump($archivo);
  //accedo a las propiedades tipo y nombre del archivo
  $nombre= $archivo['name'];
  $tipo = $archivo['type'];
  //Valido el tipo de archivo
  if($tipo === 'image/jpg' || $tipo ==='image/jpeg' || $tipo === 'image/png' || $tipo === 'image/gif'){
  //Creamos la carpeta si no existe
    if(!is_dir('images')){
      mkdir ('images',0777);
    }
    //subo el archivo temporal  a la carpeta destino
    move_uploaded_file($archivo['tmp_name'],'images/'.$nombre);
    echo '<h1> Imagen Subida';
    //Espera 5 seg y redirige.
    header('refresh:5; URL = index.php');
  }else{
    header('refresh:5;URL = index.php');
  }
  die();
?>