  <?php
    $cantanes = ['jay','jennnofer lopez','joe arrollo'];
    $numeros =[1,2,3,4,5];
    //orden alfabetico
    asort($cantanes);
    var_dump($cantanes);
    //ordenar numericamante
    sort($cantanes);
    var_dump($cantanes);
    //Añadir elementos 
    $cantanes[] ='pedrito';
    array_push($cantanes,'jay lo');
    //quitar el ultimo elemento
    array_pop($cantanes);
    //quitar un elemnto espacifico
    unset($cantanes[2]);
    //Aleatorio
    $indice= array_rand($cantantes);
    echo $cantantes[$indice];
    //Dar la vuelta
    var_dump(array_reverse($numeros));
    //Buscar en un array
    $resultado =array_search('pedrito',$cantanes);
    var_dump($resultado);
    //Contar numeros de elementos
    echo count($numeros);
    echo sizeof($cantantes);
  ?>
