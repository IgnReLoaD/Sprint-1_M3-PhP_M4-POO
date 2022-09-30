<!-- 
    ENUNCIAT:
    Escriu una funció que determini la quantitat total a pagar per una trucada telefònica 
    segons les següents premisses:
    - Tota trucada que duri menys de 3 minuts té un cost de 10 cèntims.
    - Cada minut addicional a partir dels 3 primers és un pas de comptador i costa 5 cèntims.
  -->

    <!-- instruccions PhP  -->
<?php
    echo '<b> EXERCICI-2 </b> <br><br>';

    // funcions amb valors Float (decimals)
    function trucada($intTemps, $floTarifaBase, $floTarifaPaso) {        
        return  ($floTarifaBase + $floTarifaPaso + ((($intTemps-3) * $floTarifaPaso)));
    }

    if ( !empty($_POST['inpTemps']) ) {

        // entrada de dades
        $intTemps = intval($_POST['inpTemps']);    
        $floTotalCoste = 0;
        define("floTARIFA_BASE",0.10);
        define("floTARIFA_PASO",0.05);

        // llogica de dades
        // ($intTemps<3) ? ($floTotalCoste=0.10) : ($floTotalCoste = 0.10 + 0.05 + ((($intTemps-3) * 0.05)));
        ($intTemps<3) ? ($floTotalCoste=floTARIFA_BASE) : ($floTotalCoste = trucada($intTemps,floTARIFA_BASE,floTARIFA_PASO));        
        unset($_POST);
        
        // sortida de dades        
        echo 'La trucada costa: ' . number_format($floTotalCoste,2) . '€ !! <br><br>';
    }

?>

    <!-- renderitzat Html  -->
<form action="index.php" method="post">
    <label for="inpTemps">COST TRUCADA:<br><br>Quant costa la teva trucada?<br> &nbsp; ... entra els minuts (1-15):</label>
    <input type="number" id="inpTemps" name="inpTemps" value="0" min="1" max="15">
    <br>
    <br>
    <input type="submit" value=" mostrar cost ">
    <br> 
    <br>     
</form>
