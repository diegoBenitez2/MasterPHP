<?php
/*//r = lectura
//x = ejecucion
//w = escritura
//a = leer y escribir
  $archivo = fopen("fichero.txt","a");
  //Leer contenido
  while(!feof($archivo)){
    $contenido = fgets($archivo);
      echo $contenido.'</br>';
  }

  //Escribir
  fwrite($archivo,"soy un texto metido en el archivo/n");
  //Cerrar el archivo
  fclose($archivo);*/

  //copiar archivos
  // copy('fichero.txt','fichero_copiado.txt') or die("Error al copiar");

  //Renombrar un fichero
  // rename('fichero_copiado.txt',"archivo_recopiado.txt");
//Eliminar
// unlink('archivo_recopiado.txt') or die("Error al guardar")  ;

//Comprobar la existencia de un archivo

if(file_exists("fichero.txt")){
  echo "el archivo exixte";
}else{
  echo"No existe";
}
?>