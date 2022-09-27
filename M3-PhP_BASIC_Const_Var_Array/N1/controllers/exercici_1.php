<!-- 
    ENUNCIAT
        Defineix una variable de cada tipus: integer,double,string i boolean. 
        Després, imprimeix-les per pantalla. 
-->

<?php

    // declarar variables
    $intFundacio  = 1899;
    $dblPalanques = 885.261;
    $strPatrocini = "Spotify";
    $blnFairPlay  = true;

    // imprimir per pantalla - interpretat pel servidor
    echo '<b>EXERCICI-1</b> <br><br>';
    echo ' - Fundació: ' . $intFundacio . '<br>'
    . ' - Palanques: ' . $dblPalanques . '<br>'
    . ' - Patrocini: ' . $strPatrocini . '<br>'
    . ' - Fair Play: ';

    if ($blnFairPlay == true) {
        echo 'SI :)' . '<br>' ;
    }elseif ($blnFairPlay == false) {
        echo 'NO :(' . '<br>' ;
    }

?>
