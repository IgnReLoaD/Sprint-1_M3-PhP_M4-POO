<!-- 
ENUNCIAT:

Crea dos arrays, un que inclogui 5 integers, i un altre que inclogui 3 integers.

Afegeix un valor més a l'array que conté 3 integers.
Mescla els dos arrays i imprimeix la mida de l'array resultant per pantalla.
Ara imprimeix per pantalla l'array resultant valor a valor.
  -->

<?php
    // entrada de dades
    $arrCinc = array(1,3,5,7,9);
    $arrTres = array(2,4,6);

    // llogica de dades
    $arrTres[] = 8;
    $arrTots = array_merge($arrCinc,$arrTres);
    $arrLong = count($arrTots);

    // sortida de dades
    echo '<b>EXERCICI-5 </b><br><br>';

    echo 'La longitut del array mesclat és: ' . count($arrTots) . '<br><br>';
    echo 'Contingut array mesclat amb print_r: ' . print_r(array_values($arrTots)) . '<br><br>';

    // NO recomanat per:  
    //  - ens limita a valors numèrics
    //  - els Keys poden estar desordenats
    //  - si falta algun Key esborrat dona error Undefined offset
    echo 'Contingut array mesclat amb bucle FOR: ' . '<br>';
    for ($i = 0; $i < $arrLong; ++$i){
        print $arrTots[$i];
    }

    // SI recomanat:
    echo '<br>';
    echo 'Contingut array mesclat amb bucle ForEach: ' . '<br>';
    foreach ($arrTots as $valor) {
      print $valor;
    }

    // opcional, while-list-each:
    while(list($var, $val) = each($arrTots)) {
        print "$var is $val <br>";
    }

    // var_dump:
    var_dump(each($arrTots));

    // a partir de PhP 5.5 podem utilitzar List amb ForEach:
    // Esto:
    foreach ($users as $user){
        list($nombre, $apellido) = $user;
        echo "Usuario: $nombre $apellido <br>";
    }
    // Devuelve lo mismo que esto:
        foreach ($users as list($nombre, $apellido))
    {
        echo "Usuario: $nombre $apellido <br>";
    }

    // array_walk (com el MAP de JavaScript):
    function mostrarMascotas($nombre, $animal){
        echo strtoupper($animal) . " -> $nombre" . "<br>";
    }
    // Muestra el listado del array:
    array_walk($animales, 'mostrarMascotas');

?>
