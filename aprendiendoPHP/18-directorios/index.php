<?php
//Crear carpeta
if(is_dir('micarpeta')){
  mkdir('micarpeta',0777) or die("NO se puede crear la carpeta");
}else{
  echo'ya exise la carpeta';
}
//Borrar carpeta
rmdir('micarpeta');
echo '<h1> Contenido carpeta </h1>';
  if($gestor = opendir('./micarpeta')){
    while(false !==($archivo = readdir($gestor)) ){
    if($archivo !== '.'&& $archivo !=='..'){
      echo $archivo,'</br>';
    }
    }
  }
    
?>