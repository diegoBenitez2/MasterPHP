<?php
//Crear carpeta
if(is_dir('micarpeta')){
  mkdir('micarpeta',0777) or die("No se puede crear la carpeta");
}else{
  echo'ya exise la carpeta';
}
//Borrar carpeta
rmdir('micarpeta');
echo '<h1> Contenido carpeta </h1>';
  if($gestor = opendir('./micarpeta')){
  //no Existe archivos en la carpeta
    while(false !==($archivo = readdir($gestor)) ){
    if($archivo !== '.'&& $archivo !=='..'){
      echo $archivo,'</br>';
    }
    }
  }
    
?>