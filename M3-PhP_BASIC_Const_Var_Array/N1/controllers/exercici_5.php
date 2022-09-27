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

    // Bucle FOR ... NO recomanat per:  
    //  - ens limita a valors numèrics
    //  - els Keys poden estar desordenats
    //  - si falta algun Key esborrat dona error Undefined offset
    echo 'Contingut array mesclat amb bucle FOR: <br>';
    for ($i = 0; $i < $arrLong; ++$i){
        print $arrTots[$i];
    }
    echo '<br>';

    // ForEach ... SI recomanat:    
    echo 'Contingut array mesclat amb bucle ForEach: <br>';
    foreach ($arrTots as $valor) {
      print $valor;
    }
    echo '<br>';

    // opcional, while-list-each ... mostra posició->valor en cada iteració:
    echo 'Contingut array amb While-list-each: <br>';
    while(list($pos, $val) = each($arrTots)) {
        print "$pos is $val <br>";
    }
    echo '<br>';

    // var_dump:
    echo 'Contingut array amb var_dump: <br>';
    var_dump(each($arrTots));
    echo '<br><br>';

    // a partir de PhP 5.5 podem utilitzar List amb ForEach:
    // Esto:
    echo 'Contingut array amb ForEach + List: <br>';
    foreach ($arrTots as $element){
        list($clau, $valor) = $element;
        echo "Posició: $clau $valor <br>"; 
    }
    // Devuelve lo mismo que esto:
    echo 'Contingut array amb ForEach + List (nested): <br>';
    foreach ($arrTots as list($clau, $valor)) {
        echo "Posició: $clau $valor <br>";
    }

    // array_walk (com el MAP de JavaScript):
    echo 'Contingut array amb Array_Walk (map de JS): <br>';
    function mostrarValors($posicio, $valor){
        echo strtoupper($valor) . " -> $posicio" . "<br>";
    }
    // Iteració per mostrar llistat array amb Callback Function 'mostrarValors':
    array_walk($arrTots, 'mostrarValors');
    echo '<br>';

?>
