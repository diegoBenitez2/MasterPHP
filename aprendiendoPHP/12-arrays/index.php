<!-- ARRAYS -->
<!-- Coleecino o conjunto de datos/valores bajo un unico nombre -->
<?php
  $peliculas = array('Btman','superman','magnificos');
  $cantantes = ['jay','jennnofer lopez','joe arrollo'];
  // ARRAY ASOCIATIVOS
  $personas = array('nombre'=>'Diego',
                    'apellido'=>'Benitez',
                    'Web'=> 'diego.com');
  var_dump($personas['nombre']);
  //ARRAY MUTIDIMENSIONALES
  $contactos = array(
    array(
      'nombre'=> 'Andrea',
      'email'=> 'andres.co.com'
    ),
    array(
      'nombre'=> 'Luis',
      'email'=> 'andres.co.com'
    ),array(
      'nombre'=> 'Antonio',
      'email'=> 'andres.co.com'
    )
  );
  
  echo $contactos[1]['nombre'];

  //recorrer en array asociativo con for each
  foreach ($contactos as $key => $contacto) {
    echo $contacto['email'];
  }

  var_dump($peliculas);
  echo '</br>';
  echo $cantantes[0];
  echo '</br>';
  echo $peliculas[3];
  // Recorriendo con FOR
  echo '<h1> LISTADO DE PELICULAS</h1>';
  echo '</br>';
  echo '<ul>';
  for($i = 0; $i <= count($cantantes);$i++){
  echo '<li>'.$peliculas[$i].'</li>';
  }
  echo '</ul>';
  echo '<h1> LISTADO DE PELICULAS</h1>';
  echo '</br>';
  echo '<ul>';
  foreach ($cantantes as $cantante) {
    echo '<li>'.$cantante.'</li>';
  }
  echo '</ul>';
?>