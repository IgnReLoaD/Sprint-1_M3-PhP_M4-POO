<!-- 
    ENUNCIAT:

    Crea una constant que contingui el teu nom i l'imprimeixi per pantalla. 
    Has d'imprimir-la amb format de títol i lletra en negreta en HTML.
 -->


<?php
    echo '<b>EXERCICI-3</b> <br><br>';

    // definició de Constants amb 'Define':
    define('NOMBRE', "Ignasi");
    echo constant('NOMBRE');

    // definició de Constants amb 'Const':
    const APELLIDO = "Ortiz";
    echo ' ' . APELLIDO;

    // maquetació format Títol i lletra negreta Html:
    echo '<h1>' . NOMBRE . ' ' . APELLIDO . '</h1>';

?>