<!-- 
ENUNCIAT
    Imprimeix per pantalla "Hello, World!" utilitzant una variable. Després:

    - Converteix tots els caràcters de l'string a majúscules i imprimeix en pantalla. (strtoupper)
    - Imprimeix per pantalla la mida (longitud) de la variable. (strlen)
    - Imprimeix per pantalla l'string en ordre invers de caràcters. (strrev)
    - Crea una nova variable amb el contingut "Aquest és el curs de PHP" i imprimeix per pantalla la concatenació de tots dos strings.
 -->

<?php
    echo '<b>EXERCICI-2</b> <br><br>';

    $strSaludaByDefault = "Hello, World!";
    echo '- Variable: ' . $strSaludaByDefault . '<br>';

    $strSaludaUpperCase = strtoupper($strSaludaByDefault);
    echo '- En majús: ' . $strSaludaUpperCase . '<br>';

    $strSaludaLongitut = strlen($strSaludaUpperCase);
    echo '- Longitut: ' . $strSaludaLongitut . '<br>';

    $strSaludaRevertit = strrev($strSaludaByDefault);
    echo '- Revertit: ' . $strSaludaRevertit . '<br>';

    $strMessageCursPhp = "Aquest és el curs de PhP";
    echo '- Concatat: ' . $strSaludaByDefault . ' ' . $strMessageCursPhp . '<br><br>';

?>